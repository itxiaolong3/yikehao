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
        $bzarr=array();
        //最新参数
        $gethaotype=input('type');
        if ($gethaotype){
            $pageparam['query']['type']=$gethaotype;
            //账号类型
            $htypes=Db::table('haotype')->where('htid',$gethaotype)->find();
            array_push($bzarr,$htypes['name']);
        }
        $gettypes=input('fortype');

        $price=input('price');
        if ($price){
            switch ($price){
                case 1:
                    array_push($bzarr,'一万以内');
                    $pageparam['query']['price']=array('<',10000);
                    break;
                case 2:
                    array_push($bzarr,'1-3万');
                    $pageparam['query']['price']=array('between','10000,30000');
                    break;
                case 3:
                    array_push($bzarr,'3-5万');
                    $pageparam['query']['price']=array('between','30000,50000');
                    break;
                case 4:
                    array_push($bzarr,'5-7万');
                    $pageparam['query']['price']=array('between','50000,70000');
                    break;
                case 5:
                    array_push($bzarr,'7-10万');
                    $pageparam['query']['price']=array('between','70000,100000');
                    break;
                case 6:
                    array_push($bzarr,'10-20万');
                    $pageparam['query']['price']=array('between','100000,200000');
                    break;
                case 7:
                    array_push($bzarr,'20万以上');
                    $pageparam['query']['price']=array('>',200000);
                    break;
            }
        }
        $fsnum=input('fansnum');
        if ($fsnum){
            switch ($fsnum){
                case 1:
                    array_push($bzarr,'5000以下');
                    $pageparam['query']['fansnum']=array('<',5000);
                    break;
                case 2:
                    array_push($bzarr,'5001-1万');
                    $pageparam['query']['fansnum']=array('between', '5001,10000');
                    break;
                case 3:
                    array_push($bzarr,'1万-2万');
                    $pageparam['query']['fansnum']=array('between', '10000,20000');
                    break;
                case 4:
                    array_push($bzarr,'2万-10万');
                    $pageparam['query']['fansnum']=array('between', '20000,100000');
                    break;
                case 5:
                    array_push($bzarr,'10万-15万');
                    $pageparam['query']['fansnum']=array('between', '100000,150000');
                    break;
                case 6:
                    array_push($bzarr,'15万-20万');
                    $pageparam['query']['fansnum']=array('between', '150000,200000');
                    break;
                case 7:
                    array_push($bzarr,'20万-25万');
                    $pageparam['query']['fansnum']=array('between', '200000,250000');
                    break;
                case 8:
                    array_push($bzarr,'25万-30万');
                    $pageparam['query']['fansnum']=array('between', '250000,300000');
                    break;
                case 9:
                    array_push($bzarr,'30万以上');
                    $pageparam['query']['fansnum']=array('<',300000);
                    break;
            }
        }

        //头条uv
        $uv=input('uv');
        if ($uv){
            switch ($uv){
                case 1:
                    array_push($bzarr,'3%以下');
                    $pageparam['query']['UV']=array('<',3);
                    break;
                case 2:
                    array_push($bzarr,'3%-5%以下');
                    $pageparam['query']['UV']=array('between','3,5');
                    break;
                case 3:
                    array_push($bzarr,'5%-8%以下');
                    $pageparam['query']['UV']=array('between','5,8');
                    break;
                case 4:
                    array_push($bzarr,'8%-10%以下');
                    $pageparam['query']['UV']=array('between','8,10');
                    break;
                case 5:
                    array_push($bzarr,'10%以上');
                    $pageparam['query']['UV']=array('>',10);
                    break;
            }
        }


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
        $allsort=input('allsort',0);
        $pricesort=input('pricesort',0);
        $sfnumsort=input('sfnumsort',0);
        $ordersql='';
        if ($sfnumsort==2){
            $ordersql=$pricesort?'price desc':'price asc';
        }else if($pricesort==2){
            $ordersql=$sfnumsort?'fansnum desc':'fansnum asc';
        }
        $headersort=input('headersort',0);


        $this->assign('gethaotype',$gethaotype);
        $this->assign('fortype',$gettypes);
        $this->assign('fsnum',$getfsnum);
        $this->assign('price',$price);
        $this->assign('uv',$uv);
        $this->assign('isrz',$isrz);
        $this->assign('fsbili',$getfsbili);
        $this->assign('liu',$getliu);
        $this->assign('wg',$getwg);



        $this->assign('allsort',$allsort);
        $this->assign('pricesort',$pricesort);
        $this->assign('sfnumsort',$sfnumsort);
        $this->assign('headersort',$headersort);

        $getkeyword=input('keywords');
        //判断是搜索还是选择搜索
        $pageparam['query']['zhname']=['like',"%".$getkeyword."%"];
        $pageparam['query']['state']=2;
        $pageparam['query']['issell']=0;
        $this->assign('keyword',$getkeyword);
        $min=input('min');
        $max=input('max');
        if($gettypes){
            //查找需要查找的分类
            $types=Db::table('type')->where('tid',$gettypes)->find();
            array_push($bzarr,$types['name']);
            $selllist=Db::table('sellinfo')
                ->where($pageparam['query'])
                ->order($ordersql)
                ->where('FIND_IN_SET(:types,fortype)',['types' => $gettypes])//查询数据库某字段的值是否存在该值
                ->paginate(2,false,['query' => Request::instance()->param()]);
        }else{

            if ($max>0&&$min>0){
                if ($max>$min){
                    $selllist=Db::table('sellinfo')
                        ->where($pageparam['query'])
                        ->where('oneprice','>',$min)
                        ->where('oneprice','<',$max)
                        ->order($ordersql)
                        ->paginate(5,false,['query' => Request::instance()->param()]);
                }
            }else{
                $selllist=Db::table('sellinfo')
                    ->where($pageparam['query'])
                    ->order($ordersql)
                    ->paginate(5,false,['query' => Request::instance()->param()]);
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
        //打印sql查询过程
//        $data=Db::table('sellinfo')
//                ->where($pageparam['query'])
//                ->order($ordersql)
//                ->fetchSql(true)
//                ->paginate(5,false,['query' => Request::instance()->param()]);
//            dump($data);
        $this->assign('tag',$bzarr);
        $this->assign('list',$newlist);
        $this->assign('page',$selllist->render());
        return $this->fetch();
    }

}
