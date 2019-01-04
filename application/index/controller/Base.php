<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Base extends Controller
{
    public function gettoptype()
    {
        $typelist=Db::table('type')->limit(10)->select();
        return $typelist;
    }
    public function getalltype(){
        $typelist=Db::table('type')->select();
        return $typelist;
    }
    public function haotype(){
        $typelist=Db::table('haotype')->select();
        return $typelist;
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