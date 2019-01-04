<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"E:\mydemo\yikehao/application/index\view\login\index.html";i:1545995141;s:59:"E:\mydemo\yikehao\application\index\view\common\header.html";i:1545981406;}*/ ?>
﻿<!DOCTYPE html>
<!-- saved from url=(0024)http://www.wanyiyun.com/ -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="/yikehao/public/static/index/js/hm.js"></script>
    <script type="text/javascript" src="/yikehao/public/static/index/js/jquery.mini.js"></script>

    <script type="text/javascript" src="/yikehao/public/static/index/js/main.js"></script>
    <link type="text/css" rel="stylesheet" href="/yikehao/public/static/index/css/main.css">

    <!--头部-->
    <script type="text/javascript" src="/yikehao/public/static/index/js/wechat.js"></script>
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/index/css/wechat.css">
    <!--幻灯片开始-->
    <script src="/yikehao/public/static/index/js/swiper-3.4.2.jquery.min.js"></script>
    <link href="/yikehao/public/static/index/css/swiper-3.4.2.min.css" rel="stylesheet"/>
    <!--幻灯片结束-->
    <script type="text/javascript" src="/yikehao/public/static/index/js/home.js"></script>
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/index/css/home.css">

    <!--公众号转移-->
    <script src="/yikehao/public/static/index/js/jquery.qrcode.min.js"></script>
    <!--公众号转移-->
    <!--公众号迁移-->
    <link type="text/css" rel="stylesheet" href="/yikehao/public/static/index/css/hcmore.css">
    <script src="/yikehao/public/static/index/js/gd.js"></script>
    <!--公众号迁移-->
    <!--估值 layer-->
    <link href="/yikehao/public/static/index/css/layer.css" rel="stylesheet">
    <script src="/yikehao/public/static/index/js/layer.js"></script>
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/index/css/eva.css">
    <!--估值-->

    <!--产品详细-->
    <script type="text/javascript" src="/yikehao/public/static/index/js/mediadetail.js"></script>
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/index/css/mediadetail.css">
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/index/css/wxmain.css">
    <!--产品详细-->
    <title>云乐互联-公众号交易平台|公众号买卖|公众号出售|公众号转让|购买公众号|粉丝迁移</title>
    <!--layui-->
    <script type="text/javascript" src="/yikehao/public/static/layer/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/layer/css/layui.css">
    <!--layui-->
    <meta name="keywords" content="云乐互联，微信公众号交易平台，公众号买卖，公众号出售，公众号转让，粉丝迁移，购买公众号" />
    <meta name="description" content="号可易公众号交易平台-出售公众号、购买公众号一对一定制服务，主营：微信公众号交易平台，
公众号买卖，公众号出售，公众号转让，粉丝迁移，购买公众号。资深律师为您的交易保驾护航，让您的公众号交易便捷、贴心、更放心！" />
</head>
<body>
<style>
    #online > div > s {
        background: url("/yikehao/public/static/index/images/kefu.png") center center no-repeat;
        background-color: #666;
    }

    body > iframe {
        opacity: 0;
        display: none;
    }

</style>
<div id="header2">
    <div>
        <div style="margin: 0 auto;width: 1200px;position: relative">您好，欢迎来到云乐互联！
            <p>
                <span><a class="link" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2852815254&site=qq&menu=yes">联系客服</a></span>
                <span><a>服务热线：</a><i>173-5987-2786</i></span>
            </p>
        </div>
    </div>

    <form method="get">
        <div>
            <div><img onclick="gethref(this)" hc-href="/" alt="公众号出售-公众号价格-公众号买卖-云乐互联公众号交易平台"
                      src="/yikehao/public/static/index/picture/logo.jpg" width="230" height="90">
                <div>
                    <em>
                        <input class="hc-input" hc-title name="title" placeholder="输入您需求的关键词，如“订阅号”">
                        <input type="submit" value="搜索" class="hc-sub" style="color: #fff;padding-left: 3px;"/>
                    </em>
                    <ul>
                        <?php if(is_array($typetop) || $typetop instanceof \think\Collection || $typetop instanceof \think\Paginator): $i = 0; $__LIST__ = $typetop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><a style="color:#787878" href="<?php echo url('index/deal/index',['tid'=>$vo['tid']]); ?>" class="link"><?php echo $vo['name']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(".hc-sub").click(function () {
        var _title = $("[hc-title]").val();
        alert(_title);
        var _href = "?title=" + _title;
        window.location.href = _href;
    })
