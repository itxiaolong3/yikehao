<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

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
        return $this->fetch();
    }

}
