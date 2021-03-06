<?php
namespace app\index\controller;
use app\index\WxApiSM;
use think\Controller;
use think\Db;
use think\Session;

class Usercenter extends Base
{
    public function index()
    {
        $userid=Session::get('userid');
        if ($userid){
            if (request()->isPost()){
                $getinfo=input();
                $re=Db::table('userinfo')->where('uid',$userid)->update($getinfo);
                if ($re){
                    $resinfo['code']=1;
                    $resinfo['msg']='更新成功';
                    echo json_encode($resinfo);
                }else{
                    $resinfo['code']=0;
                    $resinfo['msg']='更新失败';
                    echo json_encode($resinfo);
                }
            }else{
                $typelist=$this->gettoptype();
                $this->assign('typetop',$typelist);

                $alltype=$this->getalltype();
                $this->assign('alltype',$alltype);

                $haotype=$this->haotype();
                $this->assign('haotype',$haotype);

                $problist=Db::table('problist')->select();
                $this->assign('problist',$problist);
                //获取个人信息
                $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
                $this->assign('uinfo',$uinfo);
                //个人发布订单情况
                $fblist=Db::table('sellinfo')->where('uid',$userid)->select();
                foreach ($fblist as $k=>$v){
                    $getqq=Db::table('admin')->where('id',$v['kefuid'])->find();
                    $fblist[$k]['kfqq']=$getqq['qq'];
                }
                $this->assign('fblist',$fblist);
                $configs=Db::table('configs')->where('id',1)->field('mothprice,jiprice,yearprice')->find();
                $this->assign('vipprice',$configs);
                //个人购买订单
                //买号
                $payorder=Db::table('sellinfo')
                    ->alias('s')
                    ->join('haotype h','s.type = h.htid')
                    ->join('payorder p','p.gid = s.id')
                    ->field('s.id,s.type,h.name as typename,h.htid,p.*')
                    ->where('s.state',2)
                   ->select();
                $this->assign('payorder',$payorder);
                //会员
                $viporder=Db::table('viporder')->where(array('uid'=>$userid,'isdel'=>0))->select();
                $this->assign('viplist',$viporder);
                //增值服务
                $serorder=Db::table('addserorder')->select();
                $this->assign('serorder',$serorder);
                $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
                $this->assign('baseinfo',$basainfo);
                $userid=Session::get('userid');
                $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
                $this->assign('uinfo',$uinfo);
                return $this->fetch();
            }

        }else{
            $this->redirect('index/login/index');
        }

    }
    public function del(){
        $id=input('id');
        //删除类型
        $types=input('types');

        if ($types==0){
            $delr=Db::table('viporder')->where('id',$id)->update(array('isdel'=>1));
        }else if($types==2){
            $delr=Db::table('payorder')->where('id',$id)->update(array('isdel'=>1));
        }else if($types==1){
            $delr=Db::table('sellinfo')->where('id',$id)->delete();
        }else if($types=3){
            $delr=Db::table('addserorder')->where('id',$id)->update(array('isdel'=>1));
        }
        if ($delr){
            $res['code']=1;
            $res['msg']='删除成功';
            echo json_encode($res);
        }else{
            $res['code']=0;
            $res['msg']='删除失败';
            echo json_encode($res);
        }
    }
    //扫码支付
    public function payvip(){
        vendor('phpqrcode.phpqrcode');//引入插件类
        $pay=new WxApiSM();
        $typenum=input('typenum');
        $configs=Db::table('configs')->where('id',1)->find();
           switch ($typenum){
               case 1:
                   $price=$configs['mothprice'];
                   $body="月卡会员支付";
                   break;
               case 2:
                   $price=$configs['jiprice'];
                   $body="季卡会员支付";
                   break;
               case 3:
                   $price=$configs['yearprice'];
                   $body="永久会员支付";
                   break;
               default:
                   $price=0;

           }
        $ordernum=time().$this->getcode();
        $uid=Session::get('userid');
        $uidandtype=$uid.'|'.$typenum;
        $payurl=$pay->UnifiedOrder($body,$uidandtype,$price*100,$ordernum,1);
        //$payurl=$pay->UnifiedOrder($body,$uid,$price,$ordernum);
        $QRcode=new \QRcode();
        $level = 'L';
        $size = 9;
        ob_start();
        $QRcode->png($payurl,false,$level,$size,4);
        $data =ob_get_contents();
        return "data:image/jpeg;base64,".base64_encode($data);
    }
    //检查是否支付完成，实时更新
    public function getstate(){
        $uid=Session::get('userid');
        $types=input('typenum');
        //买号的
        $ishaopay=input('ishao');
        //买新增服务的
        $isaddser=input('isser');
        $haoid=input('gid');
        if($isaddser){
            $sid=input('sid');
            $res=Db::table('addserorder')->where(array('uid'=>$uid,'sid'=>$sid))->find();
            if ($res){
                return true;
            }else{
                return false;
            }
        }else if($ishaopay){
            $res=Db::table('payorder')->where(array('uid'=>$uid,'gid'=>$haoid))->find();
            if ($res){
                return true;
            }else{
                return false;
            }
        }else{
            $re=Db::table('userinfo')->where('uid',$uid)->find();
            if ( $re['vipstate']==$types){
                return true;
            }else{
                return false;
            }
        }

    }
    //随机生成数
    public function getcode(){
        $num="";
        for($i=0;$i<6;$i++){
            $num .= rand(0,9);
        }
        return $num;
    }
}
