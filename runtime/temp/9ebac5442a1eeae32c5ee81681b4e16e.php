<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"E:\mydemo\yikehao/application/index\view\usercenter\index.html";i:1546510355;s:59:"E:\mydemo\yikehao\application\index\view\common\header.html";i:1545981406;}*/ ?>
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
        <div style="margin: 0 auto;width: 1200px;position: relative">您好，欢迎来到号可易！
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
        width: 1500px;
        display: flex;
        margin: 5px auto;
    }
    .m_left{
        width: 15%;
        margin-right: 2%;
        background-color: white;
        height: 800px;
    }
    .m_left ul {
        display: flex;
        flex-direction: column;
    }
    .m_left ul li {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        color: #333;
        font-size: 15px;
        cursor: pointer;
    }
    .m_left ul li img {
        margin-right: 10px;
    }
    .m_left .active {
        color: #1196db;
    }
    .m_right{
        width: 78%;
        background-color: white;
        height: 800px;
    }
    .m_right .title {
        display: flex;
        align-items: center;
        height: 50px;
        color: #333;
        font-size: 20px;
        padding-left: 20px;
        border-bottom: 1px solid #f2f2f2;
    }
    .m_right .c1 {
        padding: 30px;
        width: 700px;
    }
    .c2 {
        display: flex;
    }
    .c2 .item {
        position: relative;
        width: 200px;
        height: 150px;
        cursor: pointer;
        background-size: contain;
        margin-right: 10px;
    }
    .c2 .item.item1 {
        background: url('/yikehao/public/static/index/images/vipmou.png') no-repeat;
    }
    .c2 .item.item2 {
        background: url('/yikehao/public/static/index/images/vipjika.png') no-repeat;
    }
    .c2 .item.item3 {
        background: url('/yikehao/public/static/index/images/vipnv.png') no-repeat;
    }
    .c2 .item img {
        position: absolute;
        right: 10px;
        bottom: 10px;
    }
    .c3 {
        padding-bottom: 9px;
        margin-top: 20px;
        border-bottom: 1px solid #f2f2f2;
    }
    .c3 span {
        color: #1196db;
        font-size: 18px;
        height: 30px;
        line-height: 20px;
        padding-bottom: 9px;
        border-bottom: 2px solid #1196db;
    }
    .c4 {
        display: flex;
        margin: 20px 0;
    }
    .c4 .item {
        border: 1px solid #ddd;
        width: 200px;
        height: 60px;
        margin-right: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .c5 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 50px;
        background-color: #f1f1f1;
        padding: 0 20px;
    }
    .c5 .left {
        display: flex;
        align-items: center;
        color: #666;
        font-size: 18px;
    }
    .c5 .left span {
        color: #1196db;
        margin-top: 2px;
    }
    .c5 .right {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100px;
        height: 30px;
        border-radius: 15px;
        color: #fff;
        font-size: 15px;
        background-color: #ff3b3c;
        cursor: pointer;
    }
    .c6 {
        margin: 20px 0 40px;
        color: #666;
        font-size: 15px;
    }
    .c6 img {
        margin: 0 20px;
        cursor: pointer;
    }
    .c7 {
        color: #999;
        font-size: 15px;
        line-height: 30px;
    }
    .c7 p:first-child {
        color: #ff3b3c;
        font-size: 18px;
    }
    .c8 {
        display: flex;
    }
    .c8 .i1 {
        width: 200px;
        margin-right: 20px;
    }
    .c8 .layui-input-block {
        width: 150px;
        margin-left: 0;
        margin-right: 20px;
    }
    .t1 {
        color: #000;
        font-size: 12px;
        margin: 20px 0 20px 2px;
    }
    .c9 {
        width: 900px;
        height: 400px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .c9 p {
        color: #666;
        margin-top: 10px;
    }
    .c10 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .c10 .top {
        display: flex;
    }
    .c10 .top .left {
        width: 100px;
        height: 100px;
        margin-right: 20px;
    }
    .c10 .top .right {
        display: flex;
        flex-direction: column;
    }
    .c10 .top .right .l1 {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .c10 .top .right .l1 .ll {
        color: #ff8041;
        font-size: 25px;
    }
    .c10 .top .right .l1 .lr {
        color: #ff8041;
        font-size: 8px;
        margin-left: 5px;
    }
    .c10 .top .right .l2 .ll {
        color: #009edb;
        font-size: 12px;
        margin: 0 10px 0 5px;
    }
    .c10 .top .right .l2 .lr {
        color: #999;
        font-size: 12px;
    }
    .c10 .top .right .l3 {
        display: flex;
        margin-top: 20px;
        margin-left: 5px;
    }
    .c10 .top .right .l3 button {
        margin-right: 10px;
    }
    .c10 .bottom {
        width: 500px;
        margin-top: 50px;
    }
    .c10 .bottom .layui-form-label {
        width: 100px;
    }
</style>
<div id="location">当前位置：首页>>会员中心</div>
<div class="mainbody">
    <div class="m_left">
        <ul class="tab">
            <li class="active"><img src="/yikehao/public/static/index/images/p3.png" />我的主页</li>
            <li><img src="/yikehao/public/static/index/images/person1.png" />我的订单</li>
            <li><img src="/yikehao/public/static/index/images/p2.png" />会员中心</li>
        </ul>
    </div>
    <div class="m_right">
        <div class="title">我的资料</div>
        <div class="c1">
            <div class="con c10">
                <div class="top">
                    <img class="left" src="/yikehao/public/static/index/images/bigkf.png" />
                    <div class="right">
                        <div class="l1"><span class="ll"><?php echo $uinfo['phone']; ?>&nbsp;欢迎您！</span>
                            <img class="icon" src="/yikehao/public/static/index/images/vlogo<?php echo $uinfo['vipstate']; ?>.png" />
                            <span class="lr">
                                <?php switch($uinfo['vipstate']): case "1": ?>月卡会员<?php break; case "2": ?>季卡会员<?php break; case "3": ?>永久会员<?php break; default: ?>普通会员
                                <?php endswitch; ?>
                            </span>
                        </div>
                        <div class="l2"><span class="ll">上次登录：<?php echo $uinfo['logintime']; ?></span><span class="lr">登录IP：<?php echo $uinfo['loginip']; ?></span></div>
                        <div class="l3"><button class="layui-btn layui-btn-warm sell">我要卖号</button><button class="layui-btn layui-btn-normal buy">我要买号</button></div>
                    </div>
                </div>
                <div class="bottom">
                    <form class="layui-form">
                        <div class="layui-form-item">
                            <label class="layui-form-label">手机号：</label>
                            <div class="layui-input-block">
                                <input type="text" name="phone" lay-verify="phone"  placeholder="请输入手机号" class="layui-input" disabled value="<?php echo $uinfo['phone']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">微信号：</label>
                            <div class="layui-input-block">
                                <input type="text" name="wx" lay-verify="wx" placeholder="请输入微信号" class="layui-input" value="<?php echo $uinfo['wx']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">QQ号：</label>
                            <div class="layui-input-block">
                                <input type="text" name="qq" lay-verify="qq"  placeholder="请输入QQ号" class="layui-input" value="<?php echo $uinfo['qq']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">邮箱：</label>
                            <div class="layui-input-block">
                                <input type="text" name="qqemail" lay-verify="qqemail" placeholder="请输入邮箱" class="layui-input" value="<?php echo $uinfo['qqemail']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit="" lay-filter="postinfo">保存</button>
                                <!--<button type="reset" class="layui-btn layui-btn-primary">重置</button>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="con">
                <form class="c8 layui-form" action="" lay-filter="form">
                    <!--<input type="text" name="title" placeholder="订单号" class="layui-input i1"> -->
                    <div class="layui-input-block">
                        <select name="type">
                            <option value="1">购买订单</option>
                            <option value="2">发布记录</option>
                        </select>    
                    </div>
                    <!--<button class="layui-btn layui-btn-normal">查询</button>-->
                </form>

                <div class="orders">
                    <p class="t1">所有订单</p>
                    <table id="table" class="layui-table" style="width: 1100px;">
                        <colgroup>
                            <col width="150">
                            <col width="150">
                            <col width="150">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="140">
                            <col>
                        </colgroup>
                        <?php if(empty($viplist) || (($viplist instanceof \think\Collection || $viplist instanceof \think\Paginator ) && $viplist->isEmpty())): ?>
                            <div id="empty1" class="c9">
                                <img src="/yikehao/public/static/index/images/p5.png" />
                                <p>暂无订单</p>
                            </div>
                        <?php else: ?>
                            <thead>
                            <tr style="">
                                <th>订单号</th>
                                <th>订单内容</th>
                                <th>所属需求</th>
                                <th>订单类型</th>
                                <th>订单价格</th>
                                <th>订单状态</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                        <?php endif; ?>

                        <tbody>
                        <?php if(is_array($viplist) || $viplist instanceof \think\Collection || $viplist instanceof \think\Paginator): $i = 0; $__LIST__ = $viplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $vo['ordernum']; ?></td>
                            <td>
                                <?php switch($vo['types']): case "1": ?>购买月卡会员<?php break; case "2": ?>购买季卡会员<?php break; default: ?>购买永久会员
                                <?php endswitch; ?>
                            </td>
                            <td>购买会员</td>
                            <td>会员支付</td>
                            <td><?php echo $vo['payprice']; ?></td>
                            <td>已支付</td>
                            <td><?php echo $vo['paytime']; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-normal" onclick="del('<?php echo $vo['id']; ?>',this,0)">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
                </div>
                <div class="myfb">
                    <p class="t1">我的发布</p>
                    <table id="table1" class="layui-table" style="width: 1100px;">
                        <colgroup>
                            <col width="150">
                            <col width="150">
                            <col width="150">
                            <col width="100">
                            <col width="100">
                            <col width="120">
                            <col width="100">
                            <col>
                        </colgroup>
                        <?php if(empty($fblist) || (($fblist instanceof \think\Collection || $fblist instanceof \think\Paginator ) && $fblist->isEmpty())): ?>
                        <div id="empty2" class="c9">
                            <img src="/yikehao/public/static/index/images/p5.png" />
                            <p>暂无订单</p>
                        </div>
                        <?php else: ?>
                        <thead>
                        <tr>
                            <th>发布时间</th>
                            <th>发布名称</th>
                            <th>分类</th>
                            <th>价格</th>
                            <th>联系方式</th>
                            <th>销售员QQ</th>
                            <th>发布状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <?php endif; ?>

                        <tbody>
                        <?php if(is_array($fblist) || $fblist instanceof \think\Collection || $fblist instanceof \think\Paginator): $i = 0; $__LIST__ = $fblist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><?php echo $vo['regtime']; ?></td>
                                <td><?php echo $vo['zhname']; ?></td>
                                <td><?php echo $vo['fortypetext']; ?></td>
                                <td><?php echo $vo['price']; ?></td>
                                <td><?php echo $vo['phone']; ?></td>
                                <td><?php echo $vo['kfqq']; ?></td>
                                <td><?php switch($vo['state']): case "1": ?>已发布<?php break; case "2": ?>被拒绝<?php break; default: ?>待审核
                                    <?php endswitch; ?>
                                </td>
                                <td>
                                    <button class="layui-btn layui-btn-normal" onclick="del('<?php echo $vo['id']; ?>',this,1)">删除</button>
                                    <?php if($vo['state'] == 2): ?><button class="layui-btn layui-btn-warm" id="nopassdesc">查看原因</button><?php endif; ?>

                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="con" style="margin-left: 100px;">
                <div class="c2">
                    <div class="item item1"><img src="/yikehao/public/static/index/images/sub.png" /></div>
                    <div class="item item2"><img src="/yikehao/public/static/index/images/sub.png" /></div>
                    <div class="item item3"><img src="/yikehao/public/static/index/images/sub.png" /></div>
                </div>
                <div class="c3"><span>请选择充值方式</span></div>
                <div class="c4">
                    <!-- <div class="item"><img src="/yikehao/public/static/index/images/alipay.png" /></div> -->
                    <div class="item"><img src="/yikehao/public/static/index/images/wxpay.png" /></div>
                </div>
                <div class="c5">
                    <div class="left">应付：<span id="price">99</span>&nbsp;元</div>
                    <input type="hidden" value="" id="paytype">
                    <div id="pay" class="right">立即支付</div>
                </div>
                <div class="c6">客服QQ：xxxxxxxxxx<img src="/yikehao/public/static/index/images/qqchar.png" />（工作时间：周一至周六8:30-17:30 节假日除外）</div>
                <div class="c7">
                    <p>温馨提示：</p>
                    <p>购买月卡的有效期为支付成功后立即生效，30T准时失效</p>
                    <p>购买之后不支持退还。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
    layui.use(['form','layer'], function(){
        var form = layui.form;
        var layer = layui.layer;
        //监听提交
        form.on('submit(postinfo)', function(data){
            console.log(data.field.phone)
            var wx=data.field.wx;
            var qq=data.field.qq;
            var qqemail=data.field.qqemail;
            if (qqemail.length>0){
                var ischeckemail=checkqq(qqemail);
                if(ischeckemail){
                    $.post('',{wx:wx,qq:qq,qqemail:qqemail},function (e) {
                        var re=JSON.parse(e);
                        if (re.code==1){
                            layer.msg(re.msg)
                            window.location.reload();
                        }else{
                            layer.msg(re.msg)
                        }

                    })
                }else{
                    layer.msg('邮箱格式不对')
                }
            }else{
                $.post('',{wx:wx,qq:qq,qqemail:qqemail},function (e) {
                    var re=JSON.parse(e);
                    if (re.code==1){
                        layer.msg(re.msg)
                        window.location.reload();
                    }else{
                        layer.msg(re.msg)
                    }

                })
            }
            return false;
        });
        form.on('select()', function(data){
            if(data.value==2){
                //发布记录
                $('.myfb').show();
                $('.orders').hide();
            }else{
                $('.orders').show();
                $('#table').show();
                $('.myfb').hide();
            }
            console.log(data.value);
        });
    });
    $('.c1 .con').eq(0).show().siblings().hide();
    $('.c2 .item').eq(0).children().show().parent().siblings().children().hide();
    $('.myfb').hide();
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
    $('.tab li').click(function() {
        var i = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('.c1 .con').eq(i).show().siblings().hide();
        switch (i) {
            case 0:
                $('.title').text('我的资料');
                break;
            case 1:
                $('.title').text('订单管理');
                break;
            case 2:
                $('.title').text('会员中心');
                break;
        }
    });
    $('.c2 .item').click(function() {
        var i = $(this).index();
        switch (i) {
            case 0:
                $("#paytype").val(1);
                $('#price').text('99');
                break;
            case 1:
                $("#paytype").val(2);
                $('#price').text('199');
                break;
            case 2:
                $("#paytype").val(3);
                $('#price').text('999');
                break;
        }
        console.log(i);
        $(this).children().show().parent().siblings().children().hide();
    });
    $('.sell').click(function () {
        window.location.href="<?php echo url('index/sell/index'); ?>"
    })
    $('.buy').click(function () {
        window.location.href="<?php echo url('index/deal/index'); ?>"
    })
    var paytype='';
    var types='';
    var payprice=''
    $('#pay').click(function(){
        paytype=$("#paytype").val();
         if (paytype==''){
             paytype=1;
             payprice=99
         }
         if(paytype==1){
             console.log('得到的'+paytype)
             payprice=99
             types="月卡会员"
         }else if(paytype==2){
             console.log('得到的'+paytype)
             payprice=199
             types="季卡会员"
         }else if(paytype==3){
             console.log('得到的'+paytype)
             payprice=999
             types="永久会员"
         }
         var curstate="<?php echo $uinfo['vipstate']; ?>";
         console.log('当前身份'+curstate)
        if(paytype<=curstate){
             layer.msg('该会员已购买过')
        }else{
            layer.open({
                title: '微信扫一扫支付',
                btn:[],
                content: "<span style='display: flex;justify-content: center;align-content: center;'>"
                + "<label style='color: red;font-size: 20px;font-weight: bold;'>"
                + payprice
                +"</label>元&nbsp;"
                +types
                +"</span><br/><img alt='扫码支付' width='100%' height='100%' src='<?php echo url('index/usercenter/payvip'); ?>?typenum="+paytype+"'/>",
                end:function () {
                    clearInterval(setin1);
                }
            });
            var setin1=setInterval(function () {
                console.log('关闭');
                $.post("<?php echo url('index/usercenter/getstate'); ?>",{typenum:paytype},function (e) {
                    if(e){
                        location.reload();
                        clearInterval(setin1);
                    }
                })
            },1000)
        }


    })
    $('#nopassdesc').click(function(){
        layer.open({
            title: '退回理由',
            content: '啦啦啦啦'
        });
    })
    function del(id,obj,type) {
        layer.confirm('删除后不可恢复', {
            btn: ['继续删除','取消'] //按钮
        }, function(){
            $.post('delorder',{id:id,types:type},function (e) {
                var re=JSON.parse(e);
                if (re.code==1){
                    $(obj).parents("tr").remove();
                    layer.msg(re.msg);
                }else{
                    layer.msg(rs.msg);
                }
            })
        }, function(){
            layer.close();
        });


    }
//    校验邮箱
    function checkqq(values){
        var reg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$"); //正则表达式
        if(values === ""){ //输入不能为空
            return false;
        }else if(!reg.test(values)){ //正则验证不通过，格式不对
            return false;
        }else{
            return true;
        }
    }
</script>
</body>
</html>
          