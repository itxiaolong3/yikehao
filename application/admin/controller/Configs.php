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

class Configs extends Base{
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin();
    }
    public function index(){
        $configs=Db::table('configs')->where('id',1)->find();
        $this->assign('configs',$configs);
        if (request()->isPost()){
            $data=input();
            $data['addtime']=time();
            //查询是否存在了
            if ($configs){
                //更新
                Db::table('configs')->where('id',$data['id'])->update($data);
                $this->redirect('');
            }else{
                //新增
                Db::table('configs')->insert($data);
                $this->redirect('');
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
    //单图片的删除
    public  function delone() {
       //E:\mydemo\yikehao\
        $src = str_replace( '/yikehao', '', str_replace('//', '/', input('src')));
        $path=ROOT_PATH.$src;
        $filepaht=str_replace('\\','/',str_replace('//', '/', $path));
        if (file_exists($filepaht)) {
            @unlink($filepaht);
        }
        print_r(ROOT_PATH . '/'.input('src'));
        exit();
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
