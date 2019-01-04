<?php
namespace app\index\controller;

use think\Controller;

class Deal extends Base
{
    public function index()
    {
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);

        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);
        //获取参数
        $gethaotype=input('haotype');
        $gettypes=input('types');
        $getauthor=input('author');//粉丝区间
        $getemail=input('email');//价格区间
        $bzarr=array();

        $getbranch=input('branch');//认证类型
        $getfsbili=input('fsbili');//粉丝比例
        $geteditor=input('editor');//原创情况
        $getwg=input('wg');//违规情况

        //排序情况
        $pricesort=input('pricesort',0);
        $sfnumsort=input('sfnumsort',0);
        $headersort=input('headersort',0);
        $onefssort=input('onefssort',0);

        $this->assign('gethaotype',$gethaotype);
        $this->assign('types',$gettypes);
        $this->assign('author',$getauthor);
        $this->assign('email',$getemail);
        $this->assign('branch',$getbranch);
        $this->assign('fsbili',$getfsbili);
        $this->assign('editor',$geteditor);
        $this->assign('wg',$getwg);

        $this->assign('onefssort',$onefssort);
        $this->assign('pricesort',$pricesort);
        $this->assign('sfnumsort',$sfnumsort);
        $this->assign('headersort',$headersort);



        return $this->fetch();
    }

}
