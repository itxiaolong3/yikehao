<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"E:\mydemo\yikehao/application/index\view\deal\index.html";i:1545995198;s:59:"E:\mydemo\yikehao\application\index\view\common\header.html";i:1545981406;}*/ ?>
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
    //    獲取參數
    function GetQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) {
            return decodeURIComponent(r[2]);
        }
        return null;
    }

    function selectFour(object, type,id) {
        var url = "<?php echo url('index/deal/index'); ?>";
        var string = $(object).html();
        var haotype = GetQueryString("haotype");
        var types = GetQueryString("types");
        var author = GetQueryString("author");
        //价格区间
        var email = GetQueryString("email");
        //其他筛选

        var fsbili = GetQueryString("fsbili");
        var editor = GetQueryString("editor");
        var wg = GetQueryString("wg");
        var branch = GetQueryString("branch");

        if (type == 1) {
            console.log('类型1')
            haotype = id;
        } else if (type == 2) {
            console.log('类型2')
            types = id;
        } else if (type == 3) {
            email = id;
        } else if (type == 4) {
            //验证类型
            branch = id;
        }else if (type == 5) {
            //粉丝区间
            author = id;
        }
        url = url + '?haotype=' + haotype + '&types=' + types
            + '&author=' + author + '&fsbili=' + fsbili
            + '&editor=' + editor + '&wg=' + wg
            + '&email=' + email + '&branch=' + branch;
        window.location.href = url;
    }
</script>

<!--主体-->
<!--公众号转让-->
<script>
    var pages=[];
</script>
<div id="location">当前位置：
    <a></a> &gt; <a>微信公众号交易</a></div>

<style>
    #items>li>div>s{
        width: 130px;
    }
    .mj-index-l{
        width:215px;
        height: auto;
        float: left;
        background: url(/yikehao/public/static/index/images/mh-bg-l.png) top center no-repeat;
        background-size: 100% auto;
        margin-right: 8px;
        background-color: #fff;
    }
    .mj-title{
        height: 85px;
        line-height: 85px;
        text-align: center;
        color: #fff;
        font-size: 32px;
    }
    .mj-l-a{
        width:135px;
        height: 35px;
        display: block;
        margin:0 auto;
        margin-top: 16px;
        line-height: 30px;
        font-size: 14px;
        color:#fff;
        margin-bottom: 9px;
        background: url("/yikehao/public/static/index/images/l-index-buy.png") center center no-repeat;
        /*background-color: #f22b44;*/
        background-size: 100% 100%;
        text-align: left;
        border-radius: 5px;
        text-indent: 2.5rem;
    }
    .mh-pro-input{
        height: 24px;
        line-height: 22px;
        margin: 6px 4px;
        padding: 0 6px;
        border: 1px solid #fff;
        border-radius: 5px;
        cursor: pointer;
        color: #282828;
        border: 1px solid #ccc;
        width: 50px;
    }
    .mh-pro-input-sub{
        height: 24px;
        line-height: 22px;
        margin: 6px 4px;
        padding: 0 6px;
        background: #C894F7;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        border: 1px solid #C894F7;
        width: 50px;
    }
    #select_box>ul{
        padding: 0 0px;
    }
    .wemedia-list-al-b-cal{
        color: #0e4ac5;
    }
    .wemedia-list-al-b-cb{
        color: #999;
    }
    .citychek {
        width: 300px;
        height: 30px;
    }
    #cleanarea{
        height: 24px;
        line-height: 22px;
        margin: 6px 4px;
        padding: 0 6px;
        background: #C894F7;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        border: 1px solid #C894F7;
        width: 50px;
        display: flex;
    }
    input::-webkit-input-placeholder{
        color:#939598;
    }
    input::-moz-placeholder{   /* Mozilla Firefox 19+ */
        color:#939598;
    }
    input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
        color:#939598;
    }
    input:-ms-input-placeholder{  /* Internet Explorer 10-11 */
        color:#939598;
    }
    .yeardata{
        height: 28px;border: 1px solid #cecece;
        margin-top: 4px;
    }
    #checktime{
        width: 100px;height: 25px;margin-right: 10px;
    }
    #checktime img{
        position: absolute;
        top: 14px;
        left: 287px;
    }
    .ul_footer{
        background-color: white;
        color: #939598;
        border-top: 1px dashed #cecece;
        display: flex;
        justify-content: space-between;

    }
    .selectre{
        padding-left: 20px;
        display: flex;
        align-items: center;
    }
    .selectre ul li{
        list-style: none;
        float: left;
        margin-bottom: 14px;

    }
    .cleanselet{
        border: 1px #cecece solid;
        width: 120px;
        height:30px;
        color: #939598;
        padding: 3px 5px;
        display: flex;
        align-items: center;
        margin-top: 12px;
        margin-right: 25px;
    }
    .cleanall{
        cursor: pointer;
    }
