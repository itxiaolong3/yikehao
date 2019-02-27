<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26
 * Time: 9:57
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

class Alipayreturnurl extends Controller
{
    public function index(){
        $arr=$_GET;
        //$appid='2018071660686209';
        $configs = Db::table('configs')->where('id', 1)->find();
        $appid=$configs['app_id'];
        $getappid=htmlspecialchars($_GET['app_id']);
        $paytype=htmlspecialchars($_GET['paytype']);
        $price=htmlspecialchars($_GET['total_amount']);
        $ordernum=htmlspecialchars($_GET['trade_no']);
        if ($appid==$getappid){
            //验证成功，这里开始写业务程序
            $this->assign('baseurl', request()->domain());
            $this->assign('payprice', $price);
            //这里写回调逻辑
            $uidandtype=explode('|',$paytype);
            $uid=$uidandtype[0];
            $gid=$uidandtype[1];
            $payte=$uidandtype[2];//0-会员支付 1-买号 2-增值服务
            if($payte==1){
                $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
                $ginfo=Db::table('sellinfo')->where('id',$gid)->find();
                $name=$ginfo['zhname'];
                $payprice=number_format($price,2);
                $paytime=date('Y-m-d H:i:s',time());
                $phone=$uinfo['phone'];
                $types="买号支付";
                //查询是否已经存在改订单
                $ishava=Db::table('payorder')->where('ordernum',$ordernum)->find();
                if (empty($ishava)){
                    //添加订单表
                    Db::table('payorder')->insert(array('name'=>$name,'phone'=>$phone,'payprice'=>$payprice,
                        'paytime'=>$paytime,'types'=>$types,'uid'=>$uid,'gid'=>$gid,'ordernum'=>$ordernum));
                }
                $this->assign('goodname', '买号支付');

            }else if($payte==2){
                $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
                $goodinfo=Db::table('addserver')->where('id',$gid)->find();
                $payprice=number_format($price,2);
                $paytime=date('Y-m-d H:i:s',time());
                $phone=$uinfo['phone'];
                $ishava=Db::table('addserorder')->where('ordernum',$ordernum)->find();
                if (empty($ishava)){
                    //添加订单表
                    Db::table('addserorder')->insert(array('phone'=>$phone,'payprice'=>$payprice,
                        'paytime'=>$paytime,'uid'=>$uid,'ordernum'=>$ordernum,'types'=>$goodinfo['title'],'sid'=>$gid));
                }
                $this->assign('goodname', '增值服务支付');
            }else{
                $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
                $payprice=number_format($price,2);
                $paytime=date('Y-m-d H:i:s',time());
                $phone=$uinfo['phone'];
                $ishava=Db::table('viporder')->where('ordernum',$ordernum)->find();
                if (empty($ishava)){
                    //添加订单表
                    Db::table('viporder')->insert(array('phone'=>$phone,'payprice'=>$payprice,
                        'paytime'=>$paytime,'types'=>$gid,'uid'=>$uid,'ordernum'=>$ordernum));
                }
                //修改用户表身份状态
                Db::table('userinfo')->where('uid',$uid)->update(array('paytime'=>$paytime,'vipstate'=>$gid));
                $this->assign('goodname', '购买会员');
            }
            return $this->fetch();
        }else{
            echo '支付失败！！！';
        }
    }

}