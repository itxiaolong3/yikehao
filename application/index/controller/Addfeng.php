<?php
namespace app\index\controller;

use think\Controller;

class Addfeng extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);
        return $this->fetch();
    }

}
