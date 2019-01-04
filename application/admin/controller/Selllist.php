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
class Selllist extends Base {
    public function _initialize(){
        //判断是否登录，未登录跳转到登录页面
        $this->isJumpLogin('admin');
    }
    public function index(){
        if (request()->isPost()){
            $getid=input('id');
            $re=Db::table('sellinfo')->where('id',$getid)->delete();
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
            $types=input('type');
            if ($types<3){
                $selllist=Db::table('sellinfo')
                    ->alias('s')
                    ->join('haotype h','s.type = h.htid')
                    ->where('phone','like',"%".$getkeyword."%")
                    ->where(array('state'=>$types))
                    ->select();
            }else{
                $selllist=Db::table('sellinfo')
                    ->alias('s')
                    ->join('haotype h','s.type = h.htid')
                    ->where('phone','like',"%".$getkeyword."%")
                    ->select();
            }

            $this->assign('keyword',$getkeyword);
            $this->assign('types',$types);
            $this->assign('list',$selllist);
            //权限判断
            $getrootids=session('rootids');
            $idsarr=explode(',',$getrootids);
            if (in_array('9',$idsarr)){
                $this->assign('ids',$getrootids);
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
        $re=Db::table('sellinfo')->where('id',$getid)->update(array('state'=>$state));
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
