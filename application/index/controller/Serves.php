<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Serves extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);

        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);

        $problist=Db::table('problist')->select();
        $this->assign('problist',$problist);
        $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
        $this->assign('baseinfo',$basainfo);
        $userid=Session::get('userid');
        $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
        $this->assign('uinfo',$uinfo);
        return $this->fetch();
    }

}
