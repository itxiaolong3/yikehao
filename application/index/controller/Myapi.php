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
        $body='众筹金服';
        $sn=time();
        $price=$configs['price'];
        $openid=input('openid');
        $attach=input('message');
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
        $url = urlencode(request()->domain().'/tp5/index/myapi/dealwxlogin');
        $apiUrl = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$wxConfig['appid']}&redirect_uri={$url}&response_type=code&scope=snsapi_userinfo#wechat_redirect";
        header('Location:'.$apiUrl);
    }
    //用户登录
    public function doLogin(){
        $phone=input('phone');
        $psw=input('psw');
        $openid=input('openid');
        $type=input('type');
        if ($type==1){
            //认证码
            $code=input('code');
            if (empty($code)){
                $redata['code']=0;
                $redata['msg']='登录失败。认证码不可为空';
                echo json_encode($redata);
            }else{
                //先判断认证码
                $istrue=Db::table('smscode')->where(array('openid'=>$openid,'code'=>$code))->find();
                if ($istrue){
                    $loginre=Db::table('user')->where(array('openid'=>$openid,'phone'=>$phone))->find();
                    if ($loginre){
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
                    $redata['msg']='登录失败。认证码错误';
                    echo json_encode($redata);
                }
            }

        }else{
            //账号密码登录
            $re=Db::table('user')->where(array('phone'=>$phone,'psw'=>$psw,'openid'=>$openid))->find();
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
        $re=Db::table('user')->where('id',$id)->find();
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
        $code=$this->getcode();
        $mysms=new Mysms();
        $returninfo=$mysms->sendSms($keyid,$keysecret,$signname,$tmpcode,$getphone,$code);
        $re=json_encode($returninfo);
        $dealre=json_decode($re,true);
        if ($dealre['Message']=='OK'){
            //保存认证码
            $issave=Db::table('smscode')->where('openid',$openid)->find();
            if ($issave){
                Db::table('smscode')->where('openid',$openid)->update(array('code'=>$code));
            }else{
                Db::table('smscode')->insert(array('openid'=>$openid,'code'=>$code));
            }
            $arr['status']=1;
            $arr['msg']='发送成功';
            $arr['code']=md5('xiaolong'.$code);
            echo json_encode($arr);
        }else{
            $arr['status']=0;
            $arr['msg']='发送失败';
            echo json_encode($arr);
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
            $redata['msg']='注册失败。请输入认证码';
            echo json_encode($redata);
        }else{
            //先判断认证码
            $istrue=Db::table('smscode')->where(array('openid'=>$openid,'code'=>$code))->find();
            if ($istrue){
                $data['phone']=$phone;
                $data['psw']=$psw;
                //查找用户是否存在
                $ishave=Db::table('user')->where('phone',$phone)->find();
                if ($ishave){
                    $redata['code']=0;
                    $redata['msg']='已注册过，无法再次注册';
                    echo json_encode($redata);
                }else{
                    $upre=Db::table('user')->where('openid',$openid)->update($data);
                    if ($upre){
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
                $redata['msg']='注册失败。认证码错误';
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
        $access_token=$tokenandappid['access_token'];

        //获取用户信息
        $userresult = file_get_contents("https://api.weixin.qq.com/sns/userinfo?access_token=" . $access_token . "&openid=" . $openid . '&lang=zh_CN');
        $userinfo = json_decode($userresult, true);

        $getusername = $userinfo['nickname'];
        $getheaderimg = $userinfo['headimgurl'];
        //保存openid到用户表中
        //先检查表中是否已经存在该用户，如果存在直接跳转
        $checkres=Db::table('user')->where('openid',$openid)->find();
        //exit($openid);
        if ($checkres){
            session("session_openid", $openid);
            $this->redirect(request()->domain().'/#/pages/login?uid='.$checkres['id']);
//            if ($checkres['state']){
//                $redata['code']=3;
//                $redata['openid']=$openid;
//                $redata['msg']='已支付过';
//            }else{
//                $redata['code']=2;
//                $redata['openid']=$openid;
//                $redata['msg']='已登录过，未支付';
//            }
//            echo json_encode($redata);
        }else{
            $data['openid']=$openid;
            $data['headimg']=$getheaderimg;
            $data['nickname']=$getusername;
            $data['addtime']=date('Y-m-d H:i:s',time());
            $addre=Db::table('user')->insert($data);
            $newid=Db::table('user')->getLastInsID();
            if ($addre){
                session("session_openid", $openid);
                $this->redirect(request()->domain().'/#/pages/login?uid='.$newid);
//                $redata['code']=1;
//                $redata['msg']='首次登录';
//                $redata['openid']=$openid;
//                echo json_encode($redata);
            }else{
                $redata['code']=0;
                $redata['msg']='登录失败。请重试';
                echo json_encode($redata);
            }
        }

    }
    //随机生成认证码
    public function getcode(){
        $num="";
        for($i=0;$i<4;$i++){
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
}