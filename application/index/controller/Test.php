<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 23:24
 */
namespace app\index\controller;
use think\Controller;
class Test extends Controller
{

    public function test(){
       return $this->fetch('test/index');
    }

}