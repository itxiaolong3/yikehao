<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"E:\mydemo\yikehao/application/index\view\productdetail\index.html";i:1546048244;s:59:"E:\mydemo\yikehao\application\index\view\common\header.html";i:1545981406;}*/ ?>
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
<script type="text/javascript" src="/yikehao/public/static/index/js/areacheck/js/city.js"></script>
</head>

<body>

<style>
    #online>div>s{
        background: url("/yikehao/public/static/index/images/kefu.png")  center center no-repeat;
        background-color:#666 ;
    }
    body > iframe{
        opacity:0;
        display:none;
    }

</style>
<div style="display: none" id="header">
    <div>
        <div>您好，欢迎来到云乐互联！
            <p><s><a class="link">联系客服</a></s><s><a>服务热线：</a><i>173-5987-2786</i></s></p>
        </div>
    </div>
    <form  method="get" >
        <div>
            <div><img onclick="gethref(this)" hc-href="/"  alt="公众号出售-公众号价格-公众号买卖-万易云公众号交易平台" src="/yikehao/public/static/index/picture/1522210272_68400000.jpg">
                <div>
                    <em>
                        <input class="hc-input" hc-title name="title" placeholder="输入您需求的关键词，如“订阅号”">
                        <input type="submit" value="搜索" class="hc-sub" style="color: #fff;padding-left: 3px;"/>
                    </em>
                    <ul>
                        <?php if(is_array($typetop) || $typetop instanceof \think\Collection || $typetop instanceof \think\Paginator): $i = 0; $__LIST__ = $typetop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><a style="color:#787878" href="<?php echo url('index/deal/index',['tid'=>$vo['tid']]); ?>" class="link"><?php echo $vo['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
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
    $("[hc-sub]").click(function(){
        var _title=$("[hc-title]").val();
        var _href="<?php echo url('index/deal/index'); ?>?title="+_title;
        window.location.href=_href;
    })
</script>
<style>
    #header2>div:first-child{
        z-index: 10;
    }
    .mh-hot{
        position: absolute;
        width: 24px;
        height: 16px;
        background: url("/yikehao/public/static/index/images/hot_icon.png") center center no-repeat;
        background-size: 100%;
        left: 61px;
        animation: hot 1s infinite linear;
        -webkit-animation: hot 1s infinite linear;
    }
    .mh-new{
        position: absolute;
        width: 24px;
        height: 16px;
        background: url("/yikehao/public/static/index/images/new_icon.png") center center no-repeat;
        background-size: 100%;
        left: 61px;
        animation: hot 1s infinite linear;
        -webkit-animation: hot 1s infinite linear;
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
<div id="header_nav2" >
    <div class="mj-hv-total"  style="position: relative;height: 70px">
        <ul>
            <li><a mj-hv-sh-none href="<?php echo url('index/index/index'); ?>" class="link">首页</a></li>
            <li style="margin:0;color: #fff;">|</li>
            <li><a mj-hv-sh href="<?php echo url('index/deal/index'); ?>" class="link chooseit">公众号转让</a></li>
            <li style="margin:0;color: #fff;">|</li>
            <li style="position: relative">
                <a mj-hv-sh-none href="<?php echo url('index/sell/index'); ?>">卖公众号</a>
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
    </div>
</div>
<script>
    function gethref(obj){
        var is_open=$(obj).attr("is-open");
        var href=$(obj).attr("hc-href");
        // console.log(href);
        if(is_open==1){
            window.open(href);
        }else{
            window.location.href=href;
        }
    }
    $("[mj-hv-sh]").mouseover(function(){
        $("[mj-cd]").show();
        console.log($("[mj-cd]").height());
    })
    $("[mj-hv-sh-none],#header2").mouseover(function(){

        $("[mj-cd]").hide();
    })
    $(".mj-cd ul").mouseleave(function(event){
        $("#header_nav2").hover(function () {
            event.preventDefault();
        })
        $("[mj-cd]").hide();

    })
    function selectFour(object, type) {
        var url = "/product_8_2.htm";
        var string = $(object).html();

        var rec = "";
        var top = "";
        var author = "";
        var exp = "";
        var email = "";
        var branch = "";

        if (type == 1) {
            author = string;
        } else if (type == 2) {
            exp = string;
        } else if (type == 3) {
            email = string;
        } else if (type == 4) {
            branch = string;
        }
        url = url + '?rec=' + rec + '&top=' + top + '&author=' + author + '&exp=' + exp + '&email=' + email + '&branch=' + branch;
        window.location.href = url;
    }
</script>
<!--主体-->
<script type="text/javascript" src="/yikehao/public/static/index/js/mediadetail.js"></script>
<link rel="stylesheet" type="text/css" href="/yikehao/public/static/index/css/mediadetail.css">
<link rel="stylesheet" type="text/css" href="/yikehao/public/static/index/css/wxmain.css">
<style>
    #alert s{
        position: relative;
    }
    #alert s table{
        margin: 0 auto;
    }
    #detail>div table{
        position: absolute;
        width: 90px;
        height:90px;
        top: 10px;
        left: 698px;
        display: none;
    }
    .mh-ct img{
        max-width: 100%;
    }
    .wemedia-xq-b *{
        -webkit-box-sizing:content-box !important;
        box-sizing: content-box;

    }
    .wemedia-xq-b a,.wemedia-xq-b li{
        font-family: 微软雅黑, Microsoft YaHei, \5FAE\8F6F\96C5\9ED1;
        font-size: 12px;
    }
    .wemedia-xq-tow-bm img{
        width: 100%;
    }
    .wemedia-xq-tow-b{
        height: auto;
    }
    @keyframes hlhot {
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

    @-webkit-keyframes hlhot {
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
    .main_right{
        width: 300px;
        background-color: white;

        height: 480px;
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
    .buyfooter{
        width: 100%;height: 200px;
        margin-top: 18px;
    }
    .buyfooter li{
        list-style: none;
        height: 50px;
    }
    /*勾选框*/
    .squaredFour {
        width: 20px;
        position: relative;

    }
    .squaredFour label {
        width: 20px;
        height: 20px;
        cursor: pointer;
        position: absolute;
        top: 0;
        left: 0;
        background: #448FF4;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -moz-box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);
        box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);
    }
    .squaredFour label:after {
        content: '';
        width: 9px;
        height: 5px;
        position: absolute;
        top: 4px;
        left: 4px;
        border: 3px solid white;
        border-top: none;
        border-right: none;
        background: transparent;
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }
    .squaredFour label:hover::after {
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
        opacity: 0.5;
    }
    .squaredFour input[type=checkbox] {
        visibility: hidden;
    }
    .squaredFour input[type=checkbox]:checked + label:after {
        filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
        opacity: 1;
    }
    /*勾选号结束*/
    .xieyi{
        width: 300px;
        display: flex;
        align-items: center;

    }
    .price{
        display: flex;
        align-items: center;
        font-size: 22px;
        color: #EA342F;
        font-weight: bold;
    }
    .bt{
        display: flex;
        align-items: flex-end;
    }
    .topay{
        width: 100px;
        height: 30px;
        background-color: #1F9EBF;
        border-radius: 5px;
        text-align: center;
        padding-top: 2px;
    }
    .topay a{
        color: whitesmoke;
        line-height: 30px;
    }
    .callkf{
        width: 100px;
        height: 30px;
        border: 1px #0c94eb solid;
        border-radius: 5px;
        text-align: center;
        margin-left: 25px;
    }
    .callkf a{
        color:#1F9EBF;
        line-height: 30px;
        font-weight: bold;
    }
    .jybz{
        width: 1130px;
        height: 70px;
        margin:1px 10px;
        line-height: 70px;
        font-weight: bold;
        font-size: 20px;
    }
    .dohidden{
        display: none;
    }
    .paymain{
        width: 1200px;
        height: 600px;
        margin: 5px auto;
        background-color: white;
    }
</style>
<div id="location">当前位置：
    <a></a> &gt; <a>微信公众号交易</a>
</div>
<div class="main">
    <div id="detail" style="display: flex;height: 55%">
        <div style="padding: 30px;">
            <div style="margin-left: 12px;">
                <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
            </div>
            <ul>
                <li><a>所属平台</a><i>微信公众号</i><a>头条阅读数</a><i>4000+</i><a>封号次数</a><i>0</i><a>注册时间</a><i style="width: 100px;">2018-10-01</i></li>
                <li><a>所属类目</a><i>电影视频</i><a>阅读UV</a><i>1%-3%</i><a>粉丝数量</a><i>16.39W+</i></li>
                <li><a>账号类型</a><i>订阅号</i><a>流量主月收入</a><i>1500</i><a>粉丝偏向</a><i>男女平衡</i></li>
                <li><a>认证状态</a><i>未认证</i><a>违规次数</a><i>0</i><a>粉丝区域</a><i>全国</i></li>
            </ul>
            <div class="buyfooter">
                <ul>
                    <span>价格</span>
                    <li class="price">￥163.000</li>
                    <li  class="xieyi">
                        <div class="squaredFour">
                            <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                            <label for="squaredFour"></label>
                        </div>
                        <span style="margin-left: 10px;margin-top: 3px;">我已阅读并同意<a onclick="showxieyi();" style="color: #69ADF0;margin-right:7px;cursor: pointer;">《云乐互联用户协议》</a></span>
                    </li>
                    <li class="bt">
                        <span class="topay"><a onclick="topay();">立即购买</a></span>
                        <span class="callkf"><a href="#">联系客服</a></span>
                        <span style="font-size: 10px;color: #565A5F;margin: 0 auto">发布时间&nbsp;2018-12-16&nbsp;09:22:45</span>
                    </li>
                </ul>
            </div>

        </div>
        <div style="width: 28%;box-shadow: none;">
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
    </div>
    <div style="margin: 0 auto;width: 1200px">
        <div class="wemedia-xq-b">
            <!--导航信息-->
            <div id="tab_fxd" class="" style="display: block;">
                <div class="tit">
                    <ul>
                        <li class="on"><span>卖家描述/截图</span></li>
                    </ul>
                </div>
            </div>
            <!--内容信息-->
            <div class="sectionBox">
                <div class="section">
                    <div class="wemedia-xq-b-a">
                        <div class="wemedia-xq-b-aa">
                            <div class="wemedia-xq-b-aaa">
                                <div class="wemedia-xq-b-aaal"></div>
                                <div class="wemedia-xq-b-aaar"></div>
                            </div>
                            <div class="wemedia-xq-b-aae">厦门本地号出售，1.7w+粉丝，精准厦门本地粉，0违规，开通原创评论功能，特此出售</div>
                            <div class="wemedia-xq-b-aac">
                                <div class="wemedia-xq-b-aacl"></div>
                                <div class="wemedia-xq-b-aacr"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="wemedia-xq-tow">
                        <div class="wemedia-xq-tow-a">
                            <div class="wemedia-xq-tow-al">账号截图展示</div>

                        </div>
                        <div class="wemedia-xq-tow-b">
                            <div class="wemedia-xq-tow-bl"></div>
                            <div class="wemedia-xq-tow-bm">
                                <p><img src="/yikehao/public/static/index/picture/1535367318304665.jpg" style="" title="1535367318304665.jpg"/><br/></p><hr/><p><img src="/yikehao/public/static/index/picture/1535367318117932.jpg" style="" title="1535367318117932.jpg"/><br/></p><hr/><p><img src="/yikehao/public/static/index/picture/1535367318539042.jpg" style="" title="1535367318539042.jpg"/><br/></p><hr/><p><img src="/yikehao/public/static/index/picture/1535367318313702.jpg" style="" title="1535367318313702.jpg"/><br/></p><hr/><p><img src="/yikehao/public/static/index/picture/1535367318182848.jpg" style="" title="1535367318182848.jpg"/><br/></p><p><br/></p>                        </div>
                            <div class="wemedia-xq-tow-br"></div>
                        </div>

                    </div>
                </div>

                <div class="section">
                    <div class="jybz">交易步骤</div>
                    <div class="wemedia-xq-three">
                        <div class="wemedia-xq-three-a">
                            <ul>
                                <li>
                                    <div class="wemedia-xq-three-a-a">
                                        <div class="wemedia-xq-three-a-a-01">
                                            <img src="/yikehao/public/static/index/images/jy01.png"width="100" height="100">
                                            <img src="/yikehao/public/static/index/images/lcr.png"width="80" height="30" style="padding-left: 20px;">
                                        </div>
                                        <div class="wemedia-xq-three-a-ab">交易达成一致</div>
                                    </div>
                                </li>
                                <li><div class="wemedia-xq-three-a-b"></div></li>
                                <li>
                                    <div class="wemedia-xq-three-a-a">
                                        <div class="wemedia-xq-three-a-a-02" >
                                            <img src="/yikehao/public/static/index/images/jy02.png"width="100" height="100">
                                            <img src="/yikehao/public/static/index/images/lcr.png"width="80" height="30" style="padding-left: 20px;">
                                        </div>
                                        <div class="wemedia-xq-three-a-ab">下单买方支付款项</div>
                                    </div>
                                </li>
                                <li><div class="wemedia-xq-three-a-b"></div></li>
                                <li>
                                    <div class="wemedia-xq-three-a-a">
                                        <div class="wemedia-xq-three-a-a-03">
                                            <img src="/yikehao/public/static/index/images/jy03.png"width="100" height="100">
                                            <img src="/yikehao/public/static/index/images/lcr.png"width="80" height="30" style="padding-left: 20px;">
                                        </div>
                                        <div class="wemedia-xq-three-a-ab">卖方给买方发货</div>
                                    </div>
                                </li>
                                <li><div class="wemedia-xq-three-a-b"></div></li>
                                <li>
                                    <div class="wemedia-xq-three-a-a">
                                        <div class="wemedia-xq-three-a-a-04">
                                            <img src="/yikehao/public/static/index/images/jy04.png"width="100" height="100">
                                            <img src="/yikehao/public/static/index/images/lcr.png"width="80" height="30" style="padding-left: 20px;">
                                        </div>
                                        <div class="wemedia-xq-three-a-ab">买方确认物品</div>
                                    </div>
                                </li>
                                <li><div class="wemedia-xq-three-a-b"></div></li>
                                <li>
                                    <div class="wemedia-xq-three-a-a">
                                        <div class="wemedia-xq-three-a-a-05">
                                            <img src="/yikehao/public/static/index/images/jy05.png"width="100" height="100">
                                        </div>
                                        <div class="wemedia-xq-three-a-ab">买方将收益项支付给卖方</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="paymain">
这里开始你的表演
</div>

<script>
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;
    })
    function showxieyi() {
        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['420px', '240px'], //宽高
            content: 'html内容'
        });
    }
    showmain();
    function topay() {
        showpay();
    }
    function showpay() {
        $('.paymain').removeClass('dohidden');
        $('.main').addClass('dohidden');
    }
    function showmain() {
        $('.paymain').addClass('dohidden');
        $('.main').removeClass('dohidden');
    }
    
