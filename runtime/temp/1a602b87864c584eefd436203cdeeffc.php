<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"H:\Phpdemo\yikehao/application/index\view\index\index.html";i:1546513054;s:60:"H:\Phpdemo\yikehao\application\index\view\common\header.html";i:1545981406;}*/ ?>
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
        <div style="margin: 0 auto;width: 1200px;position: relative">您好&nbsp;<?php echo $uinfo['username']; ?>，欢迎来到云乐互联！
            <?php if(!(empty($uinfo) || (($uinfo instanceof \think\Collection || $uinfo instanceof \think\Paginator ) && $uinfo->isEmpty()))): ?>
            <span onclick="loginout();" style="cursor: pointer;">【退出】</span>
            <?php endif; ?>

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
            <li><a mj-hv-sh-none href="" class="link chooseit">首页</a></li>
            <li style="margin:0;color: #fff;">|</li>
            <li><a mj-hv-sh href="<?php echo url('index/deal/index'); ?>" class="link">公众号转让</a></li>
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
    .mh-index-l {
        width: 200px;
        height: 400px;
        background: #fff;
        float: left;
        margin-right: 15px;
    }

    .mh-index-l-p {
        height: 40px;
        line-height: 40px;
        color: #000;
        text-align: center;
        font-size: 14px;
    }

    .mh-index-l-a {
        width: 120px;
        height: 32px;
        font-size: 14px;
        line-height: 32px;
        text-align: center;
        color: #35A7C5;
        display: block;
        border: 1px solid #35A7C5;
        border-radius: 50px;
        margin: 0 auto;
        transition: 0.3s all;
    }

    .mh-index-l-a:hover {
        background: #35A7C5;
        color: #fff;
    }

    .mh-index-l-li {
        width: 90%;
        height: 62px;
        border-bottom: 1px dashed #a0a0a0;
        margin: 0 auto;
        box-sizing: border-box;
        padding-top: 9px;
        /*padding-left: 40px;*/
    }

    .mh-index-l-li-pone {
        height: 25px;
        line-height: 25px;
        text-align: center;
        color: #000;
        font-size: 16px;
    }

    .mh-index-l-li-ptwo {
        height: 20px;
        line-height: 20px;
        text-align: center;
        color: #000;
        font-size: 12px;
    }

    .mh-index-l-li-bgone {
        background: url("/yikehao/public/static/index/images/mh-index-bg1.png") 10px center no-repeat;
        background-size: 12%
    }

    .mh-index-l-li-bgtwo {
        background: url("/yikehao/public/static/index/images/mh-index-bg2.png") 10px center no-repeat;
        background-size: 12%
    }

    .mh-index-l-li-bgthree {
        background: url("/yikehao/public/static/index/images/mh-index-bg3.png") 10px center no-repeat;
        background-size: 12%
    }

    .w1190 .idle-start {
        width: 288px;
    }


    .idle-start .extend {
        height: 120px;
        background-color: #eee;
    }

    .idle-start .extend .mod {
        float: left;
        width: 144px;
        height: 125px;
    }

    .idle-start .extend .mod a:hover {
        transform: scale(1.1);

    }

    .idle-start .extend .mod a {
        display: block;
        padding: 30px 0 23px 0;
        width: 121px;
        height: 110px;
        box-sizing: border-box;
        border: 1px solid #efefef;
        margin-left: 16px;
        margin-top: 10px;
        text-align: center;
        background-color: #fff;
        cursor: pointer;
        position: relative;
        transition: 0.3s all;
    }

    .idle-start .extend .mod a .main-title {
        display: inline-block;
        padding-right: 20px;
        margin-bottom: 5px;
        font-size: 18px;
        font-weight: 700;
        color: #333;
        background: url(/yikehao/public/static/index/images/tb1aboiixxxxxxlxfxxiedv.pxx-90-199.png) no-repeat 85px -99px;
    }

    .idle-start .extend .mod a .subtitle {
        display: block;
        color: #999;
    }

    .idle-start .extend .right a {
        margin-right: 9px;
        margin-left: 5px;
    }

