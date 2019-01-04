<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Servesnews extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);

        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);
        $newslist=Db::table('newslist')->select();
        $this->assign('newslist',$newslist);
        return $this->fetch();
    }

}
