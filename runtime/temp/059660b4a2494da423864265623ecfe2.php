<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"E:\mydemo\yikehao/application/index\view\sell\index.html";i:1546410196;s:59:"E:\mydemo\yikehao\application\index\view\common\header.html";i:1545981406;}*/ ?>
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
                <a mj-hv-sh-none href="<?php echo url('index/sell/index'); ?>" class="chooseit">卖公众号</a>
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
    .main{
        width: 900px;
        background-color: white;
        height: 1130px;
    }
    .main_right{
        width: 300px;
        background-color: white;
        margin-left: 10px;
        height: 500px;
    }
    .right_top{
        display: flex;
        align-items: center;
        justify-content: center;
        padding-right: 5px;
        margin-top: 20px;
    }
    .right_img{
        display: flex;
        margin: 5px auto;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
    }
    .right_m li{
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .right_f{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }
    .right_f li{
        list-style: none;
        float: left;
        margin-left: 5px;
    }
    .ishidden{
        display: none;
    }
</style>
<div id="location">当前位置：微信公众号交易</div>
<div class="mainbody">
    <div class="main">
        <form class="layui-form">
            <div class="layui-form-item" style="padding-top: 20px;">
                <label class="layui-form-label" style="width: 100px;">公众名称:</label>
                <div class="layui-input-inline">
                    <input type="text" id="titlename" name="titlename" lay-verify="titlename" autocomplete="off" placeholder="公众号名称" class="layui-input">
                </div>
                <label class="layui-form-label" style="width: 100px;">售价:</label>
                <div class="layui-input-inline">
                    <input type="number" id="price" name="price" lay-verify="price" autocomplete="off" placeholder="您的价格" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 100px;">粉丝数量:</label>
                <div class="layui-input-inline">
                    <input type="number" id="fsnum" name="fsnum" lay-verify="fsnum" autocomplete="off" placeholder="粉丝数量" class="layui-input">
                </div>
                <label class="layui-form-label" style="width: 100px;">注册日期</label>
                <div class="layui-input-inline">
                    <input type="text" name="dates" id="date" lay-verify="date" placeholder="年-月-日" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 100px;">账号类型:</label>
                <div class="layui-input-block">
                    <?php if(is_array($haotype) || $haotype instanceof \think\Collection || $haotype instanceof \think\Paginator): $k = 0; $__LIST__ = $haotype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k==1): ?>
                    <input type="radio" name="gztype" lay-verify="gztype" value="<?php echo $vo['htid']; ?>"  checked title="<?php echo $vo['name']; ?>">
                    <?php else: ?>
                    <input type="radio" name="gztype" lay-verify="gztype" value="<?php echo $vo['htid']; ?>" title="<?php echo $vo['name']; ?>">
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 100px;">行业分类:</label>
                <div class="layui-input-block">
                    <?php if(is_array($alltype) || $alltype instanceof \think\Collection || $alltype instanceof \think\Paginator): $k = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k==1): ?>
                    <input type="checkbox" name="hyftype" value="<?php echo $vo['tid']; ?>|<?php echo $vo['name']; ?>" checked lay-skin="primary" title="<?php echo $vo['name']; ?>">
                    <?php else: ?>
                    <input type="checkbox" name="hyftype" value="<?php echo $vo['tid']; ?>|<?php echo $vo['name']; ?>" lay-skin="primary" title="<?php echo $vo['name']; ?>">
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 100px;">认证主体:</label>
                <div class="layui-input-block">
                    <input type="radio" name="renz" checked value="0" title="未认证">
                    <input type="radio" name="renz" value="1" title="个人认证">
                    <input type="radio" name="renz" value="2" title="企业认证">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 100px;">开通原创:</label>
                <div class="layui-input-block">
                    <input type="radio" name="yuanc" checked value="0" title="未开通">
                    <input type="radio" name="yuanc" value="1" title="原创">
                    <input type="radio" name="yuanc" value="2" title="赞赏">
                    <input type="radio" name="yuanc" value="3" title="原创赞赏">

                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 100px;">粉丝偏向:</label>
                <div class="layui-input-block">
                    <input type="radio" name="fens" checked value="0" title="男女平衡">
                    <input type="radio" name="fens" value="1" title="男居多">
                    <input type="radio" name="fens" value="2" title="女居多">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 100px;">流量主:</label>
                <div class="layui-input-block" id="liulz">
                    <input type="radio" name="liul" checked value="0" title="未开通" lay-filter="liul">
                    <input type="radio" name="liul" value="1" title="已开通" lay-filter="liul">
                </div>
            </div>
            <div class="layui-form-item" style="padding-top: 20px;">
                <div class="mothget ishidden">
                    <label class="layui-form-label" style="width: 110px;">流量主月入:</label>
                    <div class="layui-input-inline">
                        <input type="text" id="liulianget" name="liulianget" lay-verify="liulianget" autocomplete="off" placeholder="0" class="layui-input">
                    </div>
                </div>

                <label class="layui-form-label" style="width: 100px;">联系方式:</label>
                <div class="layui-input-inline">
                    <input type="text" id="phone" name="phone" lay-verify="phone" value="<?php echo $uinfo['phone']; ?>" autocomplete="off" placeholder="联系方式" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" style="padding-top: 20px;">
                <label class="layui-form-label" style="width: 100px;">UV值:</label>
                <div class="layui-input-inline">
                    <input type="text" id="uv" name="uv" lay-verify="uv" autocomplete="off" placeholder="UV值" class="layui-input">
                </div>
                <label class="layui-form-label" style="width: 120px;">头条阅读数:</label>
                <div class="layui-input-inline">
                    <input type="number" id="tounum" name="tounum" lay-verify="weig" autocomplete="off" placeholder="0" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" style="padding-top: 20px;">
                <label class="layui-form-label" style="width: 100px;">封号次数:</label>
                <div class="layui-input-inline">
                    <input type="number" id="weig" name="weig" lay-verify="weig" autocomplete="off" placeholder="0" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" style="padding-top: 20px;">
                <label class="layui-form-label" style="width: 100px;">卖家描述</label>
                <div class="layui-input-block" style="margin-right: 23px;">
                    <textarea placeholder="请输入描述内容" class="layui-textarea" name="desc"></textarea>
                </div>
            </div>

            <div class="layui-form-item" style="padding-top: 20px;">

                    <div class="formControls col-xs-6 col-sm-7">
                        <div class="layui-upload col-sm-10">
                            <button type="button" class="layui-btn" id="test3" style="margin-left: 20px;">附图上传</button>
                            <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;width: 95%;margin-left: 20px;">
                                预览图：
                                <div class="layui-upload-list" id="demo3" style="height: 100px;"></div>
                            </blockquote>
                            <input type="hidden" name="gimgs" id="manyimg" value=""/>
                        </div>
                    </div>

            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit="" lay-filter="demo1" id="postinfo" style="width: 120px;">提交</button>
                </div>
            </div>
        </form>
    </div>
    <div class="main_right">
        <div class="right_top">
            <img src="/yikehao/public/static/index/images/toright.png" style="margin-right: 10px;height: 30px;">
            <span style="color: #61656C;font-size: 18px;font-weight: bold;">客服在线</span>
            <img src="/yikehao/public/static/index/images/toleft.png" style="margin-left: 10px;height: 30px;">
        </div>
        <div class="right_img">
            <img src="/yikehao/public/static/index/images/bigkf.png" width="150" height="150">
        </div>
        <div class="right_m">
            <ul>
                <li style="color: #A09D9D;font-size: 16px;font-weight:bold;margin-top: 30px;">云乐顾问</li>
                <li style="color: #61656C;font-size: 18px;font-weight: bold;margin-top: 10px;">专业公众号顾问</li>
                <li style="color: #A09D9D;font-size: 16px;font-weight:bold;margin-top: 20px;">联系电话:18315444444</li>
                <li style="height: 40px;width: 80%;padding:5px 20px;margin:10px auto;background-color: #5A72F6;"><a href="#" style="color: white">联系客服</a></li>
            </ul>
        </div>
        <div class="right_f">
            <ul>
                <li><img src="/yikehao/public/static/index/images/ht.png" width="25" height="20"><span style="margin: 2px 5px;">签署合同</span></li>
                <li><img src="/yikehao/public/static/index/images/db.png" width="25" height="20"><span style="margin: 2px 5px;">担保转让</span></li>
                <li><img src="/yikehao/public/static/index/images/sh.png" width="25" height="20"><span style="margin: 2px 5px;">贴心售后</span></li>
            </ul>
        </div>
    </div>
