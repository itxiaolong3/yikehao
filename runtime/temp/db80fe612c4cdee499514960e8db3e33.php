<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"E:\mydemo\yikehao/application/index\view\evals\index.html";i:1546486779;s:59:"E:\mydemo\yikehao\application\index\view\common\header.html";i:1545981406;}*/ ?>
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
    .conts{
        width: 950px;height: 640px;background-image: url('/yikehao/public/static/index/images/zsbj.jpg');
        background-repeat:no-repeat; background-size:100% 100%;-moz-background-size:100% 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .main{
        width: 42%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 50px;
    }
    .cont_right,.cont_left{
        list-style: none;
        width: 185px;
    }
    .cont_right li,.cont_left li{
        margin-top: 20px;
        text-align: center;
        font-size: 15px;
        font-weight: bold;
    }
    .right_li{
        border-bottom: 3px #F5D1D2 solid;font-size: 20px!important;font-weight: bold;color: #4D4D4D;padding-bottom: 5px;
    }
    .left_li{
        border-bottom: 3px #F5D1D2 solid;font-size: 20px!important;font-weight: bold;color: #4D4D4D;padding-bottom: 5px;
    }
    .cont_bt_right{
        position: absolute;
        top: 73%;
        right: 26%;
        padding: 15px;
        background: #0c94eb;
        color: white;
    }
    .cont_bt_left{
        position: absolute;
        top: 80%;
        right: 26%;
        padding: 15px;
        background: #5C72F6;
        color: white;
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
                <a mj-hv-sh-none href="<?php echo url('index/sell/index'); ?>">卖公众号</a>
            </li>
            <li style="margin:0;color: #fff;">|</li>
            <li><a mj-hv-sh-none href="<?php echo url('index/deal/index'); ?>">买公众号</a></li>
            <li style="margin:0;color: #fff;">|</li>
            <li style="position: relative">
                <a mj-hv-sh-none href="<?php echo url('index/evals/index'); ?>" class="link chooseit">帐号估值</a>
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
<!--估值-->
<div class="eva-div2">
    <div class="wrap" style="width: 1200px;margin: 0 auto">
        <p class="eva-p1">测测公众号的价值！</p>
        <p class="eva-p2">——30秒测出你在新媒体界的地位/身价——</p>
        <div class="eva-div2-div1">
            <div class="eva-div2-div2">
                <div class="eva-div2-div3">
                    <form id="f">

                        <p style="margin-top: 65px; clear: both; overflow: hidden;">
                            <span class="eva-div2-span1">公众号估价</span>
                            <span class="eva-div2-span2" id="allCount">累计有<label style="color:#4FB1CC;font-size: 17px;font-weight: bold;">4668</label>位号主进行了公众号估价</span>
                        </p>
                        <p class="eva-div2-p1" style="margin-top:30px;">
                            <span class="eva-div2-span3">公众号名称:</span>
                            <input type="text" id="wxName" name="wxName" placeholder="输入您的公众号名称" class="eva-div2-input1"  value=""/>

                        </p>
                        <p class="eva-div2-p1">
                            <span class="eva-div2-span3">微&nbsp;&nbsp;信&nbsp;&nbsp;号:</span>
                            <input type="text" id="weixin" name="weixin" placeholder="输入您的公众号的微信号" class="eva-div2-input1" value=""/>
                        </p>
                        <p class="eva-div2-p1">
                            <span class="eva-div2-span3">粉丝数量:</span>
                            <input type="text" id="fansNum" name="fansNum" placeholder="输入您的公众号的粉丝数" class="eva-div2-input1" onkeyup="this.value=this.value.replace(/\D/g,'')" value=""/>
                        </p>
                        <p class="eva-div2-p1">
                            <span class="eva-div2-span3">头条阅读:</span>
                            <input type="text" id="readNum" name="readNum" placeholder="输入头条文章的平均阅读量" class="eva-div2-input1" onkeyup="this.value=this.value.replace(/\D/g,'')" value=""/>
                        </p>
                        <p class="eva-div2-p1">
                            <span class="eva-div2-span3">原创赞赏:</span>
                            <select id="isCreate" name="isCreate" class="eva-div2-select1">
                                <option value="0" >未开通原创</option>
                                <option value="1" >开通原创</option>
                            </select>
                            <select id="isAdmire" name="isAdmire" class="eva-div2-select1" style="margin-left: 2.9%;">
                                <option value="0" >未开通赞赏功能</option>
                                <option value="1" >开通赞赏功能</option>
                            </select>
                        </p>
                        <p class="eva-div2-p1">
                            <span class="eva-div2-span3">主体变更:</span>
                            <select id="mainChange" name="mainChange" class="eva-div2-select2">
                                <option value="1" >主体可以通过认证来变更</option>
                                <option value="0" >主体不可以通过认证来变更</option>
                            </select>
                        </p>
                    </form>
                </div>
                <div class="eva-div2-div4">
                    <img  mj-img src="/yikehao/public/static/index/picture/eva-bg1.png" class="eva-div2-img1" id="images"/>
                    <div class="eva-div2-div5">
                        <div class="eva-div2-div6">
                            <div class="eva-div2-div7 evaBg" onclick="addEvaluate()">
                                <p class="eva-div2-p3">
                                    <span class="eva-div2-span4">开始</span>
                                    <span class="eva-div2-span4">估价</span>
                                </p>
                            </div>
                        </div>
                        <p class="eva-div2-p2">点击立即估价!</p>
                    </div>
                </div>
            </div>
            <div id="contbox" class="conts" style="display: none;">
                <div class="main">
                    <div class="cont_right">
                        <ul>
                            <li class="right_li">公众号微信号</li>
                            <li>粉丝数量</li>
                            <li>头条阅读</li>
                            <li>原创功能</li>
                            <li>主体变更</li>
                        </ul>
                    </div>
                    <div class="cont_left">
                        <ul>
                            <li class="left_li" id="wxnamevalue">cjl1835444444</li>
                            <li id="sfnums">1540</li>
                            <li id="toutiaonum">400</li>
                            <li id="yuanc">已开通</li>
                            <li id="changzt">主体可通过认证来变更</li>
                        </ul>
                        <div style="position: absolute;top: 90%;right: 48%;">
                            <div>
                                <span style="font-size: 23px;height: 20px;line-height: 32px;">
                                市场价值：<label style="font-size: 35px;color: red;margin-bottom: 10px;" id="guzhiprice">5000.00</label>
                                </span>
                                <span style="font-size: 23px;height: 20px;line-height: 32px;margin-left: 20px;">
                                世界排名：<label style="font-size: 35px;color: #AD7617;margin-bottom: 10px;" id="wordorder">2515</label>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cont_bt_right">
                    <a id="down1" href="" download="downImg" style="color:white;cursor: pointer" >下载到本地</a>
                </div>
                <div class="cont_bt_left">
                    <a href="<?php echo url('index/sell/index'); ?>" style="color:white;cursor: pointer">返回购买页</a>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.bootcss.com/html2canvas/0.4.1/html2canvas.js"></script>
<script>
    //以下是截图代码
    $(function(){
        $('.conts').hide();
    });
    function showdown() {
        var he=$("#contbox").height();
        var wh=$("#contbox").width();
        html2canvas($("#contbox"), {
            height: he + 520,
            width: wh + 448  ,
            onrendered: function(canvas) {
                //将canvas画布放大若干倍，然后盛放在较小的容器内，就显得不模糊了
                var timestamp = Date.parse(new Date());
                //把截取到的图片替换到a标签的路径下载
                $("#down1").attr('href',canvas.toDataURL());
                //下载下来的图片名字
                $("#down1").attr('download',timestamp + '.png') ;
                //document.body.appendChild(canvas);
            }
            //可以带上宽高截取你所需要的部分内容
        });
    }
</script>
<script>
    var wxName;
    var wxData;
    var fansData;
    var readData;
    var createData;
    var admireData;
    var mcData;
    var gfData;
    var minMoney = 0;//最小估值
    var maxMoney = 1;//最大估值
    var isyuanc;
    var zhuti;
    $(function() {
        $(".cur1").removeClass("cur1");
        $("#evaluatePage").addClass("cur1");

        $("#sellgzh").removeAttr("disabled");

        /*......鍏憡婊氬姩......*/
        var $this = $(".news");
        var scrollTimer;
        $this.hover(function(){
            clearInterval(scrollTimer);
        },function(){
            scrollTimer = setInterval(function(){
                scrollNews( $this );
            }, 3000 );
        }).trigger("mouseout");


        //浼颁环鎸夐挳


        $('.eva3-div1-btn2').mouseenter(function(){
            $(this).addClass('colorBtn1');
        })
        $('.eva3-div1-btn2').mouseleave(function(){
            $(this).removeClass('colorBtn1');
        })

        $('.eva3-div1-btn3').mouseenter(function(){
            $(this).addClass('colorBtn2');
        })
        $('.eva3-div1-btn3').mouseleave(function(){
            $(this).removeClass('colorBtn2');
        })

        $('.eva3-div1-btn4').mouseenter(function(){
            $(this).addClass('colorBtn3');
        })
        $('.eva3-div1-btn4').mouseleave(function(){
            $(this).removeClass('colorBtn3');
        })

    });
    /*......鍏憡婊氬姩......*/
    function scrollNews(obj){
        var $self = obj.find("ul:first");
        var lineHeight = $self.find("li:first").height();
        $self.animate({ "margin-top" : -lineHeight +"px" },4000 , function(){
            $self.css({"margin-top":"0px"}).find("li:first").appendTo($self);
        })
    }

    function addEvaluate(){
        var flag=true;
        //获取估值参数
        wxName = $("#wxName").val();
        wxData = $("#weixin").val();
        fansData = $("#fansNum").val();
        readData = $("#readNum").val();
        createData = $("#isCreate :selected").val();
        admireData = $("#isAdmire :selected").val();
        isyuanc=$("#isCreate :selected").text()+","+$("#isAdmire :selected").text();
        mcData = $("#mainChange :selected").val();
        zhuti = $("#mainChange :selected").text();

        //微信号
        var wxmpNumFlag = ValidateUtils.checkWeixin(wxData);
        if (wxmpNumFlag != "ok") {
            layer.open({
                content: '微信号不正确',
                skin: 'msg',
                time: 2,
            });
            $("#sellgzhTwo").removeAttr("disabled");
            flag=false;
        }
        if(wxName==""){
            layer.open({
                content: '请填写公众号名称',
                skin: 'msg',
                time: 2,
            });
            flag=false;
        }
        var fansFlag = ValidateUtils.checkFansNumber(fansData);
        if (fansFlag != "ok") {
            layer.open({
                content: '粉丝数不正确',
                skin: 'msg',
                time: 2,
            });
            flag=false;
        }
        // readNum
        var readNumFlag = ValidateUtils.checkReadNum(readData);
        if (readNumFlag != "ok") {
            layer.open({
                content: '头条阅读数',
                skin: 'msg',
                time: 2,
            });
            flag=false;
        }
        if(createData==null||createData==''){
            layer.tips("请选择原创赞赏", '#isCreate', {
                tips: [2, '#0FA6D8'],
                tipsMore: true
            });
            flag=false;
        }
        if(admireData==null||admireData==''){
            layer.tips("选择是否开通赞赏功能", '#isAdmire', {
                tips: [2, '#0FA6D8'],
                tipsMore: true
            });
            flag=false;
        }
        if(mcData==null||mcData==''){
            layer.tips("主体变更情况", '#mainChange', {
                tips: [2, '#0FA6D8'], //
                tipsMore: true
            });
            flag=false;
        }
        if(flag){
            //开始估值
            valuation(fansData, createData);
            $("#guzhiprice").text((Math.round(minMoney)+Math.round(maxMoney))/2);
            $("#wxnamevalue").text(wxName);
            $("#sfnums").text(fansData);
            $("#toutiaonum").text(readData);
            $("#yuanc").text(isyuanc);
            $("#changzt").text(zhuti);
            $("#wordorder").text(rnd(9999,99999));
            $(".eva-div2-div2").hide();
            showdown();
            $(".conts").show();
            var _total=parseInt($("#allCount font").text());
            $("#allCount font").text(_total+1);

        }
    }
    //随机数
    function rnd(n, m){
        var random = Math.floor(Math.random()*(m-n+1)+n);
        return random;
    }
    /**
     * 估值方法
     * @param fansData 粉丝数量
     * @param readData 阅读量
     * @param createData 原创赞赏
     * @param admireData 是否开通赞赏功能
     * @param mcData 主体变更情况
     * @param gfData 粉丝组成情况
     */
    function valuation(fansData, createData) {

        //访问比例
        //var uvPercent = UVPercent(fansData, readData);
        console.log('得到的'+fansData+'--'+createData)
        //原创赞赏赞赏情况
        if (createData == 0) {
            createData = 0.9;
        } else if (createData == 1) {
            createData = 1.2;
        }

        //最大值和最小值
        var min = fansData * 0.5;
        var max = fansData * 0.8;

        //估值结果
        minMoney = min * createData;
        maxMoney = max * createData;

    }

    /**
     * 访问比例
     * @param fansNum
     * @param readNum
     * @constructor
     */
    function UVPercent(fansNum, readNum) {

        var percent = readNum / fansNum * 100;
        var reNum = 0;
        if (percent <= 3) {
            reNum =  0.4;
        } else if (percent > 3 && percent <= 5) {
            reNum =  0.5;
        } else if (percent > 5 && percent <= 7) {
            reNum =  0.7;
        } else if (percent > 7 && percent <= 8) {
            reNum =  0.8;
        } else if (percent > 8 && percent <= 10) {
            reNum =  1;
        } else if (percent > 10 && percent <= 12) {
            reNum =  1.05;
        } else if (percent > 12 && percent <= 15) {
            reNum =  1.1;
        } else if (percent > 15 && percent <= 20) {
            reNum =  1.3;
        } else if (percent > 20 && percent <= 25) {
            reNum =  1.35;
        } else if (percent > 25 && percent <= 30) {
            reNum =  1.4;
        } else if (percent > 30) {
            reNum =  1.5;
        }
        return reNum;
    }

</script>
<script>
    var ValidateUtils = {
        checkMobile:function(umobile){
            if(umobile==''|| $.trim(umobile).length==0){
                return "璇疯緭鍏ユ墜鏈哄彿 ";
            }
            if($.trim(umobile).length!=11){
                $("input[name='mobile']").val("");
                $("input[name='mobile']").focus();
                return "鎵嬫満鍙风爜闀垮害涓�11浣�";
            }
            //return umobile.match(/^1\d{10}$/);
            if(!umobile.match(/^1\d{10}$/)){
                $("input[name='mobile']").val("");
                $("input[name='mobile']").focus();
                return "鎮ㄨ緭鍏ョ殑鎵嬫満鍙风爜鏍煎紡鏈夎锛�";
            }
            return "ok";
        },
        checkPhone:function(umobile){
            if(umobile==''|| $.trim(umobile).length==0){
                return "璇疯緭鍏ユ墜鏈哄彿 ";
            }
            //return umobile.match(/^1\d{10}$/);
            if(!umobile.match(/^1\d{10}$/)){
                $("input[name='telephone']").val("");
                $("input[name='telephone']").focus();
                return "鎮ㄨ緭鍏ョ殑鎵嬫満鍙风爜鏍煎紡鏈夎锛�";
            }
            return "ok";
        },
        checkPassword : function(password){
            if(password==''|| $.trim(password).length==0){
                $("input[name='pwd']").val("");
                $("input[name='pwd']").focus();
                return "璇疯緭鍏ュ瘑鐮�";
            }
            if(!password.match(/^(?![A-Z]+$)(?![a-z]+$)(?!\d+$)(?![\W_]+$)[^\u4e00-\u9fa5]\S{5,17}$/)){
                $("input[name='pwd']").val("");
                $("input[name='pwd']").focus();
                return 	"瀵嗙爜鐢卞ぇ鍐欏瓧姣嶃€佸皬鍐欏瓧姣嶃€佹暟瀛楀拰瀛楃锛屼袱绉嶆垨涓ょ浠ヤ笂6-16浣嶇粍鎴�";
            }
            return "ok";
        },
        checkCode : function(code){
            if(code==''|| $.trim(code).length==0){
                $("input[name='smsCode']").val("");
                $("input[name='smsCode']").focus();
                return "璇锋偍杈撳叆楠岃瘉鐮�";
            }
            if(!code.match(/[0-9]{6}$/)){
                $("input[name='smsCode']").val("");
                $("input[name='smsCode']").focus();
                return 	"鎮ㄨ緭鍏ョ殑楠岃瘉鐮佹牸寮忔湁璇紝璇烽噸鏂拌緭鍏�";
            }
            return "ok";
        },
        checkPicCode : function(code){
            if(code==''|| $.trim(code).length==0){
                $("input[name='variCode']").val("");
                $("input[name='variCode']").focus();
                return "璇锋偍杈撳叆楠岃瘉鐮�";
            }
            if(!code.match(/\w{4}$/)){
                $("input[name='variCode']").val("");
                $("input[name='variCode']").focus();
                return 	"鎮ㄨ緭鍏ョ殑楠岃瘉鐮佹牸寮忔湁璇紝璇烽噸鏂拌緭鍏�";
            }
            return "ok";
        },
        checkFansNumber : function(code){
            if(code==''|| $.trim(code).length==0){
                $("input[name='fans']").val("");
                $("input[name='fans']").focus();
                return "璇锋偍杈撳叆绮変笣鏁伴噺";
            }
            //[1-9][0-9]{4,12}
            if(!code.match(/^[1-9][0-9]{0,8}$/)){
                $("input[name='fans']").val("");
                $("input[name='fans']").focus();
                return 	"鎮ㄨ緭鍏ョ殑绮変笣鏁伴噺鏍煎紡鏈夎锛岃閲嶆柊杈撳叆";
            }
            return "ok";
        },
        checkWprice : function(code){
            if(code==''|| $.trim(code).length==0){
                return "璇锋偍杈撳叆浠锋牸";
            }
            //[1-9][0-9]{4,12}
            if(!code.match(/^[1-9][0-9]{0,8}$/)){
                return 	"鎮ㄨ緭鍏ョ殑浠锋牸鏍煎紡鏈夎锛岃閲嶆柊杈撳叆";
            }
            return "ok";
        },
        checkReadNum : function(code){
            if(code==''|| $.trim(code).length==0){
                $("input[name='readNum']").val("");
                $("input[name='readNum']").focus();
                return "璇锋偍杈撳叆鍏紬鍙峰钩鍧囨湀闃呰鏁伴噺";
            }
            //[1-9][0-9]{4,12}
            if(!code.match(/^[1-9][0-9]{0,7}$/)){
                $("input[name='readNum']").val("");
                $("input[name='readNum']").focus();
                return 	"鎮ㄨ緭鍏ョ殑闃呰鏁伴噺鏍煎紡鏈夎锛岃閲嶆柊杈撳叆";
            }
            return "ok";
        },
        checkPicCode : function(code){
            if(code==''|| $.trim(code).length==0){
                $("input[name='variCode']").val("");
                $("input[name='variCode']").focus();
                return "璇锋偍杈撳叆鍥剧墖楠岃瘉鐮�";
            }
            if(!code.match(/\w{4}$/)){
                $("input[name='variCode']").val("");
                $("input[name='variCode']").focus();
                return 	"鎮ㄨ緭鍏ョ殑鍥剧墖楠岃瘉鐮佹牸寮忔湁璇紝璇烽噸鏂拌緭鍏�";
            }
            return "ok";
        },
        checkUserName :function(username){
            if(username==''|| $.trim(username).length==0){
                return "濮撳悕涓嶈兘涓虹┖锛岃閲嶆柊濉啓";
            }
            if(!username.match(/^(?!_)(?!.*?_$)[,锛孿.銆俓-銆侊紱;\锛�:\"鈥淺'锛�!_a-zA-Z0-9_\u4e00-\u9fa5]{2,25}$/)){
                $("input[name='userName']").val("");
                $("input[name='userName']").focus();
                return "鎮ㄨ緭鍏ョ殑鍚嶇О鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
            }
            return "ok";
        },
        checkCardID:function(cardID){
            if(cardID==''|| $.trim(cardID).length==0){
                return "璇疯緭鍏ヨ韩浠借瘉鍙� ";
            }
            if($.trim(cardID).length!=18 && $.trim(cardID).length!=15){
                $("input[name='inputCardID']").val("");
                $("input[name='inputCardID']").focus();
                return "鎮ㄨ緭鍏ョ殑韬唤璇佸彿鏈夎锛岃閲嶆柊杈撳叆";
            }
            ///^(^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$)|(^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])((\d{4})|\d{3}[Xx])$)$/
            if(!cardID.match(/^(^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$)|(^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])((\d{4})|\d{3}[Xx])$)$/)){
                $("input[name='inputCardID']").val("");
                $("input[name='inputCardID']").focus();
                return "鎮ㄨ緭鍏ョ殑韬唤璇佸彿鏈夎锛岃閲嶆柊杈撳叆";
            }
            return "ok";
        },
        checkBankCode:function(bankcode){
            if(bankcode==''|| $.trim(bankcode).length==0){
                return "璇疯緭鍏ラ摱琛屽崱鍙� ";
            }
            if($.trim(bankcode).length!=19 && $.trim(bankcode).length!=16){
                $("#bankcode").val("");
                $("#bankcode").focus();
                return "鎮ㄨ緭鍏ョ殑閾惰鍗″彿鏈夎";
            }
            if(!bankcode.match(/(([1-9])[\d]{18})|([1-9])[\d]{15}/)){
                $("#bankcode").val("");
                $("#bankcode").focus();
                return "鎮ㄨ緭鍏ョ殑閾惰鍗″彿鏈夎";
            }
            return "ok";
        },
        checkInputName:function(inputName){
            if(inputName==''|| $.trim(inputName).length<=0){
                return "璇疯緭鍏ョ湡瀹炲鍚� ";
            }
            ///^[\u4e00-\u9fa5]+$/
            if(!inputName.match(/^[\u4e00-\u9fa5]+$/)){
                $("input[name='inputName']").val("");
                $("input[name='inputName']").focus();
                return "鎮ㄨ緭鍏ョ殑濮撳悕鏈夎锛岃閲嶆柊杈撳叆";
            }
            return "ok";
        },
        checkQQ:function(iqq){
            if(iqq==''|| $.trim(iqq).length==0){
                return "璇疯緭鍏Q淇℃伅 ";
            }
            if(!iqq.match(/^[1-9][0-9]{4,12}/)){
                $("input[name='iqq']").val("");
                $("input[name='iqq']").focus();
                return "鎮ㄨ緭鍏ョ殑QQ鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
            }
            return "ok";
        },
        checkEmail:function(email){
            if(email==''|| $.trim(email).length==0){
                return "璇疯緭鍏ラ偖绠� ";
            }
            ///^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/
            //return !email.match(/^\\w+([-+.]\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*$/);
            if(!email.match(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/)){
                $("input[name='email']").val("");
                $("input[name='email']").focus();
                return "鎮ㄨ緭鍏ョ殑閭鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
            }
            return "ok";
        },
        checkWxmpName:function(wxmpName){
            if(wxmpName==''|| $.trim(wxmpName).length==0){
                return "璇锋偍杈撳叆寰俊鍏紬鍙峰悕绉� ";
            }
            //// \s  鍖归厤浠讳綍绌虹櫧瀛楃锛屽寘鎷┖鏍笺€佸埗琛ㄧ銆佹崲椤电绛夌瓑銆傜瓑浠蜂簬 [ \f\n\r\t\v]銆�
            //杈撳叆\s+ 浠ｈ〃鍖归厤1-n涓┖鏍�,鍙鐢ㄦ埛鍚嶄腑鏈変竴涓垨澶氫釜绌烘牸閮芥棤娉曢€氳繃楠岃瘉.
            //alert(userName.match(/^(?!_)(?!.*?_$)[a-zA-Z0-9_\u4e00-\u9fa5]{2,25}$/));
            if(!wxmpName.match(/^(?!_)(?!.*?_$)[,锛孿銆俓-.銆侊紱;\\锛�:\"鈥淺'锛�!_a-zA-Z0-9_\u4e00-\u9fa5]{2,25}$/)){
                $("input[name='wxmpName']").val("");
                $("input[name='wxmpName']").focus();
                return "鎮ㄨ緭鍏ョ殑寰俊鍏紬鍙峰悕绉版牸寮忔湁璇紝璇烽噸鏂拌緭鍏ワ紒";
            }
            return "ok";
        },
        checkSareaName:function(sareaName){
            if(sareaName==''|| $.trim(sareaName).length==0){
                return "璇锋偍杈撳叆鍦板尯鍚嶇О ";
            }
            //// \s  鍖归厤浠讳綍绌虹櫧瀛楃锛屽寘鎷┖鏍笺€佸埗琛ㄧ銆佹崲椤电绛夌瓑銆傜瓑浠蜂簬 [ \f\n\r\t\v]銆�
            //杈撳叆\s+ 浠ｈ〃鍖归厤1-n涓┖鏍�,鍙鐢ㄦ埛鍚嶄腑鏈変竴涓垨澶氫釜绌烘牸閮芥棤娉曢€氳繃楠岃瘉.
            //alert(userName.match(/^(?!_)(?!.*?_$)[a-zA-Z0-9_\u4e00-\u9fa5]{2,25}$/));
            if(!sareaName.match(/^(?!_)(?!.*?_$)[,锛孿銆俓-.銆侊紱;\\锛�:\"鈥淺'锛�!_a-zA-Z0-9_\u4e00-\u9fa5]{2,25}$/)){
                $("input[name='fsareaId']").val("");
                $("input[name='fsareaId']").focus();
                return "鎮ㄨ緭鍏ョ殑鍦板尯鍚嶇О鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
            }
            return "ok";
        },
        checkWeixin:function(weixin){
            if(weixin==''|| $.trim(weixin).length<1){
                return "微信号不可以为空";
            }
            return "ok";
        },
        checkDescript:function(reqDesc){
            if(!reqDesc.match(/^(?!_)(?!.*?_$)[,锛孿銆俓-.銆侊紱;\锛�:\"鈥淺'锛�!\%+?锛焅s_a-zA-Z0-9_\u4e00-\u9fa5]{1,300}$/)){
                $("input[name='descript']").val("");
                $("input[name='descript']").focus();
                return "鎮ㄦ渶澶氬彲浠ヨ緭鍏�300瀛楋紝璇风簿绠€鍚庡啀娆℃彁浜わ紒";
            }
            return "ok";
        },
        //杈撳叆閲戦姝ｅ垯鏍￠獙  -- ^((/^([1-9]\d*|0)(\.\d{1,2})?$/))$ 姝ｆ暣鏁般€佸皬鏁扮偣鍚庝袱浣�
        checkMoney:function(money){
            if(money==''|| $.trim(money).length==0){
                return "璇疯緭鍏ュ井淇″叕浼楀彿浠锋牸 ";
            }
            if(!money.match(/^([1-9]\d*|0{1,10})(\.\d{1,2})?$/)){
                $("input[name='wprice']").val("");
                $("input[name='wprice']").focus();
                return "鎮ㄨ緭鍏ョ殑浠锋牸鏈夎锛岃閲嶆柊杈撳叆锛�";
            }
            return "ok";
        },
        checkWmoney:function(money){
            if(money==''|| $.trim(money).length==0){
                return "璇疯緭鍏ユ祦閲忎富鏀跺叆 ";
            }
            if(!money.match(/^([1-9]\d*|0{1,10})(\.\d{1,2})?$/)){
                $("input[name='wprice']").val("");
                $("input[name='wprice']").focus();
                return "鎮ㄨ緭鍏ョ殑鏀跺叆鏈夎锛岃閲嶆柊杈撳叆锛�";
            }
            return "ok";
        },
        //浣庝簬100鐨勬鏁存暟鍜屾灏忔暟 ^100$|^(\d|[1-9]\d)(\.\d{1,2})*$ 姝ｆ暣鏁般€佸皬鏁扮偣鍚庝袱浣�
        checkGirlFans:function(girlFans){
            if(girlFans==''|| $.trim(girlFans).length==0){
                return "璇疯緭鍏ュ井淇″叕浼楀彿濂崇矇鍗犳瘮 ";
            }
            //^([1-9]\\d?|0)(\\.\\d{1,2})?$|100 js鏁存暟浣嶆牎楠屾湁璇�
            if(!girlFans.match(/^100$|^(\d|[1-9]\d)(\.\d{1,2})*$/)){
                $("input[name='girlFans']").val("");
                $("input[name='girlFans']").focus();
                return "鎮ㄨ緭鍏ョ殑濂崇矇鍗犳瘮鏈夎锛岃閲嶆柊杈撳叆锛�";
            }
            return "ok";
        },
        //杈撳叆鏁版嵁姝ｅ垯鏍￠獙  -- ^((/^([1-9]\d*|0)(\.\d{1,2})?$/))$ 姝ｆ暣鏁般€佸皬鏁扮偣鍚庝袱浣�
        checkAgentTc:function(money){
            if(money!=''&& $.trim(money).length!=0){
                if(!money.match(/^100$|^(\d|[1-9]\d)(\.\d{1,2})*$/)){
                    return "鎮ㄨ緭鍏ョ殑鎻愭垚姣斾緥鏈夎锛岃閲嶆柊杈撳叆锛�";
                }
            }
            return "ok";
        },
        /**
         * 鏍￠獙鎼滅储鍙傛暟
         */
        checkSearchParam:function(mobile,iqq,wwName,userName,examineName){
            //鎵嬫満鍙蜂笉涓簄ull  鏍￠獙
            if(mobile!=null && mobile!=''){
                /*if($.trim(mobile).length!=11){
                 $("input[name='mobile']").val("");
                 $("input[name='mobile']").focus();
                 return "鎵嬫満鍙风爜闀垮害涓�11浣嶏紝璇烽噸鏂拌緭鍏�";
                 }*/
                if(!mobile.match(/^1\d{1,10}$/)){
                    $("input[name='mobile']").val("");
                    $("input[name='mobile']").focus();
                    return "鎮ㄨ緭鍏ョ殑鎵嬫満鍙风爜鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
                }
            }
            //QQ鍙蜂笉涓簄ull  鏍￠獙
            if(iqq!=null && iqq!=''){
                if(!iqq.match(/^[1-9][0-9]{2,12}/)){
                    $("input[name='iqq']").val("");
                    $("input[name='iqq']").focus();
                    return "鎮ㄨ緭鍏ョ殑QQ鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
                }
            }
            //鏃烘椇鍙蜂笉涓簄ull  鏍￠獙
            if(wwName!=null && wwName!=''){
                if(!wwName.match(/^(?!_)(?!.*?_$)[,锛�.\銆俓-銆侊紱;\锛�:\"鈥淺'锛�!_a-zA-Z0-9_\u4e00-\u9fa5]{1,25}$/)){
                    $("input[name='wwName']").val("");
                    $("input[name='wwName']").focus();
                    return "鎮ㄨ緭鍏ョ殑鏃烘椇鍚嶇О鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
                }
            }
            //褰曞叆鑰呬笉涓簄ull  鏍￠獙
            if(userName!=null && userName!=''){
                //蹇呴』涓轰腑鏂�
                if(!userName.match(/^(?!_)(?!.*?_$)[,锛孿.銆俓-銆侊紱;\锛�:\"鈥淺'锛�!_a-zA-Z0-9_\u4e00-\u9fa5]{1,25}$/)){
                    $("input[name='userName']").val("");
                    $("input[name='userName']").focus();
                    return "鎮ㄨ緭鍏ョ殑褰曞叆鑰呮牸寮忔湁璇紝璇烽噸鏂拌緭鍏ワ紒";
                }
            }
            //澶勭悊浜� 蹇呴』涓轰腑鏂� 鏍￠獙
            if(examineName!=null && examineName!=''){
                if(!examineName.match(/^(?!_)(?!.*?_$)[,锛孿.銆俓-銆侊紱;\锛�:\"鈥淺'锛�!_a-zA-Z0-9_\u4e00-\u9fa5]{1,25}$/)){
                    $("input[name='examineName']").val("");
                    $("input[name='examineName']").focus();
                    return "鎮ㄨ緭鍏ョ殑鐢ㄦ埛鍚嶇О鏍煎紡鏈夎锛岃閲嶆柊杈撳叆锛�";
                }
            }
            return "success";
        }
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
          