</script>
<style>
    #header2 > div:first-child {
        z-index: 10;
    }

    @keyframes hot {
        0% {
            transform: translate(0, 0);
        }
        50% {
            transform: translate(0, -3px);
        }
        100% {
            transform: translate(0, 0);
        }
    }

    @-webkit-keyframes hot {
        0% {
            -webkit-transform: translate(0, 0);
        }
        50% {
            -webkit-transform: translate(0, -5px);
        }
        100% {
            -webkit-transform: translate(0, 0);
        }
    }

</style>
<div id="header_nav2">
    <div class="mj-hv-total" style="position: relative;height: 70px">
        <ul>
            <li><a mj-hv-sh-none href="<?php echo url('index/index/index'); ?>" class="link">首页</a></li>
            <li style="margin:0;color: #fff;">|</li>
            <li><a mj-hv-sh href="<?php echo url('index/deal/index'); ?>" class="link">公众号转让</a></li>
            <li style="margin:0;color: #fff;">|</li>
            <li style="position: relative">
                <a mj-hv-sh-none href="<?php echo url('index/sell/index'); ?>" class="link">卖公众号</a>
            </li>
            <li style="margin:0;color: #fff;">|</li>
            <li><a mj-hv-sh-none href="<?php echo url('index/deal/index'); ?>">买公众号</a></li>
            <li style="margin:0;color: #fff;">|</li>
            <li style="position: relative">
                <a mj-hv-sh-none href="<?php echo url('index/evals/index'); ?>" class="link">帐号估值</a>
            </li>
            <li style="margin:0;color: #fff;">|</li>
            <li>
                <a mj-hv-sh-none href="<?php echo url('index/aboutme/index'); ?>" class="link">关于我们</a>
            </li>
        </ul>
        <img src="/yikehao/public/static/index/picture/font1.png" style="margin-top: 9px;margin-left: 120px;">
        <!--账号选择条件悬浮框-->
        <div mj-cd id="select_box" class="mj-cd"
             style="display:none;position: absolute;left: 0;top:69px;z-index:10;width: auto;border: 4px solid #1F9EBF;border-top: 0">
            <!--    <div></div>-->
            <ul style="background: #fff">
                <li>
                    <s>公众号类型：</s>
                    <em>
                        <a class="link u" onclick="selectFour(this,type=1)">全部</a>
                        <?php if(is_array($haotype) || $haotype instanceof \think\Collection || $haotype instanceof \think\Paginator): $i = 0; $__LIST__ = $haotype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a onclick="selectFour(this,type=1,'<?php echo $vo['htid']; ?>')" class="link "><?php echo $vo['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </em>
                </li>
                <li>
                    <s>公众号类目：</s>
                    <em>
                        <a onclick="selectFour(this,type=2)" class="link u">全部</a>
                        <?php if(is_array($alltype) || $alltype instanceof \think\Collection || $alltype instanceof \think\Paginator): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a onclick="selectFour(this,type=2,'<?php echo $vo['tid']; ?>')" class="link "><?php echo $vo['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </em>
                </li>
                <li>
                    <s>价格区间：</s>
                    <em>
                        <a onclick="selectFour(this,type=3)" class="link u">不限</a>
                        <a onclick="selectFour(this,type=3)" class="link ">0-1万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">1-5万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">5-10万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">10-15万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">15-20万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">20-25万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">25-30万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">30万以上</a>
                        <a onclick="selectFour(this,type=3)" class="link ">30-50万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">50-80万</a>
                        <a onclick="selectFour(this,type=3)" class="link ">80万以上</a>
                    </em>
                </li>
                <li>
                    <s>认证类型：</s>
                    <em>
                        <a onclick="selectFour(this,type=4)" class="link u">不限</a>
                        <a onclick="selectFour(this,type=4)" class="link ">未认证</a>
                        <a onclick="selectFour(this,type=4)" class="link ">已认证</a>
                    </em>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    function gethref(obj) {
        var is_open = $(obj).attr("is-open");
        var href = $(obj).attr("hc-href");
        // console.log(href);
        if (is_open == 1) {
            window.open(href);
        } else {
            window.location.href = href;
        }
    }

    $("[mj-hv-sh]").mouseover(function () {
        $("[mj-cd]").show();
        console.log($("[mj-cd]").height());
    })
    $("[mj-hv-sh-none],#header2").mouseover(function () {

        $("[mj-cd]").hide();
    })
    $(".mj-cd ul").mouseleave(function (event) {
        $("#header_nav2").hover(function () {
            event.preventDefault();
        })
        $("[mj-cd]").hide();

    })

    function selectFour(object, type, id) {
        var url = "<?php echo url('index/deal/index'); ?>";
        var string = $(object).html();
        console.log('string==' + string);
        var haotype = "";
        var types = "";
        var author = "";
        var exp = "";
        var email = "";
        var branch = "";

        if (type == 1) {
            haotype = id;
        } else if (type == 2) {
            types = id;
        } else if (type == 3) {
            email = id;
        } else if (type == 4) {
            branch = id;
        }
        url = url + '?haotype=' + haotype + '&types=' + types + '&author=' + author + '&exp=' + exp + '&email=' + email + '&branch=' + branch;
        window.location.href = url;
    }
</script>
<!--主体-->
<style>
    .mainbody{
        width: 1200px;
        display: flex;
        margin: 5px auto;

    }
    .m_left{
        width: 600px;
        background-color: white;
        height: 500px;
        display: flex;
        justify-content: center;
        padding-top: 50px;
        border-radius: 20px 0px 0px 20px;
    }
    .m_right,.z_m_right,.smslogin{
        width: 500px;
        background-color: white;
        height: 500px;
        padding-top: 50px;
        border-radius: 00px 20px 20px 0px;
    }
    .logintitle{
        font-size: 18px;
        font-weight: bold;
        color: #858585;
        width: 200px;
        margin-right: 40px;
        display: flex;
    }
    .forget{
        width: 200px;
        display: flex;
        justify-content: space-between;
    }
    .forgeta{
        padding-left: 81px;
        width: 155px;
        margin-top: 5px;
        color: #62C9E5;
    }
    .login{
        height: 40px;
        width: 55%;
        background-color: #1F9EBF;
        border-radius: 18px;
        padding: 5px 20px;
        line-height: 36px;
        text-align: center;
        margin: 25px 1px;
    }
    .login a{
        width: 100%;
        color: white;
        cursor: pointer;
    }
    .toreg{
        width: 50%;
        text-align: center;
        color: #A0A0A1;
    }
    .z_logintitle{
        font-size: 18px;
        font-weight: bold;
        color: #858585;
        width: 280px;
        margin-right: 40px;
        display: flex;
    }
    .sendcode{
        position: absolute;
        right: 38%;
        top: 41%;
        margin-top: 5px;
        color: #69ADF0;
        border: none;
    }
    .xieyi{
        width: 250px;
        display: flex;
        justify-content: space-between;
    }
    .ishidden{
        display: none;
    }
</style>
<div id="location">当前位置：账号登录/注册</div>
<div class="mainbody">
    <div class="m_left">
        <img src="/yikehao/public/static/index/images/loginh.png" width="250px" height="250px">
    </div>
    <!--登录部分-->
    <div class="m_right" >
        <div class="layui-form-item">
            <label class="layui-form-label logintitle">账号密码登录:</label>
        </div>
        <form class="layui-form">
            <div class="layui-form-item">
                <div class="layui-input-inline">
                    <input type="number" id="name" lay-verify="name" autocomplete="off" placeholder="手机号" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
            </div>
            <div class="layui-form-item" >
                <div class="layui-input-inline" >
                    <input type="password" id="psw" lay-verify="psw" autocomplete="off" placeholder="登录密码" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
            </div>
            <div class="forget">
                <div class="layui-input-inline"  style="background-color: white;color: grey">
                <input type="checkbox" name="isremb" id="isremb" title="记住密码">
                </div>
                <span ><a onclick="forget()" class="forgeta">忘记密码？</a></span>
            </div>

            <div class="login">
                <span><a onclick="dologin()">登录</a></span>
            </div>
            <div class="toreg">没有账号，立即<a onclick="showreg();" style="color: #62C9E5;margin-left: 5px;cursor: pointer;">注册</a></div>
        </form>
    </div>
    <!--注册部分-->
    <div class="z_m_right">
        <div class="layui-form-item">
            <label class="layui-form-label z_logintitle">欢迎注册云乐互联成为会员:</label>
        </div>
        <form class="layui-form">
            <div class="layui-form-item">
                <div class="layui-input-inline">
                    <input type="text" id="phone" lay-verify="phone" autocomplete="off" placeholder="请输入手机号" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
            </div>
            <div class="layui-form-item" >
                <div class="layui-input-inline" >
                    <input type="text" id="code" lay-verify="psw" autocomplete="off" placeholder="输入验证码" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
                <span ><input type="button" class="sendcode" id="getCodes" value="发送验证码"></span>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-inline">
                    <input type="password" id="zpsw" lay-verify="zpsw" autocomplete="off" placeholder="输入密码" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-inline">
                    <input type="password" id="surepsw" lay-verify="surepsw" autocomplete="off" placeholder="确认密码" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
            </div>
            <div class="xieyi">
                <input type="checkbox" value="1" title="已同意" checked id="agreen"><a onclick="showxieyi();" style="color: #69ADF0;margin-top: 5px;margin-right:7px;cursor: pointer;">《云乐互联用户协议》</a>
            </div>

            <div class="login">
                <span><a onclick="doreg()">注册</a></span>
            </div>
            <div class="toreg">我已有注册,现在就<a onclick="showlogin();" style="color: #62C9E5;margin-left: 5px;cursor: pointer;">登录</a></div>
        </form>
    </div>
    <!--短信登录-->
    <div class="smslogin">
        <div class="layui-form-item">
            <label class="layui-form-label z_logintitle">手机号登录:</label>
        </div>
        <form class="layui-form">
            <div class="layui-form-item">
                <div class="layui-input-inline">
                    <input type="text" id="phone1" lay-verify="phone1" autocomplete="off" placeholder="请输入手机号" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
            </div>
            <div class="layui-form-item" >
                <div class="layui-input-inline" >
                    <input type="text" id="code1" lay-verify="code1" autocomplete="off" placeholder="输入验证码" class="layui-input" style="border-radius:15px !important;height: 45px;width: 270px;">
                </div>
                <span ><input type="button" class="sendcode" id="getCodessms" value="发送验证码"></span>
            </div>

            <div class="login">
                <span><a onclick="dologinsms()">登录</a></span>
            </div>
            <div class="toreg">我有账号，去<a onclick="showlogin();" style="color: #62C9E5;margin-left: 5px;cursor: pointer;">登录</a></div>
        </form>
    </div>
</div>

<script>
    //	验证码
    var ischeck=0;
    var countdown;
    var times=60;
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;
        //日期
        laydate.render({
            elem: '#date'
        });
        laydate.render({
            elem: '#date1'
        });

        //创建一个编辑器
        var editIndex = layedit.build('LAY_demo_editor');

        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 5){
                    return '标题至少得5个字符啊';
                }
            }
            ,pass: [
                /^[\S]{6,12}$/
                ,'密码必须6到12位，且不能出现空格'
            ]
            ,content: function(value){
                layedit.sync(editIndex);
            }
        });

        //监听指定开关
        form.on('switch(switchTest)', function(data){
            layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
                offset: '6px'
            });
            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });

        //监听提交
        form.on('submit(demo1)', function(data){
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            })
            return false;
        });

        //表单初始赋值
        form.val('example', {
            "username": "贤心" // "name": "value"
            ,"password": "123456"
            ,"interest": 1
            ,"like[write]": true //复选框选中状态
            ,"close": true //开关状态
            ,"sex": "女"
            ,"desc": "我爱 layui"
        })


    });
    function showxieyi() {
        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['420px', '240px'], //宽高
            content: 'html内容'
        });
    }
    showlogin();
    setvalue();
    function showlogin() {
        $('.z_m_right').addClass('ishidden');
        $('.m_right').removeClass('ishidden');
        $('.smslogin').addClass('ishidden');
    }
    function showreg() {
        $('.m_right').addClass('ishidden');
        $('.z_m_right').removeClass('ishidden');
        $('.smslogin').addClass('ishidden');
    }
    function forget() {
        $('.smslogin').removeClass('ishidden');
        $('.z_m_right').addClass('ishidden');
        $('.m_right').addClass('ishidden');
    }
    function dologin() {
        var index = layer.load(0, {shade: false});
        var name=$("#name").val();
        var psw=$("#psw").val();
        if(name==''){
            showmsg('请输入用户名');
            layer.close(index);
        }else if(psw==''){
            showmsg('请输入密码');
            layer.close(index);
        }else{
            if($('#isremb').is(':checked')){
                console.log('记住密码')
                setCookie('name',name,7)
                setCookie('psw',psw,7)
            }else{
                delCookie('name');
                delCookie('psw');
            }
            $.post('',{username:name,psw:psw},function (e) {
                var data=JSON.parse(e);
                layer.close(index);
                if (data.status==1){
                    layer.msg(data.msg);
                    window.location.href="<?php echo url('index'); ?>"
                }else{
                    layer.msg(data.msg);
                }
            })
        }
    }
    function dologinsms() {
        var index = layer.load(0, {shade: false});
        var phone=$("#phone1").val();
        var code=$("#code1").val();
        if(phone==''){
            showmsg('请输入手机号');
            layer.close(index);
        }else if(code==''){
            showmsg('请输入验证码');
            layer.close(index);
        }else{
            $.post("loginsms",{phone:phone,code:code},function (e) {
                var data=JSON.parse(e);
                layer.close(index);
                if (data.status==1){
                    layer.msg(data.msg);
                    window.location.href="<?php echo url('index'); ?>"
                }else{
                    layer.msg(data.msg);
                }
            })
        }
    }
    function doreg() {
        var rpsw=$("#zpsw").val();
        var reppass=$("#surepsw").val();
        var phone=$("#phone").val();
        var code=$("#code").val();
        if(!$('#agreen').is(':checked')){
            showmsg('不同意协议无法注册')
        }else{
            if(phone==''){
                showmsg('手机号不可为空')
            }else if(rpsw==''){
                showmsg('密码不可为空')
            }else if(rpsw!=reppass){
                showmsg('密码不一致')
            }else if(code==""){
                showmsg('验证码不可为空')
            }else{
                $(this).attr("disabled",true);
                $.post("registers",{psw:rpsw,phone:phone,code:code},function (e) {
                    var data=JSON.parse(e);
                    if (data.status==1){
                        showmsg(data.msg)
                        showlogin();
                        //$(".regbt").attr("disabled",false);
                    }else{
                        showmsg(data.msg)
                        $(".regbt").attr("disabled",false);
                    }
                })
            }

        }

    }
    function showmsg(msg) {
        layer.msg(msg);
    }