</script>
<script src="/yikehao/public/static/index/js/jquery.qrcode.min.js"></script>
<script src="/yikehao/public/static/index/js/space_show.js"></script>
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
    .footer_ewm span{
        display: inline-block; width:110px;height:50px;color: #a5a5a5;
    }
</style>
<style>
    #footer>p{
        margin-top: 0;
    }
    #footer a{
        color: #666;
    }
</style>
<style>
    .mh-fixed{
        width: 100%;
        height: 135px;
        background: #000;
        position: fixed;
        opacity: 0.9;
        left: -100%;
        bottom: 0;
        box-sizing: border-box;
        border-left:8px solid #ffda44;
        z-index: 8;
    }
    .mh-fixed-in{
        width: 1200px;
        margin: 0 auto;
    }
    .mx-fixed-l{
        width: 300px;
        height: 100%;
        float: left;
    }
    .mh-fixed-logo{
        display: block;
        width: 170px;

        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 2px;
    }
    .mh-fixed-tip{
        font-size: 28px;
        color: #fff100;
        text-align: center;
        font-weight: bold;
    }
    .mh-fixed-se{
        width: 77px;
        height: 135px;
        float: left;
        background: url("/yikehao/public/static/index/images/mh-fix-se.png") center center no-repeat;
    }
    .mh-fixed-input-out{
        width: 260px;
        height: 100%;
        float: left;
    }
    .mh-fixed-input-select{
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
    .mh-fixed-input-total{
        width: 80%;
        margin: 0 auto;
        margin-top: 10px;
        height: 36px;
    }
    .mh-fixed-input-total-input{
        width: 60%;
        height: 100%;
        box-sizing: border-box;
        border: 1px solid #dedede;
        font-size: 15px;
        color: #999;
        float: left;
    }
    .mh-fixed-input-total-sub{
        width: 35%;
        height: 100%;
        border: 0;
        float: right;
        font-size: 18px;
        background:#fff100 ;
    }
    .mh-fixed-bg{
        width: 1.5px;
        height: 95px;
        margin: 20px 0 0 0;
        float: left;
        background: #fff;
    }
    .mh-fixed-img{
        width: 120px;
        height: 120px;
        border-radius: 50%;
        float: left;
        margin-top: 10px;
        margin-left: 28px;
        overflow: hidden;
    }
    .mh-fixed-img img{
        width: 100%;
        height: 100%;
    }
    .mh-fixed-link{
        width: 170px;
        height: 100px;
        box-sizing: border-box;
        float: left;
        margin-left: 28px;
        padding-top: 20px;
    }
    .mh-fixed-link p,.mh-fixed-wx p{
        height: 35px;
        line-height: 35px;
        color: #fff;
        font-size: 18px;
    }
    .mh-fixed-wx p{
        text-align: center;
        margin-top: 3px;
    }
    .mh-fixed-link a{
        display: block;
        background: #f00;
        width: 65%;
        height: 35px;
        font-size: 18px;
        text-align: center;
        line-height: 35px;
        color: #fff;
    }
    .mh-fixed-wx{
        width: 160px;
        height: 100%;
        float: left;
        margin-left: 28px;
        padding-top: 10px;
        box-sizing: border-box;
    }
    .mh-fixed-wx img{
        display: block;
        width: 80px;
        height: 80px;
        margin: 0 auto;
    }
    .mh-fixed-close{
        margin-left: 5px;
        margin-right: 20px;
        float: right;
        margin-top: 50px;
        width: 40px;
        height: 40px;
        cursor: pointer;
    }
    .mh-fixed-close img{
        width: 40px;
        height: 40px;
    }
</style>
<style>
    .mh-hd{
        width: 143px;
        height: 135px;
        position: fixed;
        opacity: 0.9;
        left: -143px;
        bottom: 0;
        box-sizing: border-box;
        border-left:8px solid #ffda44;
        z-index: 8;
        background: url(/yikehao/public/static/index/images/mh-fix-se.png) center center no-repeat;
        background-color: #000;
        cursor: pointer;
    }
</style>
</body>
</html>
          