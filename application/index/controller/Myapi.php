<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/16
 * Time: 15:13
 */
namespace app\index\controller;
use Aliyun\DySDKLite\Sms\mysms;
use app\index\WxApi;
use service\ToolsService;
use think\Db;
use think\File;
use think\Request;
use think\Session;
use think\Loader;
Loader::import('wapalipay.wappay.service.AlipayTradeService',EXTEND_PATH,'.php');
Loader::import('wapalipay.wappay.buildermodel.AlipayTradeWapPayContentBuilder',EXTEND_PATH,'.php');
class Myapi extends Base
{
    public function __construct(Request $request = null)
    {
        ToolsService::corsOptionsHandler();
    }
    //微信支付
    public function wxpay()
    {
        $pay = new WxApi();
        //$body,$sn,$price,$openid,$tz_url = false
        $configs = Db::table('configs')->where('id', 1)->find();
        $body = '益企发支付';
        $sn = time() . $this->getcode(8);
        $openid = input('openid');
        //$openid=$this->encodeanduecode('itxiaolong',$getopenid,1);
        $uid = input('uid');
        $gid = input('gid');
        $paytype = input('paytype');//0会员支付 1-买号 2-增值服务
        switch ($paytype){
            case 0:
                if ($gid==1){
                    $price=$configs['mothprice'];
                }else if($gid==2){
                    $price=$configs['jiprice'];
                }else if ($gid==3){
                    $price=$configs['yearprice'];
                }
                break;
            case 1:
                $price = input('price');
                break;
            case 2:
                $price = input('price');
                break;
        }
        $attach = $uid . '|' . $gid . '|' . $paytype;
        $res = $pay->UnifiedOrder($body, $sn, $attach, $price * 100, $openid);
        $re = json_decode($res, true);
        if ($re) {
            $re['code'] = 1;
            $re['msg'] = '支付成功';
        } else {
            $re['code'] = 0;
            $re['msg'] = '支付失败';
        }
        echo json_encode($re);
    }
    //获取金额
    public function getprice()
    {
        $configs = Db::table('configs')->where('id', 1)->find();
        $re['price'] = $configs['price'];
        echo json_encode($re);
    }
    //微信登录入口
    public function wxlogin()
    {
        $wxConfig = Db::table('configs')->where('id', 1)->find();
        $uid = input('uid', 1);
        $url = urlencode(request()->domain() . '/yikehao/dealwxlogin?uid=' . $uid);
        $apiUrl = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$wxConfig['appid']}&redirect_uri={$url}&response_type=code&scope=snsapi_userinfo#wechat_redirect";
        header('Location:' . $apiUrl);
    }
    //用户登录
    public function doLogin()
    {
        $phone = input('phone');
        $psw = input('psw');
        $openid = input('openid');
        $type = input('type');
        if ($type == 1) {//验证码登录
            $code = input('code');
            if (empty($code)) {
                echo $this->resultToJson(0, '登录失败。验证码不可为空', '');
            } else {
                //先判断验证码
                $istrue = Db::table('smscode')->where(array('phone' => $phone, 'code' => $code))->find();
                if ($istrue) {
                    $loginre = Db::table('userinfo')->where('phone', $phone)->find();
                    if ($loginre) {
                        Db::table('smscode')->where('phone', $phone)->delete();
                        echo $this->resultToJson(1, '登录成功', $loginre);
                    } else {
                        echo $this->resultToJson(0, '登录失败', '');
                    }
                } else {
                    echo $this->resultToJson(0, '登录失败。验证码错误', '');
                }
            }
        } else {
            //账号密码登录
            $re = Db::table('userinfo')->where(array('phone' => $phone, 'psw' => $psw))->find();
            if ($re) {
                echo $this->resultToJson(1, '登录成功', $re);
            } else {
                echo $this->resultToJson(0, '登录失败。检查用户名、密码', '');
            }
        }
    }
    //获取用户信息
    public function getuseropenid()
    {
        $id = input('uid');
        $re = Db::table('userinfo')->where('uid', $id)->find();
        $configs=Db::table('configs')->where('id',1)->field('kfqq')->find();
        $re['kfqq']=$configs['kfqq'];
        echo $this->resultToJson(1,'用户信息',$re);
    }
    //获取会员卡信息
    public function getVip()
    {
        $configs=Db::table('configs')->where('id',1)->field('mothprice,jiprice,yearprice')->find();
        echo $this->resultToJson(1,'会员卡信息',$configs);
    }
    //编辑用户信息
    public function doEditinfo()
    {
        $id = input('uid');
        $wechat = input('wechat');
        $qq = input('qq');
        $qqemail = input('qqemail');
        $editre=Db::table('userinfo')->where('uid', $id)->update(array('wx' => $wechat,'qq'=>$qq,'qqemail'=>$qqemail));
        if ($editre){
            echo $this->resultToJson(1,'编辑成功','');
        }else{
            echo $this->resultToJson(0,'编辑失败，数据未做修改','');
        }
    }
    //发送短信认证码
    public function sendcode()
    {
        include ROOT_PATH . 'extend/Alidayu/sendSms.php';
        //获取配置信息$keyid,$keysecret,$signname,$tmpcode,$phone,$code
        $configinfo = Db::table('configs')->where('id', 1)->find();
        $keyid = $configinfo['accesskeyid'];
        $keysecret = $configinfo['accesskeyseret'];
        $signname = $configinfo['smssign'];
        $tmpcode = $configinfo['smscode'];
        $getphone = input('phone');
        $openid = input('openid');
        $code = $this->getcode(4);
        $mysms = new Mysms();
        $returninfo = $mysms->sendSms($keyid, $keysecret, $signname, $tmpcode, $getphone, $code);
        $re = json_encode($returninfo);
        $dealre = json_decode($re, true);
        if ($dealre['Message'] == 'OK') {
            //保存认证码
            $issave = Db::table('smscode')->where('phone', $getphone)->find();
            if ($issave) {
                Db::table('smscode')->where('phone', $getphone)->update(array('code' => $code));
            } else {
                Db::table('smscode')->insert(array('phone' => $getphone, 'code' => $code));
            }
            echo $this->resultToJson(1, '发送成功', 60);
        } else {
            echo $this->resultToJson(0, '发送失败', 0);
        }
    }
    //用户注册
    public function register()
    {
        $phone = input('phone');
        $psw = input('psw');
        $openid = input('openid');
        $code = input('code');
        if (empty($phone) || empty($psw)) {
            echo $this->resultToJson(0, '注册失败。手机号或者密码不可为空', '');
        } else if (empty($code)) {
            echo $this->resultToJson(0, '注册失败。请输入验证码', '');
        } else {
            //先判断认证码
            $istrue = Db::table('smscode')->where(array('phone' => $phone, 'code' => $code))->find();
            if ($istrue) {
                $data['phone'] = $phone;
                $data['psw'] = $psw;
                $data['addtime'] = date('Y-m-d H:i:s', time());
                //查找用户是否存在
                $ishave = Db::table('userinfo')->where('phone', $phone)->find();
                if ($ishave) {
                    echo $this->resultToJson(0, '已注册过，无法再次注册', '');
                } else {
                    $upre = Db::table('userinfo')->insert($data);
                    if ($upre) {
                        Db::table('smscode')->where('phone', $phone)->delete();
                        echo $this->resultToJson(1, '注册成功', '');
                    } else {
                        echo $this->resultToJson(0, '注册失败。无法保存数据', '');
                    }
                }
            } else {
                echo $this->resultToJson(0, '注册失败。验证码错误', '');
            }
        }
    }
    //处理微信登录信息
    public function dealwxlogin()
    {
        $getcode = input('code');
        $getuid = input('uid');
        $wxConfig = Db::table('configs')->where('id', 1)->find();
        $tokenandappid = $this->get_access_token_and_openid($wxConfig['appid'], $wxConfig['appSecret'], $getcode);
        $openid = $tokenandappid['openid'];
        //$access_token=$tokenandappid['access_token'];
        //获取用户信息
//        $userresult = file_get_contents("https://api.weixin.qq.com/sns/userinfo?access_token=" . $access_token . "&openid=" . $openid . '&lang=zh_CN');
//        $userinfo = json_decode($userresult, true);
//
//        $getusername = $userinfo['nickname'];
//        $getheaderimg = $userinfo['headimgurl'];
        //保存openid到用户表中
        //先检查表中是否已经存在该用户，如果存在直接跳转
        //$checkres=Db::table('userinfo')->where('openid',$openid)->find();
        //exit($openid);
//        if ($checkres){
//            session("session_openid", $openid);
//            $this->redirect(request()->domain().'/#/pages/login?uid='.$checkres['id']);
//        }else{
//            $data['openid']=$openid;
//            $data['headimg']=$getheaderimg;
//            $data['nickname']=$getusername;
//            $data['addtime']=date('Y-m-d H:i:s',time());
//            $addre=Db::table('userinfo')->insert($data);
//            $newid=Db::table('userinfo')->getLastInsID();
        //if ($addre){
        session("session_openid", $openid);
        $dealopenid = $this->encodeanduecode('itxiaolong', $openid, 0);
        $this->redirect(request()->domain() . '/yunle?openid=' . $openid);
        // }else{
//                $redata['code']=0;
//                $redata['msg']='登录失败。请重试';
//                echo json_encode($redata);
        // }
        // }
    }
    //随机生成验证码
    public function getcode($n)
    {
        $num = "";
        for ($i = 0; $i < $n; $i++) {
            $num .= rand(0, 9);
        }
        return $num;
    }
    //微信登录相关
    private function get_access_token_and_openid($appid, $secret, $code)
    {
        $getaccess = file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $appid . "&secret=" . $secret . "&code=" . $code . '&grant_type=authorization_code');
        $getacctoken = json_decode($getaccess, true);
        return $getacctoken;
    }
    /**
     * @param $key  解密密钥
     * @param $string 需要加密的文字
     * @param $decrypt 0加密 1解密
     * @return string 返回结果
     */
    function encodeanduecode($key, $string, $decrypt)
    {
        if ($decrypt) {
            $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "12");
            return $decrypted;
        } else {
            $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
            return $encrypted;
        }
    }
    //轮播图
    public function getbanner()
    {
        $bannerlist = Db::table('banner')->select();
        foreach ($bannerlist as $k => $v) {
            $bannerlist[$k]['imgs'] = request()->domain() . $v['imgs'];
        }
        if ($bannerlist) {
            $res['code'] = 1;
            $res['msg'] = '获取轮播图';
            $res['data'] = $bannerlist;
            echo json_encode($res);
        } else {
            $res['code'] = 0;
            $res['msg'] = '无数据';
            $res['data'] = $bannerlist;
            echo json_encode($res);
        }
    }
    //头部分类
    public function gettoptype()
    {
        $typelist = Db::table('type')->limit(10)->select();
        if ($typelist) {
            echo $this->resultToJson(1, '头部分类获取成功', $typelist);
        } else {
            echo $this->resultToJson('0', '获取头部分类失败', '');
        }
    }
    //获取全部分类
    public function gettype()
    {
        $typelist = Db::table('type')->select();
        if ($typelist) {
            echo $this->resultToJson(1, '分类获取成功', $typelist);
        } else {
            echo $this->resultToJson('0', '获取分类失败', '');
        }
    }
    //获取账号类型
    public function gethaotype()
    {
        $list = Db::table('haotype')->select();
        if ($list) {
            echo $this->resultToJson(1, '号类型数据', $list);
        } else {
            echo $this->resultToJson(0, '返回号类型数据失败', '');
        }
    }
    //搜索账号
    public function findhao()
    {
        $getkeyword = input('keyword');
        $pages = input('page', 1);
        $pageparam = ['query' => []];//查询条件
        //筛选条件
        $htypeid = input('htypeid');
        $typeid = input('typeid');
        $priceid = input('priceid');
        $rzid = input('rzid');
        if ($htypeid) {
            $pageparam['query']['type'] = $htypeid;
        } else if ($priceid) {
            switch ($priceid) {
                case 1:
                    array_push($bzarr, '一万以内');
                    $pageparam['query']['price'] = array('<', 10000);
                    break;
                case 2:
                    array_push($bzarr, '1-3万');
                    $pageparam['query']['price'] = array('between', '10000,30000');
                    break;
                case 3:
                    array_push($bzarr, '3-5万');
                    $pageparam['query']['price'] = array('between', '30000,50000');
                    break;
                case 4:
                    array_push($bzarr, '5-7万');
                    $pageparam['query']['price'] = array('between', '50000,70000');
                    break;
                case 5:
                    array_push($bzarr, '7-10万');
                    $pageparam['query']['price'] = array('between', '70000,100000');
                    break;
                case 6:
                    array_push($bzarr, '10-20万');
                    $pageparam['query']['price'] = array('between', '100000,200000');
                    break;
                case 7:
                    array_push($bzarr, '20万以上');
                    $pageparam['query']['price'] = array('>', 200000);
                    break;
            }
        } else if ($rzid != 3) {
            $pageparam['query']['isrz'] = $rzid;
        }
        $pageparam['query']['zhname'] = ['like', "%" . $getkeyword . "%"];
        $pageparam['query']['state'] = 2;
        $pageparam['query']['issell'] = 0;
        if ($typeid) {
            $userlist = Db::table('sellinfo')
                ->where($pageparam['query'])
                ->where('FIND_IN_SET(:types,fortype)', ['types' => $typeid])
                ->page($pages, 10)->select();
        } else {
            $userlist = Db::table('sellinfo')
                ->where($pageparam['query'])
                ->page($pages, 10)->select();
        }
        if ($userlist) {
            echo $this->resultToJson(1, '搜索返回成功', $userlist);
        } else {
            echo $this->resultToJson('0', '搜索返回失败', '');
        }
    }
    //账号列表，条件待设
    public function haolist()
    {
        $pages = input('page', 1);
        $pageparam = ['query' => []];//查询条件
        $pageparam['query']['state'] = 2;
        $pageparam['query']['issell'] = 0;
        $userlist = Db::table('sellinfo')->where($pageparam['query'])->page($pages, 10)->select();
        if ($userlist) {
            echo $this->resultToJson(1, '返回号列表成功', $userlist);
        } else {
            echo $this->resultToJson(0, '返回号列表失败', '');
        }
    }
    //动态交易
    public function sellnotifi()
    {
        $ordernews = Db::table('payorder')->select();
        foreach ($ordernews as $k => $v) {
            $ordernews[$k]['totime'] = $this->formatTime($v['paytime']);
        }
        if ($ordernews) {
            echo $this->resultToJson(1, '返回交易动态成功', $ordernews);
        } else {
            echo $this->resultToJson(0, '返回交易动态失败', '');
        }
    }
    //获取单一账号详细
    public function getdetail()
    {
        $id = input('id');
        $detail = Db::table('sellinfo')
            ->alias('s')
            ->join('haotype h', 's.type = h.htid')
            ->join('admin a', 's.kefuid = a.id')
            ->field('s.*,h.*,a.qq as kfqq,a.phone as kfphone')
            ->where('s.id', $id)->find();
        $imgarr = explode("|", $detail['imgs']);
        foreach ($imgarr as $k => $v) {
            $imgarr[$k] = request()->domain() . $v;
        }
        $detail['imgarr'] = $imgarr;
        if ($detail) {
            echo $this->resultToJson(1, '商品详细', $detail);
        } else {
            echo $this->resultToJson(0, '返回数据失败', '');
        }
    }
    //图片上传
    public function apiLoadimg()
    {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:*');
        $files = $_FILES['image'];
        $imgpath = $this->apiuploader($files);
        if ($imgpath) {
            echo $this->resultToJson(1, '上传成功', $imgpath);
        } else {
            echo $this->resultToJson(0, '上传失败', '');
        }
    }
    public function apiuploader($file)
    {
        $upDir = $this->createUpDir();
        if (!$upDir) return false;
        $filetype = explode('/', $file['type'])[1];
        $fileName = date('YmdHis') . substr(md5($file['name']), 8, 16) . '.' . $filetype;
        move_uploaded_file($file['tmp_name'], $upDir . '/' . $fileName);
        return '/yikehao/public/static/upLoder/' . date('Ymd') . '/' . $fileName;
    }
    //返回协议
    public function getxieyi()
    {
        //协议类型
        $state = input('state');
        if ($state == 1) {
            //登录协议
            $res = Db::table('xieyi')->where('id', 1)->find();
        } else {
            //支付协议
            $res = Db::table('xieyi')->where('id', 2)->find();
        }
        echo $this->resultToJson(1, '协议', $res);
    }
    //发布号
    public function doPosthao(){
        $allinfo=input();
        $gethytpye=input('fortype');
        $typeid=array();
        $typetext=array();
        if(strstr($gethytpye,',')){
            $hytypearr=explode(',',$gethytpye);
            foreach ($hytypearr as $k=>$v){
                array_push($typeid,$v);
                $typename = Db::table('type')->where('tid', $v)->find();
                array_push($typetext,$typename['name']);
            }
        }else{
            array_push($typeid,$gethytpye);
            $typename = Db::table('type')->where('tid', $gethytpye)->find();
            array_push($typetext,$typename['name']);
        }
        $allinfo['fortype']=implode(',',$typeid);
        $allinfo['addtime']=date('Y-m-d',time());
        $allinfo['fortypetext']=implode('|',$typetext);
        $allinfo['imgs']=substr($allinfo['imgs'],1);
        $allinfo['oneprice']=number_format(intval($allinfo['price'])/intval($allinfo['fansnum']),2);
        //分配销售员
        $getonekf=Db::table('admin')->where(array('iskf'=>1,'state'=>1))->order('num asc')->limit(1)->find();
        $allinfo['kefuid']=$getonekf['id'];
        $res=Db::table('sellinfo')->insert($allinfo);
        if ($res){
            //修改销售员的接单数目
            Db::table('admin')->where('id',$getonekf['id'])->update(array('num'=>$getonekf['num']+1));
            echo $this->resultToJson(1,'提交成功','');
        }else{
            echo $this->resultToJson(0,'提交失败','');
        }
    }
    //获取商家手机号
    public function getbossphone(){
        $id=input('id');
        $uid=input('uid');
        $info=Db::table('sellinfo')->where('id',$id)->find();
        //判断当前账户是否在看，这里有待处理的问题：看不同账号时再次回来看回另算一次了
        $uinfo=Db::table('userinfo')->where('uid',$uid)->find();
        if ($uinfo['lookid']==$id){
            $re['phone']=$info['phone'];
            echo $this->resultToJson(1,'商家信息',$re);
        }else{
            if ($uinfo['looknum']>=0){
                //判断用户身份和等级有效期
                if ($uinfo['vipstate']>2){//永久会员
                    $re['phone']=$info['phone'];
                    echo $this->resultToJson(1,'商家手机号',$re);
                }else if($uinfo['vipstate']==2){
                    //判断时间
                    $viptime=$uinfo['paytime'];
                    //(strtotime($viptime))+86400*30
                    $pktime=(strtotime($viptime))+86400*90-time();
                    if ($pktime<=0){
                        //过期
                        echo $this->resultToJson(-1,'会员过期','');
                    }else{
                        $re['phone']=$info['phone'];
                        echo $this->resultToJson(1,'商家手机号',$re);
                    }
                }else if($uinfo['vipstate']==1){
                    //判断时间
                    $viptime=$uinfo['paytime'];
                    $pktime=(strtotime($viptime))+86400*30-time();
                    if ($pktime<=0){
                        //过期
                        $re['phone']='';
                        echo $this->resultToJson(-1,'会员过期',$re);
                    }else{
                        $re['phone']=$info['phone'];
                        echo $this->resultToJson(1,'商家手机号',$re);
                    }
                }else{
                    //通知购买会员
                    $re['phone']='';
                    echo $this->resultToJson(0,'需升级会员',$re);
                }

            }else{
                //保存查看账户id并修改可看次数
                Db::table('userinfo')->where('uid',$uid)->setInc('looknum');
                Db::table('userinfo')->where('uid',$uid)->update(array('lookid'=>$id));
                $re['phone']=$info['phone'];
                echo $this->resultToJson(1,'商家手机号',$re);
            }

        }
    }
    //增值服务
    public function getaddserver(){
        $serlist = Db::table('addserver')->select();
        foreach ($serlist as $k => $v) {
            $serlist[$k]['titleimg'] = request()->domain() . $v['titleimg'];
        }
        if ($serlist) {
            echo $this->resultToJson(1, '增值服务获取成功', $serlist);
        } else {
            echo $this->resultToJson('0', '增值服务获取失败', '');
        }
    }
    //服务中心数据
    public function getSerandProinfo(){
        $newlist = Db::table('newslist')->select();
        foreach ($newlist as $k => $v) {
            $newlist[$k]['titleimg'] = request()->domain() . $v['titleimg'];
        }
        $prolist = Db::table('problist')->select();
        foreach ($prolist as $k => $v) {
            $prolist[$k]['titleimg'] = request()->domain() . $v['titleimg'];
        }
        $res['newlist']=$newlist;
        $res['prolist']=$prolist;
        if ($res) {
            echo $this->resultToJson(1, '服务中心获取成功', $res);
        } else {
            echo $this->resultToJson(0, '服务中心获取失败', '');
        }
    }
    //新闻，问题详细
    public function getNeworProdetail(){
        $id=input('id');
        $types=input('type');
        if ($types){
            $re=Db::table('newslist')->where('id',$id)->find();
            //$re['contents']=htmlspecialchars_decode($re['contents']);
        }else{
            $re=Db::table('problist')->where('id',$id)->find();
            // $re['contents']=htmlspecialchars_decode($re['contents']);
        }

        if ($re){
            echo $this->resultToJson(1, '详细', $re);
        }else{
            echo $this->resultToJson(1, '无数据', $re);
        }
    }
    //订单管理
    public function getOrderlist(){
        $uid=input('uid');
        $selllist = Db::table('sellinfo')->where('uid',$uid)->order('id desc')->select();
        $addserlist = Db::table('addserorder')->where('uid',$uid)->order('id desc')->select();
        $payorderlist = Db::table('payorder')->where('uid',$uid)->order('id desc')->select();
        $viporderlist = Db::table('viporder')->where('uid',$uid)->order('id desc')->select();
        $re['selllist']=$selllist;
        $re['addserlist']=$addserlist;
        $re['payorderlist']=$payorderlist;
        $re['viporderlist']=$viporderlist;
        if ($re){
            echo $this->resultToJson(1,'订单管理',$re);
        }else{
            echo $this->resultToJson(0,'无订单','');
        }
    }
    //订单详细
    public function getOrderdetail(){
        $id=input('id');
        $types=input('types');
        switch ($types){
            case 0:
                $re=Db::table('payorder')->where('id',$id)->find();
                break;
            case 1:
                $re=Db::table('viporder')->where('id',$id)->find();
                break;
            case 2:
                $re=Db::table('sellinfo')->where('id',$id)->find();
                break;
            case 3:
                $re=Db::table('addserorder')->where('id',$id)->find();
                break;
        }

        if ($re){
            echo $this->resultToJson(1, '详细', $re);
        }else{
            echo $this->resultToJson(1, '无数据', $re);
        }
    }
    //支付宝支付
    public function AliPay(){
        $uid = input('uid');
        $gid = input('gid');
        $paytype = input('paytype');//0会员支付 1-买号 2-增值服务
        $configs = Db::table('configs')->where('id', 1)->find();
        switch ($paytype){
            case 0:
                if ($gid==1){
                    $price=$configs['mothprice'];
                }else if($gid==2){
                    $price=$configs['jiprice'];
                }else if ($gid==3){
                    $price=$configs['yearprice'];
                }
                break;
            case 1:
                $price = input('price');
                break;
            case 2:
                $price = input('price');
                break;
        }
        $attach = $uid . '|' . $gid . '|' . $paytype;
        $config = array (
            //应用ID,您的APPID。
            'app_id' => $configs['app_id'],
            //商户私钥，您的原始格式RSA私钥
            'merchant_private_key' =>$configs['private_key'],
            //异步通知地址
            'notify_url' => "",
            //同步跳转
            'return_url' => request()->domain().'/yikehao/Alipayreturnurl?paytype='.$attach,
            //编码格式
            'charset' => "UTF-8",
            //签名方式
            'sign_type'=>"RSA2",
            //支付宝网关
            'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
            //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
            'alipay_public_key' =>$configs['public_key'],

        );

        //商户订单号，商户网站订单系统中唯一订单号，必填
        $sn = time() . $this->getcode(8);
        $out_trade_no = $sn;
        //订单名称，必填
        $subject = '益企发支付';

        //付款金额，必填
        $total_amount = $price;

        //商品描述，可空
        $body = '益企发支付';

        //超时时间
        $timeout_express="1m";
        $payRequestBuilder = new \AlipayTradeWapPayContentBuilder();
        $payRequestBuilder->setBody($body);
        $payRequestBuilder->setSubject($subject);
        $payRequestBuilder->setOutTradeNo($out_trade_no);
        $payRequestBuilder->setTotalAmount($total_amount);
        $payRequestBuilder->setTimeExpress($timeout_express);

        $payResponse = new \AlipayTradeService($config);
        $result = $payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);
        return ;
    }
    //返回结果的封装
    function resultToJson($code, $msg, $data)
    {
        $re['code'] = $code;
        $re['msg'] = $msg;
        $re['data'] = $data;
        return json_encode($re);
    }
    //时间计算格式
    function formatTime($date)
    {
        $str = '';
        $timer = strtotime($date);
        $diff = $_SERVER['REQUEST_TIME'] - $timer;
        $day = floor($diff / 86400);
        $free = $diff % 86400;
        if ($day > 0) {
            return $day . "天前";
        } else {
            if ($free > 0) {
                $hour = floor($free / 3600);
                $free = $free % 3600;
                if ($hour > 0) {
                    return $hour . "小时前";
                } else {
                    if ($free > 0) {
                        $min = floor($free / 60);
                        $free = $free % 60;
                        if ($min > 0) {
                            return $min . "分钟前";
                        } else {
                            if ($free > 0) {
                                return $free . "秒前";
                            } else {
                                return '刚刚';
                            }
                        }
                    } else {
                        return '刚刚';
                    }
                }
            } else {
                return '刚刚';
            }
        }
    }
}
