<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Index extends Base
{
    public function index()
    {
        $bannerlist=Db::table('banner')->select();
        foreach ($bannerlist as $k=>$v){
            $bannerlist[$k]['imgs']=request()->domain().$v['imgs'];
        }
        $this->assign('banner',$bannerlist);

        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);

        $alltype=$this->getalltype();
        $this->assign('alltype',$alltype);

        $haotype=$this->haotype();
        $this->assign('haotype',$haotype);
        //问题列表
        $gettowprob=Db::table('problist')->limit(2)->select();
        $problist=Db::table('problist')->select();

        $this->assign('problist',$problist);
        $this->assign('gettowprob',$gettowprob);
        //行业新闻
        $gettownews=Db::table('newslist')->limit(2)->select();
        $newslist=Db::table('newslist')->select();
        $this->assign('newslist',$newslist);
        $this->assign('gettownew',$gettownews);
        $userid=Session::get('userid');
        $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
        $this->assign('uinfo',$uinfo);
        return $this->fetch();
    }
    public function loginout(){
        Session::set('userid','');
    }

}
