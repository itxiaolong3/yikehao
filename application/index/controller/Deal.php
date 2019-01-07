<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

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
        //基本信息
        $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
        $this->assign('baseinfo',$basainfo);
        $userid=Session::get('userid');
        $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
        $this->assign('uinfo',$uinfo);
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
        $type=input('tid');
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

        $getkeyword=input('keyword');
        $pageparam=['query'=>[]];//查询条件
        $pageparam['query']['a.phone']=['like',"%".$getkeyword."%"];
        $this->assign('keyword',$getkeyword);
        $selllist=Db::table('sellinfo')
            ->alias('s')
            ->join('haotype h','s.type = h.htid')
            ->join('admin a','s.kefuid = a.id')
            ->field('s.*,h.name,a.qq')
            ->where($pageparam['query'])
            ->paginate(5,false,$pageparam);
        //分页取出数据不能直接使用，因为不是一个数组，而是数据集对象think\Collection
        $newlist=$selllist->items();
        foreach ($newlist as $k=>$v){
            $newlist[$k]['totime']=$this->formatTime($v['addtime']);
        }
        $this->assign('list',$newlist);
        $this->assign('page',$selllist->render());
        return $this->fetch();
    }

}