</div>

<script>
    function showmothget() {
        $(".mothget").removeClass('ishidden')
    }
    layui.use(['form', 'layedit', 'laydate','upload'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,upload = layui.upload
            ,laydate = layui.laydate;

        //单选事件
        form.on('radio(liul)', function (data) {
            console.log(data.elem);
            console.log(data.value);
            var item= data.value;
            if (item==1){
                showmothget();
            }else{
                $(".mothget").addClass('ishidden')
            }
        });
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
            titlename: function(value){
                if(value.length < 1){
                    return '请填写公众号名称';
                }
            },
            price: function(value){
                if(value.length < 1){
                    return '请填写价格';
                }
            },
            fsnum: function(value){
                if(value.length < 1){
                    return '请填写粉丝数量';
                }
            }
//            ,pass: [
//                /^[\S]{6,12}$/
//                ,'密码必须6到12位，且不能出现空格'
//            ]
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
           $("#postinfo").attr("disabled",true);
            var index = layer.load(0, {shade: false});
            var types=data.field.gztype;
            console.log('类型=='+types);
            var titlename=data.field.titlename;
            var price=data.field.price;
            var fsnum=data.field.fsnum;
            var dates=data.field.dates;
            var renz=data.field.renz;
            var yuanc=data.field.yuanc;
            var fens=data.field.fens;
            var liul=data.field.liul;
            var liulianget=data.field.liulianget;
            var phone=data.field.phone;
            var uv=data.field.uv;
            var tounum=data.field.tounum;
            var weig=data.field.weig;
            var desc=data.field.desc;
            var hyftype=getcheckbox();
            var imgs=data.field.gimgs;
            console.log('所选中的值=='+getcheckbox());
            $.post('',{
                zhname:titlename,
                price:price,
                fansnum:fsnum,
                regtime:dates,
                isrz:renz,
                yuanorzan:yuanc,
                sexbli:fens,
                isliu:liul,
                getmonth:liulianget,
                phone:phone,
                UV:uv,
                headernum:tounum,
                weiguinum:weig,
                desc:desc,
                fortype:hyftype,
                imgs:imgs
            },function (e) {
                layer.close(index);
                var re=JSON.parse(e);
                if(re.code==1){
                    //提交成功
                    window.location.href="<?php echo url('index/usercenter/index'); ?>"
                    layer.msg(re.msg)
                }else{
                    $("#postinfo").attr("disabled",false);
                    //提交失败
                    layer.msg(re.msg)
                }
            })
//            layer.alert(allinfo, {
//                title: '最终的提交信息'
//            })
            return false;
        });
        //多图片上传
        upload.render({
            elem: '#test3'
            ,url: "upmoreimg"
            ,multiple: true
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    // $('#demo3').append('<img src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img" style="width: 250px;height: 200px;margin-left: 20px;margin-top: 20px;">')
                });
            }
            ,done: function(res){
                //每个文件提交一次触发一次。详见“请求成功的回调”
                //alert(res);
                console.log(res);
                var newElement = "<li><img class='layui-upload-img'  src='" +res.data+
                    "' style='width:150px;height:100px;'><img class='button' src="+"/yikehao/public/static/layer/images/fancy_close.png"+"></li>";
                $("#demo3").append(newElement);
                $("img.button").last().bind("click", del);
                var $svalue=$('#manyimg').val();
                if($svalue==''){
                    $('#manyimg').val("|"+res.data);
                }else{
                    $('#manyimg').val($svalue+"|"+res.data);
                }
                console.log('打印我');

            }
        });
        //多图中的删除
        var del = function(){
            var src=$(this).siblings('img').attr('src');
            var $svalue=$('#manyimg').val();
            $.ajax({
                type: "POST", //访问WebService使用Post方式请求
                url: "delimgindex", //调用WebService的地址和方法名称组合---WsURL/方法名
                data: "src=" + src,
                success: function(data){
                    console.log(data);
                    var $val=$svalue.replace(data,'');
                    $('#manyimg').val($val);
                }
            });
            $(this).parent().remove();
        }
        function getcheckbox() {
            getres = $("input:checkbox[name='hyftype']:checked").map(function(index,elem) {
                return $(elem).val();
            }).get().join(',');
            if (getres==''){
                return ''
            }else{
                return getres
            }
        }

    });
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
    .mh-fixed {
        width: 100%;
        height: 135px;
        background: #000;
        position: fixed;
        opacity: 0.9;
        left: -100%;
        bottom: 0;
        box-sizing: border-box;
        border-left: 8px solid #ffda44;
        z-index: 8;
    }

    .mh-fixed-in {
        width: 1200px;
        margin: 0 auto;
    }

    .mx-fixed-l {
        width: 300px;
        height: 100%;
        float: left;
    }

    .mh-fixed-logo {
        display: block;
        width: 170px;

        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 2px;
    }

    .mh-fixed-tip {
        font-size: 28px;
        color: #fff100;
        text-align: center;
        font-weight: bold;
    }

    .mh-fixed-se {
        width: 77px;
        height: 135px;
        float: left;
        background: url("/yikehao/public/static/index/images/mh-fix-se.png") center center no-repeat;
    }

    .mh-fixed-input-out {
        width: 260px;
        height: 100%;
        float: left;
    }

    .mh-fixed-input-select {
        width: 80%;
        height: 36px;
        border: 2px #dedede solid;

        font-size: 18px;
        color: #666;
        text-align: center;
        line-height: 36px;
        margin: 0 auto;
        margin-left: 10%;
        margin-top: 26px;
        text-indent: 5px;
        background: url("/yikehao/public/static/index/images/xia.png") 90% center no-repeat;
        background-size: 8%;
        background-color: #fff;
        cursor: pointer;

    }

    .mh-fixed-input-total {
        width: 80%;
        margin: 0 auto;
        margin-top: 10px;
        height: 36px;
    }

    .mh-fixed-input-total-input {
        width: 60%;
        height: 100%;
        box-sizing: border-box;
        border: 1px solid #dedede;
        font-size: 15px;
        color: #999;
        float: left;
    }

    .mh-fixed-input-total-sub {
        width: 35%;
        height: 100%;
        border: 0;
        float: right;
        font-size: 18px;
        background: #fff100;
    }

    .mh-fixed-bg {
        width: 1.5px;
        height: 95px;
        margin: 20px 0 0 0;
        float: left;
        background: #fff;
    }

    .mh-fixed-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        float: left;
        margin-top: 10px;
        margin-left: 28px;
        overflow: hidden;
    }

    .mh-fixed-img img {
        width: 100%;
        height: 100%;
    }

    .mh-fixed-link {
        width: 170px;
        height: 100px;
        box-sizing: border-box;
        float: left;
        margin-left: 28px;
        padding-top: 20px;
    }

    .mh-fixed-link p, .mh-fixed-wx p {
        height: 35px;
        line-height: 35px;
        color: #fff;
        font-size: 18px;
    }

    .mh-fixed-wx p {
        text-align: center;
        margin-top: 3px;
    }

    .mh-fixed-link a {
        display: block;
        background: #f00;
        width: 65%;
        height: 35px;
        font-size: 18px;
        text-align: center;
        line-height: 35px;
        color: #fff;
    }

    .mh-fixed-wx {
        width: 160px;
        height: 100%;
        float: left;
        margin-left: 28px;
        padding-top: 10px;
        box-sizing: border-box;
    }

    .mh-fixed-wx img {
        display: block;
        width: 80px;
        height: 80px;
        margin: 0 auto;
    }

    .mh-fixed-close {
        margin-left: 5px;
        margin-right: 20px;
        float: right;
        margin-top: 50px;
        width: 40px;
        height: 40px;
        cursor: pointer;
    }

    .mh-fixed-close img {
        width: 40px;
        height: 40px;
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
          