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

class Orderlist extends Base {
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
        if (in_array('8',$idsarr)){
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
    public function viporder(){
        $getkeyword=input('keyword');
        $pageparam=['query'=>[]];//查询条件
        //$pageparam['query']['phone']=['like',"%".$getkeyword."%"];
        $pageparam['query']['ordernum']=['like',"%".$getkeyword."%"];
        $userlist=Db::table('viporder')->where($pageparam['query'])->paginate(15,false,$pageparam);
        $this->assign('keyword',$getkeyword);
        $this->assign('list',$userlist);
        //权限判断
        $getrootids=session('rootids');
        $idsarr=explode(',',$getrootids);
        if (in_array('7',$idsarr)){
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
    public function myorder(){
        if (request()->isPost()){
            $getid=input('id');
            $ischange=input('ischange');
            $kfidarr=Db::table('sellinfo')->where('id',$getid)->find();
            if (empty($ischange)){
                $re=Db::table('sellinfo')->where('id',$getid)->delete();
            }else{
                $getonekf=Db::table('admin')->where(array('iskf'=>1,'state'=>1))->where('id','<>',$kfidarr['kefuid'])->order('num asc')->limit(1)->find();
                $re=Db::table('sellinfo')->where('id',$getid)->update(array('kefuid'=>$getonekf['id']));
            }
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
            $uid = Session::get('uid');
            $getkeyword=input('keyword');
            $types=input('state');
            $pageparam=['query'=>[]];//查询条件
            $pageparam['query']['phone']=['like',"%".$getkeyword."%"];
            if (!empty($types)){
                $pageparam['query']['state']=$types;
                $selllist=Db::table('sellinfo')
                    ->alias('s')
                    ->join('haotype h','s.type = h.htid')
                    ->where($pageparam['query'])
                    ->where('kefuid',$uid)
                    ->paginate(10,false,$pageparam);
            }else{
                $selllist=Db::table('sellinfo')
                    ->alias('s')
                    ->join('haotype h','s.type = h.htid')
                    ->where($pageparam['query'])
                    ->where('kefuid',$uid)
                    ->paginate(10,false,$pageparam);
            }

            $this->assign('keyword',$getkeyword);
            $this->assign('types',$types);
            $this->assign('list',$selllist);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            $this->assign('ids',$getrootids);
            $rootname=Session::get('rootname');
            $loginname=Session::get('loginname');
            $this->assign('rootname',$rootname);
            $this->assign('loginname',$loginname);
            return $this->fetch();

        }
    }

}
