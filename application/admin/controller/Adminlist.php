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

class Adminlist extends Base {
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin('admin');
    }
    public function index(){
        if (request()->isPost()){
            $getid=input('id');
            $re=Db::table('admin')->where('id',$getid)->delete();
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
            $getkeyword=input('keyword');
            $adminlist=Db::table('admin')->where('adminname','like',"%".$getkeyword."%")->select();
            $this->assign('keyword',$getkeyword);
            $this->assign('list',$adminlist);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('1',$idsarr)){
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
    public function adminadd(){
        if (request()->isPost()){
            $getinfo=input();
            $getid=input('id');
            $getids=input('rootnum');
            if (!empty($getids)){
                $idarr=explode(',',$getids);
                $rootname='';
                foreach ($idarr as $k=>$v){
                    $name=Db::table('roots')->where('id',$v)->value('name');
                    $rootname.=$name.'--';
                }
                $getinfo['rootname']=rtrim($rootname,'--');
            }
            if (empty($getid)){
                //添加
                $re=Db::table('admin')->insert($getinfo);
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
                $re=Db::table('admin')->where('id',$getid)->update($getinfo);
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
            $getroot=Db::table('admin')->where('id',$getid)->find();
            $this->assign('admininfo',$getroot);

            $getrootid=Db::table('admin')->where('id',$getid)->value('rootnum');
            $this->assign('rootids',$getrootid);

            $rootlist=Db::table('roots')->select();
            $this->assign('rootlist',$rootlist);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('1',$idsarr)){
                $this->assign('ids',$getrootids);
                $rootname=Session::get('rootname');
                $loginname=Session::get('loginname');
                $this->assign('rootname',$rootname);
                $this->assign('loginname',$loginname);
                return $this->fetch('adminadd');
            }else{
                echo "无权访问";
            }

        }

    }
    //更新状态
    public  function changestate(){
        $state=input('state');
        $getid=input('id');
        $re=Db::table('admin')->where('id',$getid)->update(array('state'=>$state));
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
}