</style>

<div style="width: 1200px;margin: 0 auto;overflow: hidden">
    <form method="get">
        <div id="select_box" style="width: 1200px;" >
            <!--    <div></div>-->
            <ul>
                <li>
                    <div class="box_left">账号类型</div>
                    <em>
                        <a class="link <?php echo $gethaotype==''?'u':''; ?>" onclick="selectFour(this,type=1,'')" >全部</a>
                        <?php if(is_array($haotype) || $haotype instanceof \think\Collection || $haotype instanceof \think\Paginator): $i = 0; $__LIST__ = $haotype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a  onclick="selectFour(this,type=1,'<?php echo $vo['htid']; ?>')" class="link <?php echo $vo['htid']==$gethaotype?'u':''; ?>"><?php echo $vo['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </em>
                </li>
                <li>
                    <div class="box_left">公众号类目</div>
                    <em>
                        <a onclick="selectFour(this,type=2,'')" class="link <?php echo $types==''?'u':''; ?>">全部</a>
                        <?php if(is_array($alltype) || $alltype instanceof \think\Collection || $alltype instanceof \think\Paginator): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a  onclick="selectFour(this,type=2,'<?php echo $vo['tid']; ?>')" class="link <?php echo $vo['tid']==$types?'u':''; ?>"><?php echo $vo['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </em>
                </li>
                <li>
                    <div class="box_left">价格区间</div>
                    <em>
                        <a onclick="selectFour(this,type=3,'')" class="link <?php echo $email==''?'u':''; ?>">全部</a>
                        <a onclick="selectFour(this,type=3,1)" class="link <?php echo $email==1?'u':''; ?>">1万以内</a>
                        <a onclick="selectFour(this,type=3,2)" class="link <?php echo $email==2?'u':''; ?>">1-3万</a>
                        <a onclick="selectFour(this,type=3,3)" class="link <?php echo $email==3?'u':''; ?>">3-5万</a>
                        <a onclick="selectFour(this,type=3,4)" class="link <?php echo $email==4?'u':''; ?>">10-20万</a>
                        <a onclick="selectFour(this,type=3,5)" class="link <?php echo $email==5?'u':''; ?>">20万以上</a>
                        <!--<input onkeyup="this.value=this.value.replace(/\D/g,'')" type="text" value="" name="email_first" class="mh-pro-input"/>-->
                        <!--<a>-</a><input onkeyup="this.value=this.value.replace(/\D/g,'')" value="" name="email_end" class="mh-pro-input"/>-->
                        <!--<input class="mh-pro-input-sub" type="submit" value="查询"/>-->
                    </em>

                </li>
                <li>
                    <div class="box_left">粉丝数量量</div>
                    <em>
                        <a onclick="selectFour(this,type=5,'')" class="link <?php echo $author==''?'u':''; ?>">全部</a>
                        <a onclick="selectFour(this,type=5,1)" class="link <?php echo $author==1?'u':''; ?>">5000以下</a>
                        <a onclick="selectFour(this,type=5,2)" class="link <?php echo $author==2?'u':''; ?>">5001-1万</a>
                        <a onclick="selectFour(this,type=5,3)" class="link <?php echo $author==3?'u':''; ?>">1万-2万</a>
                        <a onclick="selectFour(this,type=5,4)" class="link <?php echo $author==4?'u':''; ?>">5-10万</a>
                        <a onclick="selectFour(this,type=5,5)" class="link <?php echo $author==5?'u':''; ?>">10-15万</a>
                        <a onclick="selectFour(this,type=5,6)" class="link <?php echo $author==6?'u':''; ?>">15-20万</a>
                        <a onclick="selectFour(this,type=5,7)" class="link <?php echo $author==7?'u':''; ?>">20-25万</a>
                        <a onclick="selectFour(this,type=5,8)" class="link <?php echo $author==8?'u':''; ?>">25-30万</a>
                        <a onclick="selectFour(this,type=5,9)" class="link <?php echo $author==9?'u':''; ?>">30万以上</a>
                    </em>

                </li>
                <li>
                    <div class="box_left">单粉均价</div>
                    <em>
                        <a onclick="selectFour(this,type=5,'')" class="link <?php echo $author==''?'u':''; ?>">不限</a>
                        <input onkeyup="this.value=this.value.replace(/\D/g,'')" type="text" value="" name="pay_first" class="mh-pro-input"/>
                        <a>-</a><input onkeyup="this.value=this.value.replace(/\D/g,'')" value="" name="pay_end" class="mh-pro-input"/><span style="line-height: 35px;color: #939598;">元/粉</span>
                        <input class="mh-pro-input-sub" type="submit" value="确定"/>
                    </em>

                </li>

                <li>
                    <div class="box_left">头条UV</div>
                    <em>
                        <a onclick="selectFour(this,type=5,'')" class="link <?php echo $author==''?'u':''; ?>">不限</a>
                        <a onclick="selectFour(this,type=5,1)" class="link <?php echo $author==1?'u':''; ?>">3%以下</a>
                        <a onclick="selectFour(this,type=5,2)" class="link <?php echo $author==2?'u':''; ?>">3%-5%</a>
                        <a onclick="selectFour(this,type=5,3)" class="link <?php echo $author==3?'u':''; ?>">5%-8%</a>
                        <a onclick="selectFour(this,type=5,4)" class="link <?php echo $author==4?'u':''; ?>">8%-10%</a>
                    </em>

                </li>
                <li>
                    <div class="box_left">其它筛选</div>
                    <em style="display: flex;">
                        <select hc-rzlx typename="branch">
                            <option <?php echo $branch==''?'selected':''; ?>  value="">认证主体</option>
                            <option <?php echo $branch==1?'selected':''; ?> value="1">个人认证</option>
                            <option <?php echo $branch==2?'selected':''; ?> value="2">企业认证</option>
                        </select>
                        <div id="checktime"><img src="/yikehao/public/static/index/images/down.png" width="23px" height="20"><input type="text" class="layui-input yeardata" id="test3" placeholder="注册时间"></div>

                        <select hc-rzlx typename="wg">
                            <option <?php echo $wg==''?'selected':''; ?> value="">有无违规</option>
                            <option <?php echo $wg==1?'selected':''; ?> value="1">不限</option>
                            <option <?php echo $wg==2?'selected':''; ?> value="2">无违规</option>
                            <option <?php echo $wg==3?'selected':''; ?> value="3">有违规</option>
                        </select>
                        <select hc-rzlx typename="editor">
                            <option <?php echo $editor==''?'selected':''; ?> value="">女粉丝占比</option>
                            <option <?php echo $editor==1?'selected':''; ?> value="1">不限</option>
                            <option <?php echo $editor==2?'selected':''; ?> value="2">10%以下</option>
                            <option <?php echo $editor==3?'selected':''; ?> value="3">10-20%</option>
                            <option <?php echo $editor==4?'selected':''; ?> value="4">20-30%</option>
                        </select>
                        <select hc-rzlx typename="editor">
                            <option <?php echo $editor==''?'selected':''; ?> value="">流量主是否开通</option>
                            <option <?php echo $editor==2?'selected':''; ?> value="1">未开通</option>
                            <option <?php echo $editor==3?'selected':''; ?> value="2">已开通</option>
                        </select>

                    </em>
                </li>
            </ul>

        </div>
        <div class="ul_footer">
            <aside class="selectre">您选择的结果
                <ul>
                    <li><s class="mh-tj"><a href="#">游戏 ×</a></s></li>
                    <li><s class="mh-tj"><a href="#">游戏 ×</a></s></li>
                    <li><s class="mh-tj"><a href="#">游戏 ×</a></s></li>
                </ul>
            </aside>
            <aside class="cleanselet"><a href="#" class="cleanall" >清空筛选条件</a></aside>
        </div>

        <input name="author" type="hidden" value="">
        <input name="exp" type="hidden" value="">
        <input name="email" type="hidden" value="">
        <input name="branch" type="hidden" value="">
        <input name="pay" type="hidden" value="">
    </form>
</div>

<style>
    #lists_sort s a{
        color: #383838;
    }
    #lists_sort>b{
        margin: 12px 69px 0 0;
        height: 24px;
        line-height: 22px;
        /*margin: 6px 4px;*/
        padding: 0 6px;
        background: #f00;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        border: 1px solid #f00;
        width: 69px;
    }
    .mh-tj{
        height: 24px !important;
        line-height: 22px !important;
        margin: 14px 20px 0 10px !important;
        padding: 0 6px !important;
        border-radius: 5px !important;
        cursor: pointer;
        border: 1px solid #f00 !important;
        color: #f00 !important;
        background: none !important;
    }
    .mh-tj a{
        color: #f00 !important;
    }
    .cur a{
        color:#4B70DB !important;
    }
