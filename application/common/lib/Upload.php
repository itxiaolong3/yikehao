<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 23:09
 */
namespace app\common\lib;
require 'extend/qiniu/autoload.php';
//引入七牛的签权类extend/qiniu/autoload.php
use Qiniu\Auth;
//上传类
use Qiniu\Storage\UploadManager;

/**
 * 七牛图片基础类库
 * common下的文件不可直接在浏览器中访问
 * Class Upload
 * @package app\common\lib
 */
class Upload{
    /**
     * 图片上传
     */
    public static function image(){
       //halt($_FILES['file']);
        if (empty($_FILES['file']['tmp_name'])){
            exception('您提交的图片数据不合法',404);
        }
        $config=config('qiniu');
        //构建一个签权对象
       $auth= new Auth($config['ak'],$config['sk']);
       //生成上传的token
        $token=$auth->uploadToken($config['bucket']);

        //上传到七牛后保存的文件名
        $file=$_FILES['file']['tmp_name'];
        //后缀获取方法一
//        $ext=explode('.',$_FILES['file']['name']);
//        $ext=$ext[1];//后缀
        //后缀获取方法二
        $pathinfo=pathinfo($_FILES['file']['name']);
        $ext=$pathinfo['extension'];

        //拼接生产的文件名
        $newfilename=date('Y').'/'.date('m').'/'.substr(md5($file),0,5).date('YmdHis').rand(0,9999).'.'.$ext;
        //初始化uploadManager类
        $uploadMgr=new UploadManager();
        //这里方法两个字段，一个是路径，一个是错误信息
        $res= $uploadMgr->putFile($token,$newfilename,$file);
        list($ret,$err)=$res;
       if ($err!==null){
           return null;
        }else{
            return $newfilename;
        }
    }
}