<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/21
 * Time: 11:21
 */
namespace app\index\controller;
use Aliyun\DySDKLite\Sms\mysms;
use app\index\WxApi;
use service\ToolsService;
use think\Db;
use think\Request;
use think\Session;

class Myapi extends \think\Controller{
    public function __construct(Request $request = null)
    {
        ToolsService::corsOptionsHandler();
    }
    //微信支付
    public function wxpay(){
        $pay=new WxApi();
        //$body,$sn,$price,$openid,$tz_url = false
        $configs=Db::table('configs')->where('id',1)->find();
        $body='云乐互联支付';
        $sn=time().$this->getcode(8);
        $price=$configs['price'];
        $openid=input('openid');
        $uid=input('uid');
        $gid=input('gid');
        $paytype=input('paytype');//0会员支付 1-买号 2-增值服务
        $attach=$uid.'|'.$gid.'|'.$paytype;
        $res=$pay->UnifiedOrder($body,$sn,$attach,$price*100,$openid);
        $re = json_decode($res,true);
        if ($re){
            $re['code'] = 1;
            $re['msg'] = '支付成功';
        }else{
            $re['code'] = 0;
            $re['msg'] = '支付失败';
        }
        echo json_encode($re);
    }
    //获取金额
    public function getprice(){
        $configs=Db::table('configs')->where('id',1)->find();
        $re['price']=$configs['price'];
        echo json_encode($re);
    }
    //微信登录入口
    public function wxlogin(){
        $wxConfig=Db::table('configs')->where('id',1)->find();
        $url = urlencode(request()->domain().'/yikehao/index/myapi/dealwxlogin');
        $apiUrl = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$wxConfig['appid']}&redirect_uri={$url}&response_type=code&scope=snsapi_userinfo#wechat_redirect";
        header('Location:'.$apiUrl);
    }
    //用户登录
    public function doLogin(){
        $phone=input('phone');
        $psw=input('psw');
        $openid=input('openid');
        $type=input('type');
        if ($type==1){//验证码登录
            $code=input('code');
            if (empty($code)){
                $redata['code']=0;
                $redata['msg']='登录失败。验证码不可为空';
                echo json_encode($redata);
            }else{
                //先判断验证码
                $istrue=Db::table('smscode')->where(array('phone'=>$phone,'code'=>$code))->find();
                if ($istrue){
                    $loginre=Db::table('userinfo')->where('phone',$phone)->find();
                    if ($loginre){
                        Db::table('smscode')->where('phone',$phone)->delete();
                        $redata['code']=1;
                        $redata['state']=$loginre['state'];
                        $redata['msg']='登录成功';
                        echo json_encode($redata);
                    }else{
                        $redata['code']=0;
                        $redata['msg']='登录失败';
                        echo json_encode($redata);
                    }
                }else{
                    $redata['code']=0;
                    $redata['msg']='登录失败。验证码错误';
                    echo json_encode($redata);
                }
            }

        }else{
            //账号密码登录
            $re=Db::table('userinfo')->where(array('phone'=>$phone,'psw'=>$psw,'openid'=>$openid))->find();
            if ($re){
                $redata['code']=1;
                $redata['msg']='登录成功';
                $redata['state']=$re['state'];
                echo json_encode($redata);
            }else{
                $redata['code']=0;
                $redata['msg']='登录失败。检查用户名、密码、openid';
                echo json_encode($redata);
            }
        }

    }
    //获取用户信息
    public function getuseropenid(){
        $id=input('uid');
        $re=Db::table('userinfo')->where('id',$id)->find();
        echo json_encode($re);
    }
    //发送短信认证码
    public function sendcode(){
        include ROOT_PATH . 'extend/Alidayu/sendSms.php';
        //获取配置信息$keyid,$keysecret,$signname,$tmpcode,$phone,$code
        $configinfo=Db::table('configs')->where('id',1)->find();
        $keyid=$configinfo['accesskeyid'];
        $keysecret=$configinfo['accesskeyseret'];
        $signname=$configinfo['smssign'];
        $tmpcode=$configinfo['smscode'];
        $getphone=input('phone');
        $openid=input('openid');
        $code=$this->getcode(4);
        $mysms=new Mysms();
        $returninfo=$mysms->sendSms($keyid,$keysecret,$signname,$tmpcode,$getphone,$code);
        $re=json_encode($returninfo);
        $dealre=json_decode($re,true);
        if ($dealre['Message']=='OK'){
            //保存认证码
            $issave=Db::table('smscode')->where('phone',$getphone)->find();
            if ($issave){
                Db::table('smscode')->where('phone',$getphone)->update(array('code'=>$code));
            }else{
                Db::table('smscode')->insert(array('phone'=>$getphone,'code'=>$code));
            }
            echo $this->resultToJson(1,'发送成功',60);
        }else{
            echo $this->resultToJson(0,'发送失败',0);
        }
    }
    //用户注册
    public function register(){
        $phone=input('phone');
        $psw=input('psw');
        $openid=input('openid');
        $code=input('code');
        if (empty($phone)||empty($psw)||empty($openid)){
            $redata['code']=0;
            $redata['msg']='注册失败。手机号或者密码或者openid不可为空';
            echo json_encode($redata);
        }else if(empty($code)){
            $redata['code']=0;
            $redata['msg']='注册失败。请输入验证码';
            echo json_encode($redata);
        }else{
            //先判断认证码
            $istrue=Db::table('smscode')->where(array('phone'=>$phone,'code'=>$code))->find();
            if ($istrue){
                $data['phone']=$phone;
                $data['psw']=$psw;
                $data['openid']=$openid;
                //查找用户是否存在
                $ishave=Db::table('userinfo')->where('phone',$phone)->find();
                if ($ishave){
                    $redata['code']=0;
                    $redata['msg']='已注册过，无法再次注册';
                    echo json_encode($redata);
                }else{
                    $upre=Db::table('userinfo')->insert($data);
                    if ($upre){
                        Db::table('smscode')->where('phone',$phone)->delete();
                        $redata['code']=1;
                        $redata['msg']='注册成功';
                        echo json_encode($redata);

                    }else{
                        $redata['code']=0;
                        $redata['msg']='注册失败。无法保存数据';
                        echo json_encode($redata);
                    }
                }

            }else{
                $redata['code']=0;
                $redata['msg']='注册失败。验证码';
                echo json_encode($redata);
            }

        }
    }
    //处理微信登录信息
    public function  dealwxlogin(){
        $getcode = input('code');
        $wxConfig=Db::table('configs')->where('id',1)->find();
        $tokenandappid=$this->get_access_token_and_openid($wxConfig['appid'],$wxConfig['appSecret'],$getcode);
        $openid=$tokenandappid['openid'];
        //$access_token=$tokenandappid['access_token'];

        //获取用户信息
//        $userresult = file_get_contents("https://api.weixin.qq.com/sns/userinfo?access_token=" . $access_token . "&openid=" . $openid . '&lang=zh_CN');
//        $userinfo = json_decode($userresult, true);
//
//        $getusername = $userinfo['nickname'];
//        $getheaderimg = $userinfo['headimgurl'];
        //保存openid到用户表中
        //先检查表中是否已经存在该用户，如果存在直接跳转
        //$checkres=Db::table('userinfo')->where('openid',$openid)->find();
        //exit($openid);
//        if ($checkres){
//            session("session_openid", $openid);
//            $this->redirect(request()->domain().'/#/pages/login?uid='.$checkres['id']);
//        }else{
//            $data['openid']=$openid;
//            $data['headimg']=$getheaderimg;
//            $data['nickname']=$getusername;
//            $data['addtime']=date('Y-m-d H:i:s',time());
//            $addre=Db::table('userinfo')->insert($data);
//            $newid=Db::table('userinfo')->getLastInsID();
            //if ($addre){
                session("session_openid", $openid);
                $dealopenid=$this->encodeanduecode('itxiaolong',$openid,0);
                $this->redirect(request()->domain().'/#/pages/login?openid='.$dealopenid);
           // }else{
//                $redata['code']=0;
//                $redata['msg']='登录失败。请重试';
//                echo json_encode($redata);
           // }
       // }

    }
    //随机生成验证码
    public function getcode($n){
        $num="";
        for($i=0;$i<$n;$i++){
            $num .= rand(0,9);
        }
        return $num;
    }
    //微信登录相关
    private  function get_access_token_and_openid($appid, $secret, $code)
    {
        $getaccess = file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $appid . "&secret=" . $secret . "&code=" . $code . '&grant_type=authorization_code');
        $getacctoken = json_decode($getaccess, true);
        return $getacctoken;
    }

    /**
     * @param $key  解密密钥
     * @param $string 需要加密的文字
     * @param $decrypt 0加密 1解密
     * @return string 返回结果
     */
    function encodeanduecode($key, $string, $decrypt){
        if($decrypt){
            $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "12");
            return $decrypted;
        }else{
            $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
            return $encrypted;
        }
    }
    //轮播图
    public function getbanner(){
        $bannerlist=Db::table('banner')->select();
        foreach ($bannerlist as $k=>$v){
            $bannerlist[$k]['imgs']=request()->domain().$v['imgs'];
        }
        if ($bannerlist){
            $res['code']=1;
            $res['msg']='获取轮播图';
            $res['data']=$bannerlist;
            echo json_encode($res);
        }else{
            $res['code']=0;
            $res['msg']='无数据';
            $res['data']=$bannerlist;
            echo json_encode($res);
        }
    }
    //头部分类
    public function gettoptype(){
        $typelist=Db::table('type')->limit(10)->select();
        if ($typelist){
            echo $this->resultToJson(1,'头部分类获取成功',$typelist);
        }else{
            echo $this->resultToJson('0','获取头部分类失败','');
        }
    }
    //获取全部分类
    public function gettype(){
        $typelist=Db::table('type')->select();
        if ($typelist){
            echo $this->resultToJson(1,'分类获取成功',$typelist);
        }else{
            echo $this->resultToJson('0','获取分类失败','');
        }
    }
    //搜索账号
    public function findhao(){
        $getkeyword=input('keyword');
        $pages=input('page',1);
        $pageparam=['query'=>[]];//查询条件
        $pageparam['query']['zhname']=['like',"%".$getkeyword."%"];
        $pageparam['query']['state']=2;
        $userlist=Db::table('sellinfo')->where($pageparam['query'])->page($pages,10)->select();
        if ($userlist){
            echo $this->resultToJson(1,'搜索返回成功',$userlist);
        }else{
            echo $this->resultToJson('0','搜索返回失败','');
        }
    }
    //账号列表，条件待设
    public function haolist(){
        $pages=input('page',1);
        $pageparam=['query'=>[]];//查询条件
        $pageparam['query']['state']=2;
        $userlist=Db::table('sellinfo')->where($pageparam['query'])->page($pages,10)->select();
        if ($userlist){
            echo $this->resultToJson(1,'返回号列表成功',$userlist);
        }else{
            echo $this->resultToJson(0,'返回号列表失败','');
        }
    }
    //动态交易
    public function sellnotifi(){
        $ordernews=Db::table('payorder')->select();
        foreach ($ordernews as $k=>$v){
            $ordernews[$k]['totime']=$this->formatTime($v['paytime']);
        }
        if ($ordernews){
            echo $this->resultToJson(1,'返回交易动态成功',$ordernews);
        }else{
            echo $this->resultToJson(0,'返回交易动态失败','');
        }
    }
    //返回结果的封装
    function resultToJson($code,$msg,$data){
        $re['code']=$code;
        $re['msg']=$msg;
        $re['data']=$data;
        return json_encode($re);
    }
    //时间计算格式
    function formatTime($date) {
        $str = '';
        $timer = strtotime($date);
        $diff = $_SERVER['REQUEST_TIME'] - $timer;
        $day = floor($diff / 86400);
        $free = $diff % 86400;
        if($day > 0) {
            return $day."天前";
        }else{
            if($free>0){
                $hour = floor($free / 3600);
                $free = $free % 3600;
                if($hour>0){
                    return $hour."小时前";
                }else{
                    if($free>0){
                        $min = floor($free / 60);
                        $free = $free % 60;
                        if($min>0){
                            return $min."分钟前";
                        }else{
                            if($free>0){
                                return $free."秒前";
                            }else{
                                return '刚刚';
                            }
                        }
                    }else{
                        return '刚刚';
                    }
                }
            }else{
                return '刚刚';
            }
        }
    }

}