</style>
<div id="lists_sort">
    <s class="<?php echo $onefssort==0?'u':'d cur'; ?>" id="allorders"><a href="javascript:void(0);" onclick="sorts(1);" class="link" >综合排序</a></s>
    <s class="<?php echo $pricesort==0?'u':'d cur'; ?>" id="personorders"><a href="javascript:void(0);" onclick="sorts(2);" class="link" >人气排行</a></s>
    <s class="<?php echo $sfnumsort==0?'u':'d cur'; ?>" id="priceorders"><a href="javascript:void(0);" onclick="sorts(3);" class="link" >价格排序</a></s>
</div>

<style>
    #items>li{
        overflow: inherit;
        border-bottom: 10px solid #F1F8FE;
    }
    #items>li table{
        position: absolute;
        width: 90px;
        height:90px;
        top: 40px;
        right: -29px;
        display: none;
    }
    #items>li b{
        font-weight: bold;
    }
</style>

<!--<div id="lists_sort"></div>-->
<ul id="items">
    <li mh-ewm-0 style="position: relative">
        <div>
            <p>
                <a target="_blank" href="/product_8_2_1738.htm">电影，短剧分享类公众号，女粉占比64%，新号注册个人主体，因个人原因无心打理，现诚意出售</a>
            </p>
            <s><u>出售价格:</u><i><span>￥1500</span></i></s>
            <s><u>粉丝数量:</u><b style="color: #6A6C71">3498</b></s>
            <s><u>账号类型:</u><b style="color: #6A6C71">订阅号</b></s>
            <s><u>行业分类:</u><b style="color: #6A6C71">小说</b></s>
            <s><u>流量主:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>开通原创:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>UV值：</u><b style="color: #6A6C71">4%</b></s>
        </div>
        <em><i>发布时间：昨天</i><a href="http://wpa.qq.com/msgrd?v=3&uin=2852853898&site=qq&menu=yes"><b>联系客服</b></a></em>
    </li>
    <li mh-ewm-0 style="position: relative">
        <div>
            <p>
                <a target="_blank" href="/product_8_2_1738.htm">电影，短剧分享类公众号，女粉占比64%，新号注册个人主体，因个人原因无心打理，现诚意出售</a>
            </p>
            <s><u>出售价格:</u><i><span>￥1500</span></i></s>
            <s><u>粉丝数量:</u><b style="color: #6A6C71">3498</b></s>
            <s><u>账号类型:</u><b style="color: #6A6C71">订阅号</b></s>
            <s><u>行业分类:</u><b style="color: #6A6C71">小说</b></s>
            <s><u>流量主:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>开通原创:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>UV值：</u><b style="color: #6A6C71">4%</b></s>
        </div>
        <em><i>发布时间：昨天</i><a href="http://wpa.qq.com/msgrd?v=3&uin=2852853898&site=qq&menu=yes"><b>联系客服</b></a></em>
    </li>
    <li mh-ewm-0 style="position: relative">
        <div>
            <p>
                <a target="_blank" href="/product_8_2_1738.htm">电影，短剧分享类公众号，女粉占比64%，新号注册个人主体，因个人原因无心打理，现诚意出售</a>
            </p>
            <s><u>出售价格:</u><i><span>￥1500</span></i></s>
            <s><u>粉丝数量:</u><b style="color: #6A6C71">3498</b></s>
            <s><u>账号类型:</u><b style="color: #6A6C71">订阅号</b></s>
            <s><u>行业分类:</u><b style="color: #6A6C71">小说</b></s>
            <s><u>流量主:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>开通原创:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>UV值：</u><b style="color: #6A6C71">4%</b></s>
        </div>
        <em><i>发布时间：昨天</i><a href="http://wpa.qq.com/msgrd?v=3&uin=2852853898&site=qq&menu=yes"><b>联系客服</b></a></em>
    </li>
    <li mh-ewm-0 style="position: relative">
        <div>
            <p>
                <a target="_blank" href="/product_8_2_1738.htm">电影，短剧分享类公众号，女粉占比64%，新号注册个人主体，因个人原因无心打理，现诚意出售</a>
            </p>
            <s><u>出售价格:</u><i><span>￥1500</span></i></s>
            <s><u>粉丝数量:</u><b style="color: #6A6C71">3498</b></s>
            <s><u>账号类型:</u><b style="color: #6A6C71">订阅号</b></s>
            <s><u>行业分类:</u><b style="color: #6A6C71">小说</b></s>
            <s><u>流量主:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>开通原创:</u><b style="color: #6A6C71">未开通</b></s>
            <s><u>UV值：</u><b style="color: #6A6C71">4%</b></s>
        </div>
        <em><i>发布时间：昨天</i><a href="http://wpa.qq.com/msgrd?v=3&uin=2852853898&site=qq&menu=yes"><b>联系客服</b></a></em>
    </li>
