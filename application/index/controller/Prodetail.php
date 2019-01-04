<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

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
        return $this->fetch();
    }

}