//    注册发送验证码
    $("#getCodes").click(function () {
        var getphone=$("#phone").val();
        var isphone=isPoneAvailable($("#phone"));
        console.log(getphone);
        if(getphone&&isphone){
            //判断手机是否重复checkphoneishave
            $.post("checkphoneishave",{phone:getphone},function (e1) {
                var res=JSON.parse(e1);
                if (res.status==1){
                    invokeSettime($("#getCodes"),$("#phone"));
                }else{
                    showmsg(res.msg)
                }
            })
        }else{
            showmsg('手机号无效');
        }

    });
    //    短信登录发送验证码
    $("#getCodessms").click(function () {
        var getphone=$("#phone1").val();
        var isphone=isPoneAvailable($("#phone1"));
        if(getphone&&isphone){
            invokeSettime($("#getCodessms"),$("#phone1"));
        }else{
            showmsg('手机号无效');
        }

    });
    function invokeSettime(obj,phoneobj){
        console.log("得到的值"+obj.val())
        if(ischeck==0){
            var getphone=phoneobj.val();
            var isphone=isPoneAvailable(phoneobj);
            if (isphone){
                //发送验证码
                $.post("sendcode",{phone:getphone},function (e2) {
                    console.log(e2)
                })
                countdown=times;
                settime(obj);
            }else{
                showmsg('请输入正确手机号')
            }

        }
        function settime(obj) {
            if (countdown == 0) {
                $(obj).attr("disabled",false);
                $(obj).val("发送验证码");
                countdown = times;
                ischeck=0;
                return;
            } else {
                ischeck=1;
                $(obj).attr("disabled",true);
                $(obj).val("(" + countdown + ") s 后重发");
                countdown--;
            }
            setTimeout(function() {
                    settime(obj)
                }
                ,1000)
        }
    }

    function isPoneAvailable($poneInput) {
        var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
        if (!myreg.test($poneInput.val())) {
            return false;
        } else {
            return true;
        }
    }