</style>
<div class="mh-id" style="width:100%;height:52%;display: flex;justify-content: center; margin: 0 auto;">
    <div style="width:100%;float: left;overflow: hidden">
        <div class="banner swiper-container">
            <ul class="swiper-wrapper">
                <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li style="height: 100%;width: 1800px;" class="swiper-slide">
                    <a href="javascript:void(0);" onclick="window.open('<?php echo $vo['tourl']; ?>');" target="_blank"><img
                            style="height: auto;width: 100%;" src="<?php echo $vo['imgs']; ?>"/></a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <!--<div class="swiper-pagination"></div>-->
        </div>
        <script>
            var swiper = new Swiper('.banner', {
                pagination: '.banner .swiper-pagination',
                paginationClickable: true,
                autoplay: 5000,
                height:600,
                slidesPerView: 'auto',
                autoplayDisableOnInteraction: false
            });
        </script>
    </div>
</div>
<div class="mh-index-l" style="z-index:3;position: absolute;top: 194px;right: 20%;">
    <p class="mh-index-l-p">hi，欢迎来到云乐互联</p>
    <?php if(empty($uinfo) || (($uinfo instanceof \think\Collection || $uinfo instanceof \think\Paginator ) && $uinfo->isEmpty())): ?>
    <a class="mh-index-l-a"  href="<?php echo url('/login'); ?>">立即登录/注册</a>
    <?php else: ?>
    <a class="mh-index-l-a"  href="<?php echo url('index/usercenter/index'); ?>">个人中心</a>
    <?php endif; ?>
    <div class="mh-index-l-li mh-index-l-li-bgone">
        <p class="mh-index-l-li-pone">资金保障</p>
        <p class="mh-index-l-li-ptwo">交易时担保资金安全</p>
    </div>
    <div class="mh-index-l-li mh-index-l-li-bgtwo">
        <p class="mh-index-l-li-pone">交易保障</p>
        <p class="mh-index-l-li-ptwo">描述不符全额退款</p>
    </div>
    <div class="mh-index-l-li mh-index-l-li-bgthree" style="border: 0">
        <p class="mh-index-l-li-pone">安全保障</p>
        <p class="mh-index-l-li-ptwo">交易时签署法律合同</p>
    </div>
    <div style="display: flex;justify-content: center;">
        <img src="/yikehao/public/static/index/picture/1515421962_5887500.jpg" width="120" height="120">
    </div>
</div>

<style>
    .Zx-group {
        width: 23%;
        height: 110px;
        padding: 0 1.5%;
        padding-top: 5px;
        float: left;
    }

    .Zx-group p a {
        display: block;
        width: 100%;
        line-height: 20px;
        height: 30px;
        overflow: hidden;
        font-size: 18px;
        font-weight: bold;
        color: #4c4c4c;
    }

    .Zx-group li:nth-of-type(1) {
        width: 130px;
    }

    .Zx-group li:nth-of-type(2) {
        width: 98px;
    }

    .Zx-group li:nth-of-type(3) {
        width: auto;
    }

    .Zx-group li {
        overflow: hidden;
        float: left;
        color: #999999;
        font-size: 14px;
        text-align: left;
    }

    .Zx-group li span {
        display: block;
        color: #fa3535;
    }

    .CK_xq {
        display: block;
        width: 90px;
        height: 30px;
        line-height: 30px;
        border: 1px solid #fa3535;
        color: #fa3535;
        text-align: center;
    }

    .hc-gd-big {
        width: 1200px;
        margin: 0 auto;
        height: 145px;
        background: #fff;
        margin-top: 20px;
        overflow: hidden;
        padding-top: 20px;
    }

    .hc-gd {
        overflow: hidden;
        width: 100%;
        height: 110px;
        margin-left: 100px;
    }

    .hc-gd-big-p {
        font-size: 16px;
        color: #417BC7;
        font-weight: bold;
        padding-bottom: 18px;
        padding-left: 15px;
        display: flex;

    }

    .hc-gd-ul {
        width: 100%;
        height: auto;
    }

    .hc-gd-ul-span {
        width: 0.2%;
        height: 50px;
        float: left;
        background: #000;
        margin-top: 5px;
    }
