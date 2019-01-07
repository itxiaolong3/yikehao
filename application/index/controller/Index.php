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
        //优品推荐
        $goodhao=Db::table('sellinfo')
            ->alias('s')
            ->join('haotype h','s.type = h.htid')
            ->join('admin a','s.kefuid = a.id')
            ->field('s.*,h.*,a.qq as kfqq')
            ->where('s.state',2)
            ->limit(4)->select();
        foreach ($goodhao as $k=>$v){
            $goodhao[$k]['oneprice']=number_format(intval($v['price'])/intval($v['fansnum']),2);
        }
        $this->assign('goodhao',$goodhao);

        //中部分类
        $typelist2=Db::table('type')->limit(8)->select();
        $this->assign('type2',$typelist2);
        //公众号交易
        $goodhao2=Db::table('sellinfo')
            ->alias('s')
            ->join('haotype h','s.type = h.htid')
            ->join('admin a','s.kefuid = a.id')
            ->field('s.*,h.*,a.qq as kfqq')
            ->where('s.state',2)
            ->limit(3)->select();
        foreach ($goodhao2 as $k=>$v){
            $goodhao2[$k]['oneprice']=number_format(intval($v['price'])/intval($v['fansnum']),2);
        }
        $this->assign('goodhao2',$goodhao2);
        $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
        $this->assign('baseinfo',$basainfo);
        //交易动态
        $ordernews=Db::table('payorder')->select();
        foreach ($ordernews as $k=>$v){
            $ordernews[$k]['totime']=$this->formatTime($v['paytime']);
        }
        $this->assign('nowtime',$ordernews);
        return $this->fetch();
    }
    public function loginout(){
        Session::set('userid','');
    }
    //时间计算格式
    function formatTime($date) {
        $str = '';
        $timer = strtotime($date);
        $diff = $_SERVER['REQUEST_TIME'] - $timer;
        $day = floor($diff / 86400);
        $free = $diff % 86400;
        if($day > 0) {
            return $day."天前";
        }else{
            if($free>0){
                $hour = floor($free / 3600);
                $free = $free % 3600;
                if($hour>0){
                    return $hour."小时前";
                }else{
                    if($free>0){
                        $min = floor($free / 60);
                        $free = $free % 60;
                        if($min>0){
                            return $min."分钟前";
                        }else{
                            if($free>0){
                                return $free."秒前";
                            }else{
                                return '刚刚';
                            }
                        }
                    }else{
                        return '刚刚';
                    }
                }
            }else{
                return '刚刚';
            }
        }
    }

}