//    是否记住密码，进行赋值
    function setvalue() {
        $("#name").val(getCookie('name'));
        $("#psw").val(getCookie('psw'));
    }
    //设置cookie
    function setCookie(name,value,day){
        var date = new Date();
        date.setDate(date.getDate() + day);
        document.cookie = name + '=' + value + ';expires='+ date;
    };
    //获取cookie
    function getCookie(name){
        var reg = RegExp(name+'=([^;]+)');
        var arr = document.cookie.match(reg);
        if(arr){
            return arr[1];
        }else{
            return '';
        }
    };
    //删除cookie
    function delCookie(name){
        setCookie(name,null,-1);
    };
</script>
<!--尾部-->
<div class="clear footer_wrap">
    <div class="box footer" style="width: 1200px;margin: 0 auto">
        <div class="clear footer_service">
            <ul>
                <li>
                    <div class="tit">我们</div>
                    <div class="links">
                        <a href="about_3_2.html" target="_blank">加入我们</a>
                        <a href="about_4_3.html" target="_blank">联系我们</a>
                        <a href="about_2_1.html" target="_blank">关于我们</a>
                    </div>
                </li>
                <li>
                    <div class="tit">安全保障</div>
                    <div class="links">
                        <a>极速退款</a>
                        <a>一对一服务</a>
                        <a>担保转让</a>
                    </div>
                </li>
                <li>
                    <div class="tit">帮助中心</div>
                    <div class="links">
                        <a href="<?php echo url('index/prodetail/index'); ?>">交易流程</a>
                        <a href="news_5_1.html">常见问题</a>
                        <a href="product_8_2.html">自助服务</a>
                    </div>
                </li>
                <li>
                    <div class="footer_ewm">
                        <img src="/yikehao/public/static/index/picture/1515422153_51200000.jpg"
                             style="width:110px;height:110px;margin-right: 10px">
                        <span style="margin-right: 10px;margin-top: 5px;">扫码关注微信</span>
                    </div>
                </li>
                <li style="width: 210px;">
                    <div style="display: flex;margin-top: 20px;">
                        <img src="/yikehao/public/static/index/images/phones.png"
                             style="width:30px;height:30px;margin-right: 10px">
                        <span style="color:white;font-size: 25px;">1008610086</span>
                    </div>
                    <span style="color: #7C7C7C;display: flex;padding: 10px 5px;">周一至周五 9:00-17:30</span>
                </li>
            </ul>
        </div>
        <div class="clear footer_copyright">
            公司地址:地质队顶顶顶顶订单的
            <p> <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: white;margin-top:5px;afont-size: 15px;">闽ICP备0000号-1</a></p>

        </div>
    </div>
