<?php
namespace app\index\controller;
use Aliyun\DySDKLite\Sms\Mysms;
use app\index\WxApiSM;
use think\Controller;
use think\Db;
use think\Session;

class Login extends Base
{
    public function index()
    {
        if (request()->isPost()){
            $name=input('username');
            $psw=input('psw');
            $re=Db::table('userinfo')->where(array('phone'=>$name,'psw'=>$psw))->find();
            if ($re){
                $res['status'] = 1;
                $res['msg'] = '登录成功';
                //设置session
                Session::set('userid',$re['uid']);
                //更新登录时间和ip
                $this->updatelogininfo($re['uid']);
                $this->checkviptime($re['uid']);
            }else{
                $res['status'] = 0;
                $res['msg'] = '账户或者密码错误';
            }
            return json_encode($res);
        }
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);

        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);
        $payxieyi=Db::table('xieyi')->where('id',1)->find();
        $this->assign('xieyi',$payxieyi);
        //基本信息
        $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
        $this->assign('baseinfo',$basainfo);
        $userid=Session::get('userid');
        $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
        $this->assign('uinfo',$uinfo);
        return $this->fetch();
    }
    //扫码支付
    public function payforcode(){
        //error_reporting(E_ERROR);
        vendor('phpqrcode.phpqrcode');//引入插件类
        $pay=new WxApiSM();
        $payurl=$pay->UnifiedOrder('扫码支付测试','666',1,'001');
        $QRcode=new \QRcode();
        $level = 'L';
        $size = 9;
        ob_start();
        $QRcode->png($payurl,false,$level,$size,4);
        $data =ob_get_contents();
        echo "data:image/jpeg;base64,".base64_encode($data);
    }
    //检查手机号是否存在
    public function checkphoneishave(){
        $getphone=input('phone');
        $issave=Db::table('userinfo')->where('phone',$getphone)->find();
        if ($issave){
            $arr['status']=0;
            $arr['msg']='已存在手机号';
        }else{
            $arr['status']=1;
            $arr['msg']='可以注册';
        }
        echo json_encode($arr);
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
        $this->checkphoneishave($getphone);
        $code=$this->getcode();
        $mysms=new Mysms();
        $returninfo=$mysms->sendSms($keyid,$keysecret,$signname,$tmpcode,$getphone,$code);
        $re=json_encode($returninfo);
        $dealre=json_decode($re,true);
        if ($dealre['Message']=='OK'){
            //保存认证码
            $issave=Db::table('smscode')->where('phone',$getphone)->find();
            if ($issave){
                Db::table('smscode')->where('phone',$getphone)->update(array('code'=>$code,'addtime'=>time()));
            }else{
                Db::table('smscode')->insert(array('phone'=>$getphone,'code'=>$code,'addtime'=>time()));
            }
            $arr['status']=1;
            $arr['msg']='发送成功';;
            //$arr['code']=md5('xiaolong'.$code);
            echo json_encode($arr);
        }else{
            $arr['status']=0;
            $arr['msg']='发送失败';
            $arr['err']=$dealre['Message'];
            echo json_encode($arr);
        }
    }
    //用户注册
    public function registers(){
        $phone=input('phone');
        $psw=input('psw');
        $code=input('code');
        if (empty($phone)||empty($psw)){
            $redata['status']=0;
            $redata['msg']='注册失败。手机号或者密码不可为空';
            echo json_encode($redata);
        }else if(empty($code)){
            $redata['status']=0;
            $redata['msg']='注册失败。请输入验证码';
            echo json_encode($redata);
        }else{
            //先判断认证码
            $istrue=Db::table('smscode')->where(array('phone'=>$phone,'code'=>$code))->find();
            if ($istrue){
                //开始注册
                $adddata['phone']=$phone;
                $adddata['psw']=$psw;
                $adddata['addtime']=date('Y-m-d H:i:s');
                $addre=Db::table('userinfo')->insert($adddata);
                if ($addre){
                    Db::table('smscode')->where('phone',$phone)->delete();
                    $redata['status']=1;
                    $redata['msg']='注册成功';
                    echo json_encode($redata);
                }else{
                    $redata['status']=0;
                    $redata['msg']='注册失败。未知错误';
                    echo json_encode($redata);
                }

            }else{
                $redata['status']=0;
                $redata['msg']='注册失败。验证码错误';
                echo json_encode($redata);
            }

        }
    }
    //手机号登录
    public function loginsms(){
        $phone=input('phone');
        $code=input('code');
        //先判断认证码
        $istrue=Db::table('smscode')->where(array('phone'=>$phone,'code'=>$code))->find();
        if (!$istrue){
            $redata['status']=0;
            $redata['msg']='登录失败。验证码错误';
            echo json_encode($redata);
        }else{
            $re=Db::table('userinfo')->where(array('phone'=>$phone))->find();
            if ($re){
                Db::table('smscode')->where('phone',$phone)->delete();
                $res['status'] = 1;
                $res['msg'] = '登录成功';
                //设置session
                Session::set('userid',$re['uid']);
                //更新登录时间和ip
                $this->updatelogininfo($re['uid']);

            }else{
                $res['status'] = 0;
                $res['msg'] = '该手机号未注册';
            }
            return json_encode($res);
        }
    }
    public function updatelogininfo($uid){
        Db::table('userinfo')->where('uid',$uid)
            ->update(array('logintime'=>date('Y-m-d H:i:s',time()),'loginip'=>$this->getip()));
    }
    public function getip() {
        //strcasecmp 比较两个字符，不区分大小写。返回0，>0，<0。
        if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
            $ip = getenv('REMOTE_ADDR');
        } elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $res =  preg_match ( '/[\d\.]{7,15}/', $ip, $matches ) ? $matches [0] : '';
        return $res;
        //dump(phpinfo());//所有PHP配置信息
    }
    //随机生成认证码
    public function getcode(){
        $num="";
        for($i=0;$i<4;$i++){
            $num .= rand(0,9);
        }
        return $num;
    }
    //判断更新会员过期状态
    public function checkviptime($uid){
        $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
        if($uinfo['vipstate']==2){
            //判断时间
            $viptime=$uinfo['paytime'];
            $pktime=(strtotime($viptime))+86400*90-time();
            if ($pktime<=0){
                //过期
                Db::table('userinfo')->where('uid',$uid)->update(array('vipstate'=>0));
            }
        }else if($uinfo['vipstate']==1){
            //判断时间
            $viptime=$uinfo['paytime'];
            $pktime=(strtotime($viptime))+86400*30-time();
            if ($pktime<=0){
                //过期
                Db::table('userinfo')->where('uid',$uid)->update(array('vipstate'=>0));
            }
        }
    }


}
