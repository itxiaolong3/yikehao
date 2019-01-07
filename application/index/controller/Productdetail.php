<?php
namespace app\index\controller;

use app\index\WxApiSM;
use think\Controller;
use think\Db;
use think\Session;

class Productdetail extends Base
{
    public function index()
    {
        if(request()->isPost()){
            $islogin=Session::get('userid');
            if ($islogin){
                $id=input('id');
                $info=Db::table('sellinfo')->where('id',$id)->find();
                //判断当前账户是否在看，这里有待处理的问题：看不同账号时再次回来看回另算一次了
                $uinfo=Db::table('userinfo')->where('uid',$islogin)->find();
                if ($uinfo['lookid']==$id){
                    $re['code']=1;
                    $re['phone']=$info['phone'];
                    echo json_encode($re);
                }else{
                    if ($uinfo['looknum']>2){
                        //判断用户身份和等级有效期
                        if ($uinfo['vipstate']>2){//永久会员
                            $re['code']=1;
                            $re['phone']=$info['phone'];
                            echo json_encode($re);
                        }else if($uinfo['vipstate']==2){
                            //判断时间
                            $viptime=$uinfo['paytime'];
                            //(strtotime($viptime))+86400*30
                            $pktime=(strtotime($viptime))+86400*90-time();
                            if ($pktime<=0){
                                //过期
                                $re['code']=-1;
                                $re['phone']='';
                                $re['msg']='会员过期';
                                echo json_encode($re);
                            }else{
                                $re['code']=1;
                                $re['phone']=$info['phone'];
                                echo json_encode($re);
                            }
                        }else if($uinfo['vipstate']==1){
                            //判断时间
                            $viptime=$uinfo['paytime'];
                            $pktime=(strtotime($viptime))+86400*30-time();
                            if ($pktime<=0){
                                //过期
                                $re['code']=-1;
                                $re['phone']='';
                                $re['msg']='会员过期';
                                echo json_encode($re);
                            }else{
                                $re['code']=1;
                                $re['phone']=$info['phone'];
                                echo json_encode($re);
                            }
                        }else{
                            //通知购买会员
                            $re['code']=0;
                            $re['phone']='';
                            $re['msg']='需升级会员';
                            echo json_encode($re);
                        }

                    }else{
                        //保存查看账户id并修改可看次数
                        Db::table('userinfo')->where('uid',$islogin)->setInc('looknum');
                        Db::table('userinfo')->where('uid',$islogin)->update(array('lookid'=>$id));
                        $re['code']=1;
                        $re['phone']=$info['phone'];
                        echo json_encode($re);
                    }

                }

            }else{
                $re['code']=-2;
                echo json_encode($re);
            }

        }else{
            $typelist=$this->gettoptype();
            $this->assign('typetop',$typelist);
            $alltype=$this->getalltype();
            $this->assign('alltype',$alltype);

            $haotype=$this->haotype();
            $this->assign('haotype',$haotype);
            $getid=input('id');
            $detail=Db::table('sellinfo')
                ->alias('s')
                ->join('haotype h','s.type = h.htid')
                ->join('admin a','s.kefuid = a.id')
                ->field('s.*,h.*,a.qq as kfqq,a.phone as kfphone')
                ->where('s.id',$getid)->find();
            //协议
            $payxieyi=Db::table('xieyi')->where('id',2)->find();
            $this->assign('payxieyi',$payxieyi);
            $imgsarr=explode("|",$detail['imgs']);
            $this->assign('imgarr',$imgsarr);
            $this->assign('detail',$detail);
            //基本信息
            $basainfo=Db::table('configs')->field('cpaddress,phone,icp,wxcode,kfqq')->where('id',1)->find();
            $this->assign('baseinfo',$basainfo);
            $userid=Session::get('userid');
            $uinfo=Db::table('userinfo')->where('uid',$userid)->find();
            $this->assign('uinfo',$uinfo);
            return $this->fetch();
        }

    }
    public function postorder(){
        $uid=Session::get('userid');
        if ($uid){
            $gid=input('gid');
            $goodinfo=Db::table('sellinfo')->where('id',$gid)->find();
            $price=$goodinfo['price'];
            vendor('phpqrcode.phpqrcode');//引入插件类
            $pay=new WxApiSM();
            $uidandtype=$uid.'|'.$gid;
            $payurl=$pay->UnifiedOrder('云乐互联买号支付',$uidandtype,$price*100,'1',false);
            $QRcode=new \QRcode();
            $level = 'L';
            $size = 9;
            ob_start();
            $QRcode->png($payurl,false,$level,$size,4);
            $data =ob_get_contents();
            return "data:image/jpeg;base64,".base64_encode($data);

        }else{
            $this->redirect('index/login/index');
        }

    }
    public function checklogin(){
        $uid=Session::get('userid');
        if ($uid){
           echo 1;
        }else{
            echo 0;
        }
    }


}