</ul>
<div id="pagination">
    <ul>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=1" class="n">1</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=2" class="d">2</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=3" class="d">3</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=4" class="d">4</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=5" class="d">5</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=6" class="d">6</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=7" class="d">7</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=8" class="d">8</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=9" class="d">9</li>
        <li onclick="gethref(this)" hc-href="<?php echo url('index/deal/index'); ?>?branch=&author=&exp=&email=&email_first=&email_end=&pay=&pay_first=&pay_end=&title=&is_djf=0&is_email=0&is_pay=0&is_record=0&price=&editor=&phone=&page=10" class="d">10</li>
    </ul>
    <!--    <div>[ 共 --><!-- 条记录 ]</div>-->
</div>

<script>
    //排序
    function sorts(type) {

        var getstate='';
        switch(type){
            case 1:

                getstate=GetQueryString("onefssort");
                getstate = getstate == 0 ? 1 : 0;
                window.location.href="<?php echo url('index/deal/index'); ?>?haotype=<?php echo $gethaotype; ?>&types=<?php echo $types; ?>&author=<?php echo $author; ?>&email=<?php echo $email; ?>&fsbili=<?php echo $fsbili; ?>&editor=<?php echo $editor; ?>&branch=<?php echo $branch; ?>&wg=<?php echo $wg; ?>&pricesort=<?php echo $pricesort; ?>&sfnumsort=<?php echo $sfnumsort; ?>&headersort=<?php echo $headersort; ?>&onefssort="+getstate;
                break;
            case 2:

                getstate=GetQueryString("pricesort");
                getstate = getstate == 0 ? 1 : 0;
                window.location.href="<?php echo url('index/deal/index'); ?>?haotype=<?php echo $gethaotype; ?>&types=<?php echo $types; ?>&author=<?php echo $author; ?>&email=<?php echo $email; ?>&fsbili=<?php echo $fsbili; ?>&editor=<?php echo $editor; ?>&branch=<?php echo $branch; ?>&wg=<?php echo $wg; ?>&pricesort="+getstate+"&sfnumsort=<?php echo $sfnumsort; ?>&headersort=<?php echo $headersort; ?>&onefssort=<?php echo $onefssort; ?>";
                break;
            case 3:

                getstate=GetQueryString("sfnumsort");
                getstate = getstate == 0 ? 1 : 0;
                window.location.href="<?php echo url('index/deal/index'); ?>?haotype=<?php echo $gethaotype; ?>&types=<?php echo $types; ?>&author=<?php echo $author; ?>&email=<?php echo $email; ?>&fsbili=<?php echo $fsbili; ?>&editor=<?php echo $editor; ?>&branch=<?php echo $branch; ?>&wg=<?php echo $wg; ?>&sfnumsort="+getstate+"&pricesort=<?php echo $pricesort; ?>&headersort=<?php echo $headersort; ?>&onefssort=<?php echo $onefssort; ?>";
                break;
        }
    }
    function gethref(obj){
        var is_open=$(obj).attr("is-open");
        var href=$(obj).attr("hc-href");
        console.log(href);
        if(is_open==1){
            window.open(href);
        }else{
            window.location.href=href;
        }
    }


    $(".mh-ewm-img").mouseover(function(){
        $(this).parents("#items>li").find("table").show();
    })
    $(".mh-ewm-img").mouseout(function(){
        $(this).parents("#items>li").find("table").hide();
    })

