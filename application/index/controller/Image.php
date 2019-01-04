<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 23:24
 */
namespace app\index\controller;
use think\Controller;
use app\common\lib\Upload;

//图片上传相关逻辑类
class Image extends Controller
{
    /**
     * 七牛图片上传
     */
    public function image(){
        return$this->fetch('image/image');
    }
    public function upload()
    {

        if(request()->isPost()){
            try{
                $image=Upload::image();

            }catch (\Exception $e){
                echo json_encode(['status'=>0,'message'=>$e->getMessage()]);
            }
            if($image){
                $data=[
                  'status'=>1,
                  'msg'=>'Ok',
                  'path'=>config('qiniu.image_url').'/'.$image,

                ];
                echo json_encode($data);exit();
            }
        }else{
            return json_encode(['status'=>0,'message'=>'图片上传失败']);
        }

    }
}