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
class Userlist extends Base {
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin('admin');
    }
    public function index(){
        $getkeyword=input('keyword');
        $userlist=Db::table('userinfo')->where('phone','like',"%".$getkeyword."%")->select();
        $this->assign('keyword',$getkeyword);
        $this->assign('list',$userlist);
        //权限判断
        $getrootids=session('rootids');
        $idsarr=explode(',',$getrootids);
        if (in_array('4',$idsarr)){
            $this->assign('ids',$getrootids);
            return $this->fetch();
        }else{
            echo "无权访问";
        }

    }
}
