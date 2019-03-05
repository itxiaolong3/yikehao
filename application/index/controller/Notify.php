<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 23:24
 */
namespace app\index\controller;
use app\index\WxApi;
use think\Controller;
use think\Db;
class Notify extends Controller
{
    //微信付款通知接收地址
    //买号支付-扫码
    public function wxPayTz(){
        if(request()->isPost()){
             $file = __DIR__ . '/payinfo.txt';
            $postXml = file_get_contents('php://input');
             file_put_contents($file,$postXml);
            $wxApi = new WxApi();
            //签名
            $sign = $wxApi->makeSign($postXml);
            //将xml转换成数组
            $reArr = $wxApi->fromXml($postXml);
            //验证签名
            if($reArr['sign'] != $sign) echo '<xml> 
				<return_code><![CDATA[FAIL]]></return_code>
				<return_msg><![CDATA[签名失败]]></return_msg>
				</xml>';
            $file = __DIR__ . '/checkinfo2.txt';
            file_put_contents($file,$reArr['sign'].'---'.$sign);

            //这里写回调逻辑
            $uidandtype=explode('|',$reArr['attach']);
            $uid=$uidandtype[0];
            $gid=$uidandtype[1];
            $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
            $ginfo=Db::table('sellinfo')->where('id',$gid)->find();
            $name=$ginfo['zhname'];
            $payprice=number_format($reArr['cash_fee']/100,2);
            $paytime=date('Y-m-d H:i:s',time());
            $phone=$uinfo['phone'];
            $types="买号支付";
            $ordernum=$reArr['out_trade_no'];
            //添加订单表
            Db::table('payorder')->insert(array('name'=>$name,'phone'=>$phone,'payprice'=>$payprice,
                'paytime'=>$paytime,'types'=>$types,'uid'=>$uid,'gid'=>$gid,'ordernum'=>$ordernum));
            echo '<xml> 
				<return_code><![CDATA[SUCCESS]]></return_code>
				<return_msg><![CDATA[OK]]></return_msg>
				</xml>';
        }
    }
    //会员支付-扫码
    public function wxPayTzSm(){
        if(request()->isPost()){
            $file1 = __DIR__ . '/sminfo.txt';
            $postXml = file_get_contents('php://input');
            file_put_contents($file1,$postXml);
            $wxApi = new WxApi();
            //签名
            $sign = $wxApi->makeSign($postXml);
            //将xml转换成数组
            $reArr = $wxApi->fromXml($postXml);
            //验证签名
            if($reArr['sign'] != $sign) echo '<xml> 
				<return_code><![CDATA[FAIL]]></return_code>
				<return_msg><![CDATA[签名失败]]></return_msg>
				</xml>';
            $file1 = __DIR__ . '/checksm.txt';
            file_put_contents($file1,$reArr['sign'].'---'.$sign);

            //这里写回调逻辑
            $uidandtype=explode('|',$reArr['attach']);
            $uid=$uidandtype[0];
            $type=$uidandtype[1];
            $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
            $payprice=number_format($reArr['cash_fee']/100,2);
            $paytime=date('Y-m-d H:i:s',time());
            $phone=$uinfo['phone'];
            $ordernum=$reArr['out_trade_no'];
            //添加订单表
            Db::table('viporder')->insert(array('phone'=>$phone,'payprice'=>$payprice,
                'paytime'=>$paytime,'types'=>$type,'uid'=>$uid,'ordernum'=>$ordernum));
            //修改用户表身份状态
            Db::table('userinfo')->where('uid',$uid)->update(array('paytime'=>$paytime,'vipstate'=>$type));
            echo '<xml> 
				<return_code><![CDATA[SUCCESS]]></return_code>
				<return_msg><![CDATA[OK]]></return_msg>
				</xml>';
        }
    }
    //增值服务-扫码
    public function wxPayTzser(){
        if(request()->isPost()){
            $file1 = __DIR__ . '/serinfo.txt';
            $postXml = file_get_contents('php://input');
            file_put_contents($file1,$postXml);
            $wxApi = new WxApi();
            //签名
            $sign = $wxApi->makeSign($postXml);
            //将xml转换成数组
            $reArr = $wxApi->fromXml($postXml);
            //验证签名
            if($reArr['sign'] != $sign) echo '<xml> 
				<return_code><![CDATA[FAIL]]></return_code>
				<return_msg><![CDATA[签名失败]]></return_msg>
				</xml>';
            $file1 = __DIR__ . '/checkser.txt';
            file_put_contents($file1,$reArr['sign'].'---'.$sign);

            //这里写回调逻辑
            $uidandtype=explode('|',$reArr['attach']);
            $uid=$uidandtype[0];
            $gid=$uidandtype[1];
            $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
            $goodinfo=Db::table('addserver')->where('id',$gid)->find();
            $payprice=number_format($reArr['cash_fee']/100,2);
            $paytime=date('Y-m-d H:i:s',time());
            $phone=$uinfo['phone'];
            $ordernum=$reArr['out_trade_no'];
            //添加订单表
            Db::table('addserorder')->insert(array('phone'=>$phone,'payprice'=>$payprice,
                'paytime'=>$paytime,'uid'=>$uid,'ordernum'=>$ordernum,'types'=>$goodinfo['title'],'sid'=>$gid));
            echo '<xml> 
				<return_code><![CDATA[SUCCESS]]></return_code>
				<return_msg><![CDATA[OK]]></return_msg>
				</xml>';
        }
    }
    //手机微信支付
    public function wxPayTzwx(){
        if(request()->isPost()){
            $file = __DIR__ . '/wxpayinfo.txt';
            $postXml = file_get_contents('php://input');
            file_put_contents($file,$postXml);
            $wxApi = new WxApi();
            //签名
            $sign = $wxApi->makeSign($postXml);
            //将xml转换成数组
            $reArr = $wxApi->fromXml($postXml);
            //验证签名
            if($reArr['sign'] != $sign) echo '<xml> 
				<return_code><![CDATA[FAIL]]></return_code>
				<return_msg><![CDATA[签名失败]]></return_msg>
				</xml>';
            $file = __DIR__ . '/wxcheckinfo.txt';
            file_put_contents($file,$reArr['sign'].'---'.$sign);

            //这里写回调逻辑
            $uidandtype=explode('|',$reArr['attach']);
            $uid=$uidandtype[0];
            $gid=$uidandtype[1];
            $payte=$uidandtype[2];//0-会员支付 1-买号 2-增值服务
            if($payte==1){
                $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
                $ginfo=Db::table('sellinfo')->where('id',$gid)->find();
                $name=$ginfo['zhname'];
                $payprice=number_format($reArr['cash_fee']/100,2);
                $paytime=date('Y-m-d H:i:s',time());
                $phone=$uinfo['phone'];
                $types="买号支付";
                $ordernum=$reArr['out_trade_no'];
                //更新商品为已购买
                Db::table('sellinfo')->where('id',$gid)->setField('issell', 1);
                //添加订单表
                Db::table('payorder')->insert(array('name'=>$name,'phone'=>$phone,'payprice'=>$payprice,
                    'paytime'=>$paytime,'types'=>$types,'uid'=>$uid,'gid'=>$gid,'issell'=>1,'ordernum'=>$ordernum));
            }else if($payte==2){
                $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
                $goodinfo=Db::table('addserver')->where('id',$gid)->find();
                $payprice=number_format($reArr['cash_fee']/100,2);
                $paytime=date('Y-m-d H:i:s',time());
                $phone=$uinfo['phone'];
                $ordernum=$reArr['out_trade_no'];
                //添加订单表
                Db::table('addserorder')->insert(array('phone'=>$phone,'payprice'=>$payprice,
                    'paytime'=>$paytime,'uid'=>$uid,'ordernum'=>$ordernum,'types'=>$goodinfo['title'],'sid'=>$gid));
            }else{
                $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
                $payprice=number_format($reArr['cash_fee']/100,2);
                $paytime=date('Y-m-d H:i:s',time());
                $phone=$uinfo['phone'];
                $ordernum=$reArr['out_trade_no'];
                //添加订单表
                Db::table('viporder')->insert(array('phone'=>$phone,'payprice'=>$payprice,
                    'paytime'=>$paytime,'types'=>$gid,'uid'=>$uid,'ordernum'=>$ordernum));
                //修改用户表身份状态
                Db::table('userinfo')->where('uid',$uid)->update(array('paytime'=>$paytime,'vipstate'=>$gid));
            }
//            $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
//            $ginfo=Db::table('sellinfo')->where('id',$gid)->find();
//            $name=$ginfo['zhname'];
//            $payprice=number_format($reArr['cash_fee']/100,2);
//            $paytime=date('Y-m-d H:i:s',time());
//            $phone=$uinfo['phone'];
//            $types="买号支付";
//            $ordernum=$reArr['out_trade_no'];
//            //添加订单表
//            Db::table('payorder')->insert(array('name'=>$name,'phone'=>$phone,'payprice'=>$payprice,
//                'paytime'=>$paytime,'types'=>$types,'uid'=>$uid,'gid'=>$gid,'ordernum'=>$ordernum));
            echo '<xml> 
				<return_code><![CDATA[SUCCESS]]></return_code>
				<return_msg><![CDATA[OK]]></return_msg>
				</xml>';
        }
    }

}