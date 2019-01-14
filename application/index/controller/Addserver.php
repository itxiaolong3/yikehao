<?php
namespace app\index\controller;
use app\index\WxApiSM;
use think\Controller;
use think\Db;
use think\Session;
class Addserver extends Base
{
    public function index()
    {
        if (request()->isPost()){
            $userid=Session::get('userid');
            if ($userid){
                $res['code']=1;
                echo json_encode($res);
            }else{
                $res['code']=0;
                $res['msg']='请登录';
                echo json_encode($res);
            }
        }else{
            $typelist=$this->gettoptype();
            $this->assign('typetop',$typelist);
            $alltype=$this->getalltype();
            $this->assign('alltype',$alltype);
            $haotype=$this->haotype();
            $this->assign('haotype',$haotype);
            $re=Db::table('aboutme')->where('id',1)->find();
            $this->assign('infos',$re);
            $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
            $this->assign('baseinfo',$basainfo);
            $userid=Session::get('userid');
            $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
            $this->assign('uinfo',$uinfo);
            $payxieyi=Db::table('xieyi')->where('id',1)->find();
            $this->assign('xieyi',$payxieyi);
            $infos=Db::table('addserver')->select();
            $this->assign('list',$infos);
            return $this->fetch();
        }

    }
    public function serpay(){
        vendor('phpqrcode.phpqrcode');//引入插件类
        $pay=new WxApiSM();
        $sid=input('sid');
        $getprice=Db::table('addserver')->where('id',$sid)->field('price')->find();
        $ordernum=time();//没实际用处
        $uid=Session::get('userid');
        $uidandtype=$uid.'|'.$sid;
        $payurl=$pay->UnifiedOrder('增值服务购买',$uidandtype,$getprice['price']*100,$ordernum,2);
        $QRcode=new \QRcode();
        $level = 'L';
        $size = 9;
        ob_start();
        $QRcode->png($payurl,false,$level,$size,4);
        $data =ob_get_contents();
        return "data:image/jpeg;base64,".base64_encode($data);
    }

}
