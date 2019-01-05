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

class Selllist extends Base {
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin('admin');
    }
    public function index(){
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
                    ->paginate(15,false,$pageparam);
            }else{
                $selllist=Db::table('sellinfo')
                    ->alias('s')
                    ->join('haotype h','s.type = h.htid')
                    ->where($pageparam['query'])
                    ->paginate(15,false,$pageparam);
            }

            $this->assign('keyword',$getkeyword);
            $this->assign('types',$types);
            $this->assign('list',$selllist);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('9',$idsarr)){
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
    //审核
    public function stoppass(){
        $state=input('state');
        $getid=input('id');
        $re=Db::table('sellinfo')->where('id',$getid)->update(array('state'=>$state,'addtime'=>date('Y-m-d',time())));
        if ($re){
            $redata['code']=1;
            $redata['msg']='操作成功';
            echo json_encode($redata);
        }else{
            $redata['code']=0;
            $redata['msg']='操作失败';
            echo json_encode($redata);
        }
    }
    //拒绝
    public function reason(){
        if(request()->isPost()){
            $getinfo=input();
            $getinfo['addtime']=date('Y-m-d',time());
            $getid=input('id');
            //修改
            $re=Db::table('sellinfo')->where('id',$getid)->update($getinfo);
            if ($re){
                $redata['code']=1;
                $redata['msg']='操作成功';
                echo json_encode($redata);
            }else{
                $redata['code']=0;
                $redata['msg']='操作失败';
                echo json_encode($redata);
            }
        }else{
            $id=input('id');
            $this->assign('id',$id);
            $rootname=Session::get('rootname');
            $loginname=Session::get('loginname');
            $this->assign('rootname',$rootname);
            $this->assign('loginname',$loginname);
            return $this->fetch();
        }

    }
    //查看详细
    public function detail(){
        if(request()->isPost()){
            $getinfo=input();
            $getid=input('id');
            //修改
            $re=Db::table('sellinfo')->where('id',$getid)->update($getinfo);
            if ($re){
                $redata['code']=1;
                $redata['msg']='操作成功';
                echo json_encode($redata);
            }else{
                $redata['code']=0;
                $redata['msg']='操作失败';
                echo json_encode($redata);
            }
        }else{
            $id=input('id');
            $infos=Db::table('sellinfo')->where('id',$id)->find();
            $imgsarr=explode("|",$infos['imgs']);
            $this->assign('info',$infos);
            $alltype=$this->getalltype();
            $this->assign('alltype',$alltype);
            $this->assign('imgarr',$imgsarr);

            $haotype=$this->haotype();
            $this->assign('haotype',$haotype);
            $rootname=Session::get('rootname');
            $loginname=Session::get('loginname');
            $this->assign('rootname',$rootname);
            $this->assign('loginname',$loginname);
            return $this->fetch();
        }

    }
    public function getalltype(){
        $typelist=Db::table('type')->select();
        return $typelist;
    }
    public function haotype(){
        $typelist=Db::table('haotype')->select();
        return $typelist;
    }
}
