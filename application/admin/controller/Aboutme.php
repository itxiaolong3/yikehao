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

class Aboutme extends Base {
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin('admin');
    }
    public function index(){
        $aboutme=Db::table('aboutme')->where('id',1)->find();
        $this->assign('aboutme',$aboutme);
        if (request()->isPost()){
            $data=input();
            $data['addtime']=time();
            //查询是否存在了
            if ($aboutme){
                //更新
                $re=Db::table('aboutme')->where('id',$data['id'])->update($data);
                if ($re){
                    $redata['code']=1;
                    $redata['msg']='修改成功';
                    echo json_encode($redata);
                }else{
                    $redata['code']=0;
                    $redata['msg']='修改失败';
                    echo json_encode($redata);
                }
            }else{
                //新增
                $re=Db::table('aboutme')->insert($data);
                if ($re){
                    $redata['code']=1;
                    $redata['msg']='添加成功';
                    echo json_encode($redata);
                }else{
                    $redata['code']=0;
                    $redata['msg']='添加失败';
                    echo json_encode($redata);
                }
            }
        }
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
