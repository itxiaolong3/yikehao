<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Sell extends Base
{
    public function index()
    {
        $islogin=Session::get('userid');
        if ($islogin){
            if(request()->isPost()){
                $allinfo=input();
                $gethytpye=input('fortype');
                $typeid=array();
                $typetext=array();
                if(strstr($gethytpye,',')){
                    $hytypearr=explode(',',$gethytpye);
                    foreach ($hytypearr as $k=>$v){
                        $idandtext=explode('|',$v);
                        array_push($typeid,$idandtext[0]);
                        array_push($typetext,$idandtext[1]);
                    }
                }else{
                    $idandtext=explode('|',$gethytpye);
                    array_push($typeid,$idandtext[0]);
                    array_push($typetext,$idandtext[1]);
                }
                $allinfo['fortype']=implode(',',$typeid);
                $allinfo['fortypetext']=implode('|',$typetext);
                $allinfo['imgs']=substr($allinfo['imgs'],1);
                $allinfo['oneprice']=number_format(intval($allinfo['price'])/intval($allinfo['fansnum']),2);
                //分配销售员
                $getonekf=Db::table('admin')->where(array('iskf'=>1,'state'=>1))->order('num asc')->limit(1)->find();
                $allinfo['kefuid']=$getonekf['id'];
                $allinfo['uid']=$islogin;
                $res=Db::table('sellinfo')->insert($allinfo);
                if ($res){
                    //修改销售员的接单数目
                    Db::table('admin')->where('id',$getonekf['id'])->update(array('num'=>$getonekf['num']+1));
                    $resinfo['code']=1;
                    $resinfo['msg']='提交成功';
                    echo json_encode($resinfo);
                }else{
                    $resinfo['code']=0;
                    $resinfo['msg']='提交失败';
                    echo json_encode($resinfo);
                }
            }else{
                $typelist=$this->gettoptype();
                $this->assign('typetop',$typelist);
                $alltype=$this->getalltype();
                $this->assign('alltype',$alltype);

                $haotype=$this->haotype();
                $this->assign('haotype',$haotype);
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
        $typelist=$this->gettoptype();
        $this->assign('typetop',$typelist);


    }

    //上传图片
    public function upImg(){
        if(request()->isPost()){
            $getFile = $_FILES['file'];
            $rooturl='/yikehao/public/static/upLoder/' ;
            $data=[
                'status'=>1,
                'mes'=>'OK',
                'data'=>$rooturl.$this->uploader($getFile),
            ];
            echo json_encode($data);//上传成功，返回的是文件的目录和文件名

        }
    }
    //多图片的删除
    function del() {
        $src = str_replace( '/yikehao', '', str_replace('//', '/', input('src')));
        $path=ROOT_PATH.$src;
        $filepaht=str_replace('\\','/',str_replace('//', '/', $path));
        if (file_exists($filepaht)) {
            @unlink($filepaht);
        }
        print_r('|'.input('src'));
        exit();
    }

}