</style>
<div class="hc-gd-big">
    <div class="hc-gd-big-p">
    交易动态:
    <div class="myscoll" style="margin-left: 20px;color: #B6B6BA; width:80%;height: 25px;display: inline;overflow: hidden;" >
        <ul>
            <li style="color: darkgrey;" >
                <span>我是内容1</span>
            </li>
            <li style="color: darkgrey;" >
                <span>我是内容2</span>
            </li>
            <li style="color: darkgrey;" >
                <span>我是内容3</span>
            </li>
            <li style="color: darkgrey;" >
                <span>我是内容4</span>
            </li>

        </ul>
        <script>
            function AutoScroll2(obj) {
                $(obj).find("ul").animate({
                    marginTop: "-10px"
                }, 2000, function() {
                    $(this).css({
                        marginTop: "6px"
                    }).find("li:first").appendTo(this);
                });
            }
            setInterval('AutoScroll2(".myscoll")', 2000)
        </script>
    </div>
</div>
    <p style="border-top: 1px #E8E8E8 solid;padding-bottom: 10px;"></p>
    <div class="hc-gd">
        <div class="hc-gd-ul">
            <ul hc-gd-ul>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>2天前&nbsp;</span>长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥455555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>3天前&nbsp;</span>深圳***公司</a>
                    </p>
                    <p><span style="color: red;">以￥100555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>6天前&nbsp;</span>长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥655555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>六天前&nbsp;</span>长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥455555元购买了</span></p>
                </div>

            </ul>
            <ul hc-gd-ul>
                <div class="Zx-group">
                    <p >
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>2天前&nbsp;</span>2长沙***公司</a>
                    </p>
                    <p><span style="color: red;">2以￥455555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>3天前&nbsp;</span>2深圳***公司</a>
                    </p>
                    <p><span style="color: red;">2以￥100555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>6天前&nbsp;</span>2长沙***公司</a>
                    </p>
                    <p><span style="color: red;">2以￥655555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>六天前&nbsp;</span>长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥455555元购买了</span></p>
                </div>

            </ul>
            <ul hc-gd-ul>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>2天前&nbsp;</span>3长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥455555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>3天前&nbsp;</span>3深圳***公司</a>
                    </p>
                    <p><span style="color: red;">以￥100555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>6天前&nbsp;</span>长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥655555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>六天前&nbsp;</span>长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥455555元购买了</span></p>
                </div>

            </ul>
            <ul hc-gd-ul>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>2天前&nbsp;</span>4长沙***公司</a>
                    </p>
                    <p><span style="color: red;">4以￥455555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>3天前&nbsp;</span>深圳***公司</a>
                    </p>
                    <p><span style="color: red;">以￥100555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>6天前&nbsp;</span>4长沙***公司</a>
                    </p>
                    <p><span style="color: red;">4以￥655555元购买了</span></p>
                </div>
                <div class="hc-gd-ul-span"></div>
                <div class="Zx-group">
                    <p>
                        <a target="_blank" href="<?php echo url('index/productdetail/index'); ?>"><span>六天前&nbsp;</span>长沙***公司</a>
                    </p>
                    <p><span style="color: red;">以￥455555元购买了</span></p>
                </div>

            </ul>

        </div>
    </div>
</div>
<script>
    function AutoScroll(obj) {
        $(obj).find(".hc-gd-ul").animate({
                marginTop: "-110px"
            },
            2000,
            function () {
                $(this).css({
                    marginTop: "0px"
                }).find("ul:first").appendTo(this);
            });
    }
    setInterval('AutoScroll(".hc-gd")', 3000)
