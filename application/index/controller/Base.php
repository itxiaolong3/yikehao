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
    //时间计算格式
    function formatTime($date) {
        $str = '';
        $timer = strtotime($date);
        $diff = $_SERVER['REQUEST_TIME'] - $timer;
        $day = floor($diff / 86400);
        $free = $diff % 86400;
        if($day > 0) {
            return $day."天前";
        }else{
            if($free>0){
                $hour = floor($free / 3600);
                $free = $free % 3600;
                if($hour>0){
                    return $hour."小时前";
                }else{
                    if($free>0){
                        $min = floor($free / 60);
                        $free = $free % 60;
                        if($min>0){
                            return $min."分钟前";
                        }else{
                            if($free>0){
                                return $free."秒前";
                            }else{
                                return '刚刚';
                            }
                        }
                    }else{
                        return '刚刚';
                    }
                }
            }else{
                return '刚刚';
            }
        }
    }

}