</script>

<script>

    $("[hc-rzlx]").change(function(){
        var _typename=$(this).attr("typename");
        switch(_typename)
        {
            case "branch":
                var _url='<?php echo url('index/deal/index'); ?>?haotype=<?php echo $gethaotype; ?>&types=<?php echo $types; ?>&author=<?php echo $author; ?>&email=<?php echo $email; ?>&fsbili=<?php echo $fsbili; ?>&editor=<?php echo $editor; ?>&wg=<?php echo $wg; ?>';
                break;
            case "fsbili":
                var _url='<?php echo url('index/deal/index'); ?>?haotype=<?php echo $gethaotype; ?>&types=<?php echo $types; ?>&author=<?php echo $author; ?>&email=<?php echo $email; ?>&branch=<?php echo $branch; ?>&editor=<?php echo $editor; ?>&wg=<?php echo $wg; ?>';
                break;
            case "editor":
                var _url='<?php echo url('index/deal/index'); ?>?haotype=<?php echo $gethaotype; ?>&types=<?php echo $types; ?>&author=<?php echo $author; ?>&email=<?php echo $email; ?>&fsbili=<?php echo $fsbili; ?>&branch=<?php echo $branch; ?>&wg=<?php echo $wg; ?>';
                break;
            case "wg":
                var _url='<?php echo url('index/deal/index'); ?>?haotype=<?php echo $gethaotype; ?>&types=<?php echo $types; ?>&author=<?php echo $author; ?>&email=<?php echo $email; ?>&fsbili=<?php echo $fsbili; ?>&editor=<?php echo $editor; ?>&branch=<?php echo $branch; ?>';
                break;
        }
        var _val=$(this).val();
        window.location.href=_url+"&"+_typename+"="+_val;
    })

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
<div class="mh-hd"><img src="" /> </div>
<script>

    $("#mh-foot-form").submit(function(){
        var _val=$("input[name=zhanghao]").val();
        if(_val==""){
            alert("请输入微信号！");
            return false;
        }

    })


    $(".mh-fixed").animate({left:"0"},1000);
    $("[mh-close]").click(function(){
        $(".mh-fixed").animate({left:"-100%"},1000,showmhfix);
    })
    function showmhfix() {
        $(".mh-hd").show();
        $(".mh-hd").animate({left:"0"},300);
    }
    $(".mh-hd").click(function(){
        $(".mh-hd").hide();
        $(".mh-hd").animate({left:"-143px"},100);
        $(".mh-fixed").animate({left:"0"},1000);

    })
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1267301476'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1267301476%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>

<!--日期选择器-->
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;
        //年月选择器
        laydate.render({
            elem: '#test3'
            ,type: 'month'
        });
    });
</script>
</body>
</html>
          