</div>
<style>
    .footer_ewm span {
        display: inline-block;
        width: 110px;
        height: 50px;
        color: #a5a5a5;
    }
</style>
<style>
    #footer > p {
        margin-top: 0;
    }

    #footer a {
        color: #666;
    }
</style>

<style>
    .mh-hd {
        width: 143px;
        height: 135px;
        position: fixed;
        opacity: 0.9;
        left: -143px;
        bottom: 0;
        box-sizing: border-box;
        border-left: 8px solid #ffda44;
        z-index: 8;
        background: url(/yikehao/public/static/index/images/mh-fix-se.png) center center no-repeat;
        background-color: #000;
        cursor: pointer;
    }
</style>
<div class="mh-hd"><img src=""/></div>
<script>
    $(".mh-fixed").animate({left: "0"}, 1000);
    $("[mh-close]").click(function () {
        $(".mh-fixed").animate({left: "-100%"}, 1000, showmhfix);
    })
    function showmhfix() {
        $(".mh-hd").show();
        $(".mh-hd").animate({left: "0"}, 300);
    }

    $(".mh-hd").click(function () {
        $(".mh-hd").hide();
        $(".mh-hd").animate({left: "-143px"}, 100);
        $(".mh-fixed").animate({left: "0"}, 1000);

    })
</script>
</body>
</html>
          