<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Aboutme extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);

        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);
        $re=Db::table('aboutme')->where('id',1)->find();
        $this->assign('infos',$re);
        return $this->fetch();
    }

}
