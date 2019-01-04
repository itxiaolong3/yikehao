<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"E:\mydemo\yikehao/application/admin\view\orderlist\viporder.html";i:1546515167;s:59:"E:\mydemo\yikehao\application\admin\view\common\header.html";i:1546515333;s:59:"E:\mydemo\yikehao\application\admin\view\common\footer.html";i:1542697499;}*/ ?>
﻿<!--引入头部文件，如css-->
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/yikehao/public/static/h-admin/lib/html5.js"></script>
    <script type="text/javascript" src="/yikehao/public/static/h-admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/h-admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/h-admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/h-admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/h-admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/yikehao/public/static/h-admin/static/h-ui.admin/css/style.css" />
    <!--layer-->
    <link href="/yikehao/public/static/layer/css/layui.css" rel="stylesheet">
    <script src="/yikehao/public/static/layer/layui.js" charset="utf-8"></script>
    <!--layer结束-->
    <!--[if IE 6]>
    <!--编辑器-->
    <script type="text/javascript" charset="utf-8" src="/yikehao/public/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/yikehao/public/static/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/yikehao/public/static/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!--编辑器-->
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>后台管理系统</title>
    <meta name="keywords" content="后台管理系统">
    <meta name="description" content="后台管理系统">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"><a class="logo navbar-logo f-l mr-10 hidden-xs">后台管理系统</a>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"><a href="#" class="dropDown_A">在线 <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="<?php echo url('admin/Login/loginout'); ?>">退出</a></li>
                        </ul>
                    </li>
                    <li>超级管理员</li>


                    <!--<li id="Hui-skin" class="dropDown right dropDown_hover"><a href="javascript:;" class="dropDown_A"-->
                                                                               <!--title="换肤"><i class="Hui-iconfont"-->
                                                                                             <!--style="font-size:18px">&#xe62a;</i></a>-->
                        <!--<ul class="dropDown-menu menu radius box-shadow">-->
                            <!--<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>-->
                            <!--<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>-->
                            <!--<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>-->
                            <!--<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>-->
                            <!--<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>-->
                            <!--<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>-->
                        <!--</ul>-->
                    <!--</li>-->
                </ul>
            </nav>
        </div>
    </div>
</header>
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <?php if(in_array((3), is_array($ids)?$ids:explode(',',$ids))): ?>
        <dl id="menu-banner">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 轮播图管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li id="bannerlist"><a href="<?php echo url('admin/banner/index'); ?>" title="订单列表">轮播图列表</a></li>
                </ul>
            </dd>
        </dl>
        <?php else: endif; if(in_array((4), is_array($ids)?$ids:explode(',',$ids))): ?>
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li id="userlist"><a href="<?php echo url('admin/Userlist/index'); ?>" title="用户列表">用户列表</a></li>
                </ul>
            </dd>
        </dl>
        <?php else: endif; if(in_array((2), is_array($ids)?$ids:explode(',',$ids))): ?>
        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 配置管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('admin/Configs/index'); ?>" title="配置信息">配置信息</a></li>
                    <li id="aboutme"><a href="<?php echo url('admin/Aboutme/index'); ?>" title="关于我们">关于我们</a></li>
                    <li id="xieyi"><a href="<?php echo url('admin/Xieyi/index'); ?>" title="用户协议">用户协议</a></li>
                </ul>
            </dd>
        </dl>
        <?php else: endif; if(in_array((1), is_array($ids)?$ids:explode(',',$ids))): ?>
        <dl id="menu-admin">
            <dt ><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li id="permission"><a href="<?php echo url('admin/permission/index'); ?>" title="权限管理">权限管理</a></li>
                    <li id="adminlist"><a href="<?php echo url('admin/adminlist/index'); ?>" title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
        <?php else: endif; if(in_array((5), is_array($ids)?$ids:explode(',',$ids))): ?>
        <dl id="menu-type">
            <dt ><i class="Hui-iconfont">&#xe681;</i> 类型管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li id="types"><a href="<?php echo url('admin/typelist/index'); ?>" title="属性类型">属性类型</a></li>
                    <li id="haotypes"><a href="<?php echo url('admin/haotype/index'); ?>" title="属性类型">号类型</a></li>
                </ul>
            </dd>
        </dl>
        <?php else: endif; if(in_array((6), is_array($ids)?$ids:explode(',',$ids))): ?>
        <dl id="menu-ser">
            <dt ><i class="Hui-iconfont">&#xe616;</i> 服务中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li id="news"><a href="<?php echo url('admin/sernewlist/index'); ?>" title="新闻列表">新闻列表</a></li>
                    <li id="prob"><a href="<?php echo url('admin/serproblist/index'); ?>" title="问题列表">问题列表</a></li>
                </ul>
            </dd>
        </dl>
        <?php else: endif; ?>
        <dl id="menu-orderlist">
            <dt ><i class="Hui-iconfont">&#xe616;</i> 订单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <?php if(in_array((7), is_array($ids)?$ids:explode(',',$ids))): ?>
                    <li id="viporder"><a href="<?php echo url('admin/Orderlist/viporder'); ?>" title="会员订单">会员订单</a></li>
                    <?php else: endif; if(in_array((8), is_array($ids)?$ids:explode(',',$ids))): ?>
                    <li id="order"><a href="<?php echo url('admin/Orderlist/index'); ?>" title="买号订单">买号订单</a></li>
                    <?php else: endif; ?>
                </ul>
            </dd>
        </dl>

    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
