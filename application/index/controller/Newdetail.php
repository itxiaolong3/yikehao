<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Newdetail extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);
        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);
        $id=input('id');
        $re=Db::table('newslist')->where('id',$id)->find();
        $this->assign('news',$re);
        return $this->fetch();
    }

}
