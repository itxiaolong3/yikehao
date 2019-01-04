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
use think\Url;

class Permission extends Base {
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin('admin');
    }
    public function index(){
        if (request()->isPost()){
            $getid=input('id');
            $re=Db::table('roots')->where('id',$getid)->delete();
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
            //var_dump(input('keyword'));
            $getkeyword=input('keyword');
            $rootlist=Db::table('roots')->where('name','like',"%".$getkeyword."%")->select();
            $this->assign('keyword',$getkeyword);
            $this->assign('list',$rootlist);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('1',$idsarr)){
                $this->assign('ids',$getrootids);
                return $this->fetch();
            }else{
                echo "无权访问";
            }


        }

    }
    public function addpermission(){

        if (request()->isPost()){
            $getinfo=input();
            $getid=input('id');
            if (empty($getid)){
                //添加
                $re=Db::table('roots')->insert($getinfo);
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
                $re=Db::table('roots')->where('id',$getid)->update($getinfo);
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
            $getroot=Db::table('roots')->where('id',$getid)->find();
            $this->assign('roots',$getroot);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('1',$idsarr)){
                $this->assign('ids',$getrootids);
                return $this->fetch('addpermis');
            }else{
                echo "无权访问";
            }

        }

    }
}