</div>
<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <a href="<?php echo url('admin/Index/index'); ?>">首页</a> <span class="c-gray en">&gt;</span> 会员订单管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<!--<form class="Huiform" method="post" action="" target="_self">-->
				<input type="text" class="input-text" style="width:250px" placeholder="订单号、手机号" id="keyword" value="<?php echo $keyword; ?>" name="keyword">
				<button type="submit" class="btn btn-success" id="findkeyword"><i class="Hui-iconfont">&#xe665;</i> 搜订单</button>
				<!--</form>-->
			</div>
			<div class="mt-10">
				<table class="table table-border table-bordered table-hover table-bg">
					<thead>
					<tr>
						<th scope="col" colspan="7">订单管理</th>
					</tr>
					<tr class="text-c">
						<th width="40">ID</th>
						<th width="70">用户名</th>
						<th width="100">密码</th>
						<th width="110">微信</th>
						<th width="100">手机号</th>
						<th width="100">QQ</th>
						<th width="70">注册时间</th>
					</tr>
					</thead>
					<tbody>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<tr class="text-c">
						<td><?php echo $vo['uid']; ?></td>
						<td><?php echo $vo['username']; ?></td>
						<td><?php echo $vo['psw']; ?></td>
						<td><?php echo $vo['wx']; ?></td>
						<td><?php echo $vo['phone']; ?></td>
						<td><?php echo $vo['qq']; ?></td>
						<td><?php echo $vo['addtime']; ?></td>
						<!--<td class="f-14">-->
						<!--<a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>-->
						<!--</td>-->
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</div>
		</article>
	</div>
</section>
<!--这里写引入的js文件-->
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/yikehao/public/static/h-admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/yikehao/public/static/h-admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/yikehao/public/static/h-admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/yikehao/public/static/h-admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/yikehao/public/static/h-admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/yikehao/public/static/h-admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/yikehao/public/static/h-admin/lib/laypage/1.2/laypage.js"></script>
<script>
    $("#menu-orderlist dd").css('display','block');
    $("#viporder").addClass("current");
    //搜索
    $("#findkeyword").click(function () {
        layer.load();
        var getkeyword=$('#keyword').val();
        //$.post("",{keyword:getkeyword},function (a) {
        window.location.href="<?php echo url('admin/userlist/index'); ?>?keyword="+getkeyword;
        // })

    })
    /*管理员-角色-删除*/
    function admin_role_del(obj,id){
        layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……


            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>