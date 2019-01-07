<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Prodetail extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);

        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);


        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);
        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);
        $id=input('id');
        $re=Db::table('problist')->where('id',$id)->find();
        //$re['contents']=htmlspecialchars_decode($re['contents']);
        $this->assign('prob',$re);
        //基本信息
        $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
        $this->assign('baseinfo',$basainfo);
        $userid=Session::get('userid');
        $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
        $this->assign('uinfo',$uinfo);
        return $this->fetch();
    }

}
