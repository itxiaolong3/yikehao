<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;
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
        $pageparam=['query'=>[]];//查询条件
        //最新参数
        $gethaotype=input('type');
        if ($gethaotype){
            $pageparam['query']['type']=$gethaotype;
        }
        $gettypes=input('fortype');

        $price=input('price');
        if ($price){
            switch ($price){
                case 1:
                    $pageparam['query']['price']=array('<',10000);
                    break;
                case 2:
                    $pageparam['query']['price']=array('between','10000,30000');
                    break;
                case 3:
                    $pageparam['query']['price']=array('between','30000,50000');
                    break;
                case 4:
                    $pageparam['query']['price']=array('between','50000,70000');
                    break;
                case 5:
                    $pageparam['query']['price']=array('between','70000,100000');
                    break;
                case 6:
                    $pageparam['query']['price']=array('between','100000,200000');
                    break;
                case 7:
                    $pageparam['query']['price']=array('>',200000);
                    break;
            }
        }
        $fsnum=input('fansnum');
        if ($fsnum){
            switch ($fsnum){
                case 1:
                    $pageparam['query']['fansnum']=array('<',5000);
                    break;
                case 2:
                    $pageparam['query']['fansnum']=array('between', '5001,10000');
                    break;
                case 3:
                    $pageparam['query']['fansnum']=array('between', '10000,20000');
                    break;
                case 4:
                    $pageparam['query']['fansnum']=array('between', '50000,100000');
                    break;
                case 5:
                    $pageparam['query']['fansnum']=array('between', '100000,150000');
                    break;
                case 6:
                    $pageparam['query']['fansnum']=array('between', '150000,200000');
                    break;
                case 7:
                    $pageparam['query']['fansnum']=array('between', '200000,250000');
                    break;
                case 8:
                    $pageparam['query']['fansnum']=array('between', '250000,300000');
                    break;
                case 9:
                    $pageparam['query']['fansnum']=array('<',300000);
                    break;
            }
        }

        //头条uv
        $uv=input('uv');
        if ($uv){
            switch ($uv){
                case 1:
                    $pageparam['query']['UV']=array('<',3);
                    break;
                case 2:
                    $pageparam['query']['UV']=array('between','3,5');
                    break;
                case 3:
                    $pageparam['query']['UV']=array('between','5,8');
                    break;
                case 4:
                    $pageparam['query']['UV']=array('between','8,10');
                    break;
                case 5:
                    $pageparam['query']['UV']=array('>',10);
                    break;
            }
        }
        $bzarr=array();
        $isrz=input('isrz',3);//认证类型
        $getfsbili=input('fsbili',3);//粉丝比例
        $getliu=input('liu');//流量主
        $getwg=input('wg');//违规情况
        if ($isrz==3){
            //全部
        }else{
            //有条件
            $pageparam['query']['isrz']=$isrz;
        }
        if ($getwg<2){
            //无条件
        }else{
            //有条件
            $pageparam['query']['weiguinum']=array('>',0);
        }
        if ($getfsbili==3){
            //全部
        }else{
            //有条件
            $pageparam['query']['sexbli']=$getfsbili;
        }
        if ($getliu){
            //有条件
            $pageparam['query']['isliu']=$getliu;
        }

        $getfsnum=input('fansnum');//粉丝数量

        //排序情况
        $type=input('tid');
        $pricesort=input('pricesort',0);
        $sfnumsort=input('sfnumsort',0);
        $headersort=input('headersort',0);
        $onefssort=input('onefssort',0);

        $this->assign('gethaotype',$gethaotype);
        $this->assign('fortype',$gettypes);
        $this->assign('fsnum',$getfsnum);
        $this->assign('price',$price);
        $this->assign('uv',$uv);
        $this->assign('isrz',$isrz);
        $this->assign('fsbili',$getfsbili);
        $this->assign('liu',$getliu);
        $this->assign('wg',$getwg);



        $this->assign('onefssort',$onefssort);
        $this->assign('pricesort',$pricesort);
        $this->assign('sfnumsort',$sfnumsort);
        $this->assign('headersort',$headersort);

        $getkeyword=input('keywords');
        //判断是搜索还是选择搜索
        $pageparam['query']['zhname']=['like',"%".$getkeyword."%"];
        $pageparam['query']['state']=2;
        $this->assign('keyword',$getkeyword);

        if($gettypes){
            $selllist=Db::table('sellinfo')
                ->where($pageparam['query'])
                ->where('FIND_IN_SET(:types,fortype)',['types' => $gettypes])//查询数据库某字段的值是否存在该值
                ->paginate(2,false,['query' => Request::instance()->param()]);
        }else{
            $min=input('min');
            $max=input('max');
            if ($max>0&&$min>0){
                if ($max>$min){
                    $selllist=Db::table('sellinfo')
                        ->where($pageparam['query'])
                        ->where('oneprice','>',$min)
                        ->where('oneprice','<',$max)
                        ->paginate(2,false,['query' => Request::instance()->param()]);
                }
            }else{
                $selllist=Db::table('sellinfo')
                    ->where($pageparam['query'])
                    ->paginate(2,false,['query' => Request::instance()->param()]);
            }


        }
        $this->assign('min',$min);
        $this->assign('max',$max);
        //分页取出数据不能直接使用，因为不是一个数组，而是数据集对象think\Collection
        $newlist=$selllist->items();
        foreach ($newlist as $k=>$v){
            $newlist[$k]['totime']=$this->formatTime($v['addtime']);
            $haoname=Db::table('haotype')->where('htid',$v['type'])->field('name')->find();
            $newlist[$k]['name']=$haoname['name'];
            $kfqq=Db::table('admin')->where('id',$v['kefuid'])->field('qq')->find();
            $newlist[$k]['qq']=$kfqq['qq'];
        }
//        //打印sql查询过程
//        if ($price){
//            $data=Db::table('sellinfo')
//                ->where($pageparam['query'])
//                ->fetchSql(true)
//                ->paginate(2,false,['query' => Request::instance()->param()]);
//            dump($data);
//        }

        $this->assign('list',$newlist);
        $this->assign('page',$selllist->render());
        return $this->fetch();
    }

}
