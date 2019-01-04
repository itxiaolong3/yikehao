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
class Login extends Controller{
    public function index(){
        if (request()->isPost()){
            $name=input('adminname');
            $psw=input('psw');
            $re=Db::table('admin')->where(array('adminname'=>$name,'psw'=>$psw))->find();
            if ($re){
                if($re['state']){
                    $res['status'] = 1;
                    $res['msg'] = '登录成功';
                    //设置session
                    Session::set('uid',$re['id']);
                    Session::set('rootids',$re['rootnum']);
                }else{
                    $res['status'] = 2;
                    $res['msg'] = '您的账号未开启！！！';
                }

            }else{
                $res['status'] = 0;
                $res['msg'] = '账户或者密码错误';
            }
            return json_encode($res);
        }
        return $this->fetch();
    }
    public function loginout(){
        Session::set('uid','');
        $this->redirect('');
    }
}
