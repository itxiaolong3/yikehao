<?php
namespace app\index\controller;

use think\Controller;
use think\Session;

class Evals extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);
        if (request()->isPost()){
//            var_dump(input());
        }else{
            $islogin=Session::get('userid');
            if ($islogin){
                $typelist=$this->gettoptype();
                $this->assign('typetop',$typelist);

                $alltype=$this->getalltype();
                $this->assign('alltype',$alltype);

                $haotype=$this->haotype();
                $this->assign('haotype',$haotype);
                return $this->fetch();
            }else{
                $this->redirect('index/login/index');

            }
        }


    }

}
