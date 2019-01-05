<?php
/**
 * Created by PhpStorm.
 * User: xiaolong
 * Date: 2018/11/20
 * Time: 12:12
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;

class Xieyi extends Base {
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin('admin');
    }
    public function index(){
        if (request()->isPost()){
            $getid=input('id');
            $re=Db::table('xieyi')->where('id',$getid)->delete();
            if ($re){
                $redata['code']=1;
                $redata['msg']='删除成功';
                echo json_encode($redata);
            }else{
                $redata['code']=0;
                $redata['msg']='删除失败';
                echo json_encode($redata);
            }
        }else{
            $userlist=Db::table('xieyi')->select();
            $this->assign('list',$userlist);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('2',$idsarr)){
                $this->assign('ids',$getrootids);
                $rootname=Session::get('rootname');
                $loginname=Session::get('loginname');
                $this->assign('rootname',$rootname);
                $this->assign('loginname',$loginname);
                return $this->fetch();
            }else{
                echo "无权访问";
            }
        }


    }
    public function addxieyi(){

        if (request()->isPost()){
            $getinfo=input();
            //$getinfo['imgs']=request()->domain().$getinfo['imgs'];
            $getinfo['addtime']=date('Y-m-d',time());
            $getid=input('id');
            if (empty($getid)){
                //添加
                $re=Db::table('xieyi')->insert($getinfo);
                if ($re){
                    $redata['code']=1;
                    $redata['msg']='添加成功';
                    echo json_encode($redata);
                }else{
                    $redata['code']=0;
                    $redata['msg']='添加失败';
                    echo json_encode($redata);
                }
            }else{
                //修改
                $re=Db::table('xieyi')->where('id',$getid)->update($getinfo);
                if ($re){
                    $redata['code']=1;
                    $redata['msg']='修改成功';
                    echo json_encode($redata);
                }else{
                    $redata['code']=0;
                    $redata['msg']='修改失败';
                    echo json_encode($redata);
                }
            }

        }else{
            $getid=input('id');
            $getroot=Db::table('xieyi')->where('id',$getid)->find();
            $this->assign('xieyiinfo',$getroot);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('2',$idsarr)){
                $this->assign('ids',$getrootids);
                return $this->fetch('addxieyi');
            }else{
                echo "无权访问";
            }

        }

    }
}
