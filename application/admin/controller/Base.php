<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/21
 * Time: 9:49
 */
namespace app\admin\controller;
use think\Controller;
use think\Session;
class Base extends Controller{
    //判断是否登录
    public function isLogin(){
        $uid = Session::get('uid');
        if($uid){
            return true;
        }
        return false;
    }
    //未登录跳转到登录界面
    public function isJumpLogin(){
        $isLogin = $this->isLogin();
        //ajax 模式访问
        if(request()->isAjax()){
            if(!$isLogin){
                echo 'Nologin';
                die;
            }
        }
        //普通刷新访问
        if(!$isLogin){
            //没有登录直接跳转
            $this->redirect('admin/Login/index');
        }
    }
    //上传
    //file 是接收的$_FILES['file']
    public function uploader($file){
        $upDir = $this->createUpDir();
        if(!$upDir) return false;

        $filetype = explode('/',$file['type'])[1];
        $fileName = date('YmdHis') . substr(md5($file['name']),8,16) . '.' . $filetype;
        move_uploaded_file($file['tmp_name'],$upDir . '/' . $fileName);
        return date('Ymd') . '/' . $fileName;
    }
    //创建上传目录
    public function createUpDir(){
        $upDir = ROOT_PATH . 'public/static/upLoder/' . date('Ymd');
        if(!file_exists($upDir)){
            //目录不存在，去创建
            if(!mkdir($upDir,0777)){
                //创建失败，直接返回 false,上传失败
                return false;
            }
        }
        return $upDir;
    }
}