</script>
<!--优品推荐-->
<style>
    .goodtj{
        margin: 0 auto;
        width: 100%;
        height: 120px;
    }
    .goodtj_1{
        height: 120px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<div class="goodtj">
    <div class="goodtj_1">
        <span style="color:#33302C;font-size:25px;font-weight:bold;padding: 4px 0">优品推荐</span>
        <span style="display:flex;padding: 5px 0;font-family: 隶书;font-size: 14px;color: darkgrey;">SUPERIOR&nbsp;PRODUCT&nbsp;RECOMMENDATION</span>
        <span style="display:flex;padding: 4px 0">
            <label style="border: 1px #AFB1B3 solid;width: 15px;height: 1px;"></label>
            <label style="border: 1px #AFB1B3 solid;width: 15px;height: 1px;margin-left: 5px;"></label>
            <label style="border: 1px #AFB1B3 solid;width: 15px;height: 1px;margin-left: 5px;"></label>
        </span>
        <span style="color: darkgrey;font-size: 14px;">优质账号官方推荐</span>
    </div>
</div>
<div id="wechat" class="media_lists">
    <ul>
        <li>
            <div style="height: 35%;margin-top: 5px;padding-left: 10px;">
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                    <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
                </span>
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/z.png" width="25" height="25">
                    <label style="margin-left: 8px;line-height: 25px;font-size: 13px;color: #999999;">所属行业:【教育】</label>
                </span>
                <span style="color: #F94C4C;font-size: 18px;padding: 10px;font-weight:bold;display:
                 flex;flex-direction: column;align-items: flex-start;">￥10000</span>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">公众号类型</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">订阅号</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝数量</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.5W+</span>
                </div>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">男女比例</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">61%</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝单价</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.00元/粉</span>
                </div>
            </div>
            <div style="border-top: 1px #F0F0F2 solid;height: 25%;padding-left: 10px;display: flex;">
                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/kf.png" width="20" height="20">
                    <a href="#" style="color: #ABA1D9;font-size:16px;font-weight:bold;margin-left: 15px;">咨询顾问</a>
                    <span style="color: #F0F0F2;margin-left: 35px;">|</span>
                </div>

                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/xx.png" width="20" height="20">
                    <a href="productdetail" style="color: #BCBECA;font-size:16px;font-weight:bold;margin-left: 15px;">查看详细</a>
                </div>
            </div>
        </li>
        <li>
            <div style="height: 35%;margin-top: 5px;padding-left: 10px;">
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                    <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
                </span>
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/z.png" width="25" height="25">
                    <label style="margin-left: 8px;line-height: 25px;font-size: 13px;color: #999999;">所属行业:【教育】</label>
                </span>
                <span style="color: #F94C4C;font-size: 18px;padding: 10px;font-weight:bold;display:
                 flex;flex-direction: column;align-items: flex-start;">￥10000</span>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">公众号类型</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">订阅号</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝数量</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.5W+</span>
                </div>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">男女比例</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">61%</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝单价</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.00元/粉</span>
                </div>
            </div>
            <div style="border-top: 1px #F0F0F2 solid;height: 25%;padding-left: 10px;display: flex;">
                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/kf.png" width="20" height="20">
                    <a href="#" style="color: #ABA1D9;font-size:16px;font-weight:bold;margin-left: 15px;">咨询顾问</a>
                    <span style="color: #F0F0F2;margin-left: 35px;">|</span>
                </div>

                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/xx.png" width="20" height="20">
                    <a href="productdetail" style="color: #BCBECA;font-size:16px;font-weight:bold;margin-left: 15px;">查看详细</a>
                </div>
            </div>
        </li>
        <li>
            <div style="height: 35%;margin-top: 5px;padding-left: 10px;">
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                    <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
                </span>
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/z.png" width="25" height="25">
                    <label style="margin-left: 8px;line-height: 25px;font-size: 13px;color: #999999;">所属行业:【教育】</label>
                </span>
                <span style="color: #F94C4C;font-size: 18px;padding: 10px;font-weight:bold;display:
                 flex;flex-direction: column;align-items: flex-start;">￥10000</span>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">公众号类型</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">订阅号</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝数量</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.5W+</span>
                </div>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">男女比例</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">61%</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝单价</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.00元/粉</span>
                </div>
            </div>
            <div style="border-top: 1px #F0F0F2 solid;height: 25%;padding-left: 10px;display: flex;">
                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/kf.png" width="20" height="20">
                    <a href="#" style="color: #ABA1D9;font-size:16px;font-weight:bold;margin-left: 15px;">咨询顾问</a>
                    <span style="color: #F0F0F2;margin-left: 35px;">|</span>
                </div>

                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/xx.png" width="20" height="20">
                    <a href="#" style="color: #BCBECA;font-size:16px;font-weight:bold;margin-left: 15px;">查看详细</a>
                </div>
            </div>
        </li>
        <li>
            <div style="height: 35%;margin-top: 5px;padding-left: 10px;">
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                    <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
                </span>
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/z.png" width="25" height="25">
                    <label style="margin-left: 8px;line-height: 25px;font-size: 13px;color: #999999;">所属行业:【教育】</label>
                </span>
                <span style="color: #F94C4C;font-size: 18px;padding: 10px;font-weight:bold;display:
                 flex;flex-direction: column;align-items: flex-start;">￥10000</span>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">公众号类型</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">订阅号</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝数量</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.5W+</span>
                </div>
            </div>
            <div style="height: 20%;display: flex;padding-left: 10px;">
                <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">男女比例</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">61%</span>
                </div>
                <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                    <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝单价</span>
                    <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.00元/粉</span>
                </div>
            </div>
            <div style="border-top: 1px #F0F0F2 solid;height: 25%;padding-left: 10px;display: flex;">
                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/kf.png" width="20" height="20">
                    <a href="#" style="color: #ABA1D9;font-size:16px;font-weight:bold;margin-left: 15px;">咨询顾问</a>
                    <span style="color: #F0F0F2;margin-left: 35px;">|</span>
                </div>

                <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                    <img src="/yikehao/public/static/index/images/xx.png" width="20" height="20">
                    <a href="#" style="color: #BCBECA;font-size:16px;font-weight:bold;margin-left: 15px;">查看详细</a>
                </div>
            </div>
        </li>
    </ul>
</div>
<div id="jiaoyi">
    <div class="jiaoyi_left">
        <a href=""><img src="/yikehao/public/static/index/images/gzh.jpg" width="285"></a>
    </div>
    <div class="jiaoyi_right">
        <div class="jiaoyi_right_top">
            <div class="jy_right_topp_l">
                <ul>
                    <li><a href="a">幽默搞笑</a></li>
                    <li><a href="a">本地生活</a></li>
                    <li><a href="a">情感杂谈</a></li>
                    <li><a href="a">商业财经</a></li>
                    <li><a href="a">影音视听</a></li>
                    <li><a href="a">明星八卦</a></li>
                </ul>
            </div>
            <div class="jy_right_topp_r">
                <a href="#"><span class="jy_r_t_rspan">发现更多</span></a>
            </div>
        </div>
        <div class="jiaoyi_right_md">
            <ul>
                <li>
                    <div style="height: 35%;margin-top: 5px;padding-left: 10px;">
                        <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                            <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                            <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
                        </span>
                        <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                        <img src="/yikehao/public/static/index/images/z.png" width="25" height="25">
                        <label style="margin-left: 8px;line-height: 25px;font-size: 13px;color: #999999;">所属行业:【教育】</label>
                        </span>
                        <span style="color: #F94C4C;font-size: 18px;padding: 10px;font-weight:bold;display:
                            flex;flex-direction: column;align-items: flex-start;">￥10000</span>
                    </div>
                    <div style="height: 20%;display: flex;padding-left: 10px;">
                        <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">公众号类型</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">订阅号</span>
                        </div>
                        <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝数量</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.5W+</span>
                        </div>
                    </div>
                    <div style="height: 20%;display: flex;padding-left: 10px;">
                        <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">男女比例</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">61%</span>
                        </div>
                        <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝单价</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.00元/粉</span>
                        </div>
                    </div>
                    <div style="border-top: 1px #F0F0F2 solid;height: 25%;padding-left: 10px;display: flex;">
                        <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                            <img src="/yikehao/public/static/index/images/kf.png" width="20" height="20">
                            <a href="#" style="color: #ABA1D9;font-size:16px;font-weight:bold;margin-left: 15px;">咨询顾问</a>
                            <span style="color: #F0F0F2;margin-left: 35px;">|</span>
                        </div>

                        <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                            <img src="/yikehao/public/static/index/images/xx.png" width="20" height="20">
                            <a href="productdetail" style="color: #BCBECA;font-size:16px;font-weight:bold;margin-left: 15px;">查看详细</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div style="height: 35%;margin-top: 5px;padding-left: 10px;">
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                    <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
                </span>
                        <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/z.png" width="25" height="25">
                    <label style="margin-left: 8px;line-height: 25px;font-size: 13px;color: #999999;">所属行业:【教育】</label>
                </span>
                        <span style="color: #F94C4C;font-size: 18px;padding: 10px;font-weight:bold;display:
                 flex;flex-direction: column;align-items: flex-start;">￥10000</span>
                    </div>
                    <div style="height: 20%;display: flex;padding-left: 10px;">
                        <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">公众号类型</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">订阅号</span>
                        </div>
                        <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝数量</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.5W+</span>
                        </div>
                    </div>
                    <div style="height: 20%;display: flex;padding-left: 10px;">
                        <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">男女比例</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">61%</span>
                        </div>
                        <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝单价</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.00元/粉</span>
                        </div>
                    </div>
                    <div style="border-top: 1px #F0F0F2 solid;height: 25%;padding-left: 10px;display: flex;">
                        <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                            <img src="/yikehao/public/static/index/images/kf.png" width="20" height="20">
                            <a href="#" style="color: #ABA1D9;font-size:16px;font-weight:bold;margin-left: 15px;">咨询顾问</a>
                            <span style="color: #F0F0F2;margin-left: 35px;">|</span>
                        </div>

                        <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                            <img src="/yikehao/public/static/index/images/xx.png" width="20" height="20">
                            <a href="#" style="color: #BCBECA;font-size:16px;font-weight:bold;margin-left: 15px;">查看详细</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div style="height: 35%;margin-top: 5px;padding-left: 10px;">
                <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/wx.png" width="25" height="25">
                    <label style="color: #363733;font-weight:bold;font-size: 17px;margin-left: 8px;line-height: 25px;">我是标题标题标题标题</label>
                </span>
                        <span style="display: flex;align-items: center;height: 30%;padding: 8px;">
                    <img src="/yikehao/public/static/index/images/z.png" width="25" height="25">
                    <label style="margin-left: 8px;line-height: 25px;font-size: 13px;color: #999999;">所属行业:【教育】</label>
                </span>
                        <span style="color: #F94C4C;font-size: 18px;padding: 10px;font-weight:bold;display:
                 flex;flex-direction: column;align-items: flex-start;">￥10000</span>
                    </div>
                    <div style="height: 20%;display: flex;padding-left: 10px;">
                        <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">公众号类型</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">订阅号</span>
                        </div>
                        <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝数量</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.5W+</span>
                        </div>
                    </div>
                    <div style="height: 20%;display: flex;padding-left: 10px;">
                        <div style="border-top: 1px #F0F0F2 solid;border-right: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content: flex-start;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 10px;">男女比例</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 10px;">61%</span>
                        </div>
                        <div style="border-top: 1px #F0F0F2 solid;width:50%;display: flex;flex-direction: column;align-content:center;justify-content: center;">
                            <span style="color: #B1B1B1;font-size: 10px;padding: 4px 18px;">粉丝单价</span>
                            <span style="color: #505155;font-size: 15px;font-weight:bold;padding: 4px 18px;">1.00元/粉</span>
                        </div>
                    </div>
                    <div style="border-top: 1px #F0F0F2 solid;height: 25%;padding-left: 10px;display: flex;">
                        <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                            <img src="/yikehao/public/static/index/images/kf.png" width="20" height="20">
                            <a href="#" style="color: #ABA1D9;font-size:16px;font-weight:bold;margin-left: 15px;">咨询顾问</a>
                            <span style="color: #F0F0F2;margin-left: 35px;">|</span>
                        </div>

                        <div style="width: 50%;display: flex;justify-content: center;align-items: center;">
                            <img src="/yikehao/public/static/index/images/xx.png" width="20" height="20">
                            <a href="#" style="color: #BCBECA;font-size:16px;font-weight:bold;margin-left: 15px;">查看详细</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--行业新闻-->
<style>
    .newslist{
        margin: 0 auto;
        width: 100%;
        height: 100px;
    }
    .newslist_l{
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .ishidden{
        display: none;
    }
    .fontnum li{
        display:block;
        overflow:hidden;
        word-break:keep-all;
        white-space:nowrap;
        text-overflow:ellipsis;
    }
</style>
<div class="newslist">
    <div class="newslist_l">
        <span style="color:#33302C;font-size:25px;font-weight:bold;padding: 4px 0">行业新闻</span>
        <span style="display:flex;padding: 5px 0;font-family: 隶书;font-size: 14px;color: darkgrey;">INDUSTRY&nbsp;NEWS</span>
        <span style="display:flex;padding: 4px 0">
            <label style="border: 1px #AFB1B3 solid;width: 12px;height: 1px;"></label>
            <label style="border: 1px #AFB1B3 solid;width: 12px;height: 1px;margin-left: 5px;"></label>
            <label style="border: 1px #AFB1B3 solid;width: 12px;height: 1px;margin-left: 5px;"></label>
        </span>
    </div>
</div>
<aside class="news">
    <div class="news_left">
        <div class="news_left_top">
            <span class="n_l_t_span1 select">业内咨询</span>
            <span class="n_l_t_span2">交易动态</span>
            <span style="width: 70%;border-bottom: 2px #F0F0F2 solid;"></span>
        </div>
        <div class="news_left_md" id="probtwo">
            <ul>
                <?php if(is_array($gettowprob) || $gettowprob instanceof \think\Collection || $gettowprob instanceof \think\Paginator): $i = 0; $__LIST__ = $gettowprob;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="md_li" hc-href="<?php echo url('index/prodetail/index',['id'=>$vo['id']]); ?>">
                        <img src="<?php echo $vo['titleimg']; ?>" width="120px" height="120px">
                        <div class="md_li_div">
                            <span class="md_li_div_title"><?php echo $vo['title']; ?></span>
                            <span class="md_li_div_desc"><?php echo $vo['desc']; ?></span>
                            <span class="md_li_div_time"><?php echo $vo['addtime']; ?></span>
                        </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="news_left_foot" id="prob">
            <ul>
                <?php if(is_array($problist) || $problist instanceof \think\Collection || $problist instanceof \think\Paginator): $i = 0; $__LIST__ = $problist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li hc-href="<?php echo url('index/prodetail/index',['id'=>$vo['id']]); ?>">
                    <span class="span_title"><?php echo $vo['title']; ?></span>
                    <span class="span_time"><?php echo $vo['addtime']; ?></span>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="news_left_md" id="newtwo">
            <ul>
                <?php if(is_array($gettownew) || $gettownew instanceof \think\Collection || $gettownew instanceof \think\Paginator): $i = 0; $__LIST__ = $gettownew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="md_li" hc-href="<?php echo url('index/newdetail/index',['id'=>$vo['id']]); ?>">
                    <img src="<?php echo $vo['titleimg']; ?>" width="120px" height="120px">
                    <div class="md_li_div">
                        <span class="md_li_div_title"><?php echo $vo['title']; ?></span>
                        <span class="md_li_div_desc"><?php echo $vo['desc']; ?></span>
                        <span class="md_li_div_time"><?php echo $vo['addtime']; ?></span>
                    </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="news_left_foot" id="newss">
            <ul>
                <?php if(is_array($newslist) || $newslist instanceof \think\Collection || $newslist instanceof \think\Paginator): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li hc-href="<?php echo url('index/newdetail/index',['id'=>$vo['id']]); ?>">
                    <span class="span_title"><?php echo $vo['title']; ?></span>
                    <span class="span_time"><?php echo $vo['addtime']; ?></span>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="news_right">
        <div class="news_right_title">常见问题</div>
        <div class="news_right_prolist fontnum">
            <ul>
                <?php if(is_array($problist) || $problist instanceof \think\Collection || $problist instanceof \think\Paginator): $i = 0; $__LIST__ = $problist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li hc-href="<?php echo url('index/prodetail/index',['id'=>$vo['id']]); ?>" title="<?php echo $vo['title']; ?>">
                    <?php echo $vo['title']; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</aside>
<script>
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;
    })
    showprob();
    $(".n_l_t_span1").click(function () {
        $(".n_l_t_span2").removeClass("select");
        var _index = $(this).index();
        $(this).addClass("select");
        showprob();

    });
    $(".n_l_t_span2").click(function () {
        $(".n_l_t_span1").removeClass("select");
        var _index = $(this).index();
        //$("[hc-li]").eq(_index).addClass("u");
        $(this).addClass("select");
        shownews();

    });
    function shownews() {
        $("#prob").addClass('ishidden');
        $("#probtwo").addClass('ishidden');
        $("#newss").removeClass('ishidden');
        $("#newtwo").removeClass('ishidden');
    }
    function showprob() {
        $("#newss").addClass('ishidden');
        $("#newtwo").addClass('ishidden');
        $("#prob").removeClass('ishidden');
        $("#probtwo").removeClass('ishidden');
    }
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

        $("[hc-href]").each(function () {

            $(this).css("cursor", "pointer");
        })
        $("[hc-href]").click(function () {
            var is_open = $(this).attr("is-open");
            var href = $(this).attr("hc-href");
            // console.log(href);
            if (is_open == 1) {
                window.open(href);
            } else {
                window.location.href = href;
            }

        })
    function loginout() {
        layer.load(0, {shade: false});
       $.post("<?php echo url('index/index/loginout'); ?>",{},function (e) {
           layer.msg('已退出');
           setTimeout(function () {
               window.location.reload();
           },1000)
       })
    }
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
          