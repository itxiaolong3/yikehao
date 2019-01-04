<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"E:\mydemo\yikehao/application/admin\view\selllist\index.html";i:1546615532;s:59:"E:\mydemo\yikehao\application\admin\view\common\header.html";i:1546615532;s:59:"E:\mydemo\yikehao\application\admin\view\common\footer.html";i:1546615532;}*/ ?>
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
    <style>
        /*分页*/
        .pagination {
            margin-top: 20px;

        }
        .pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}
        .pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}
        .pagination li a {display: block;text-align: center;}
    </style>
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
        <?php else: endif; if(in_array((9), is_array($ids)?$ids:explode(',',$ids))): ?>
        <dl id="menu-selllist">
            <dt><i class="Hui-iconfont">&#xe715;</i> 卖号管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li id="selllist"><a href="<?php echo url('admin/selllist/index'); ?>" title="账号列表">账号列表</a></li>
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
                    <li id="myorder"><a href="<?php echo url('admin/Orderlist/myorder'); ?>" title="我的订单">我的订单</a></li>
                </ul>
            </dd>
        </dl>

    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
</div>
<!--/_menu 作为公共模版分离出去-->
<style>
	.findstyle{
		display: flex;
	}
</style>
<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <a href="<?php echo url('admin/Index/index'); ?>">首页</a>
		<span class="c-gray en">&gt;</span>
		卖号管理
		<span class="c-gray en">&gt;</span>
		账号列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a> </nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="findstyle">
				<form class="c8 layui-form" action="" lay-filter="form">
					<div class="layui-input-inline">
						<select name="type">
							<?php if(($types == 3) or($types == '')): ?>
							<option value="3" selected>全部类型</option>
							<?php else: ?><option value="3" selected>全部类型</option><?php endif; if(($types == 1)): ?>
							<option value="1" selected>已审核</option>
							<?php else: ?><option value="1">已审核</option><?php endif; if(($types == 0)): ?>
							<option value="0" selected>待审核</option>
							<?php else: ?><option value="0">待审核</option><?php endif; if(($types == 2)): ?>
							<option value="2" selected>已拒绝</option>
							<?php else: ?><option value="2">已拒绝</option><?php endif; ?>

						</select>
					</div>
				</form>
				<div class="text-c" style="margin-left: 10px;margin-top: 3px;">
					<input type="text" class="input-text" style="width:250px" placeholder="输入手机号" id="keyword" value="<?php echo $keyword; ?>" name="keyword">
					<button type="submit" class="btn btn-success" id="findkeyword" name=""><i class="Hui-iconfont">&#xe665;</i> 查找</button>
				</div>
			</div>

			<table class="table table-border table-bordered table-bg">
				<thead>
				<tr>
					<th scope="col" colspan="9">账号列表</th>
				</tr>
				<tr class="text-c">
					<th width="150">名称</th>
					<th width="90">价格</th>
					<th width="130">粉丝量</th>
					<th width="130">类型</th>
					<th width="130">分类</th>
					<th width="150">认证情况</th>
					<th width="100">流量主</th>
					<th width="100">审核状态</th>
					<th width="100">手机号</th>
					<th width="100">注册时间</th>
					<th width="100">操作</th>
				</tr>
				</thead>
				<tbody>
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><?php echo $vo['zhname']; ?></td>
					<td><?php echo $vo['price']; ?></td>
					<td><?php echo $vo['fansnum']; ?></td>
					<td><?php echo $vo['name']; ?></td>
					<td><?php echo $vo['fortypetext']; ?></td>
					<td><?php if($vo['isrz'] == 0): ?>未认证
						<?php elseif($vo['isrz'] == 1): ?>个人认证<?php else: ?>企业认证<?php endif; ?></td>
					<td><?php if($vo['isliu'] == 0): ?>未开通<?php else: ?>已开通<?php endif; ?></td>
					<td class="td-status"><?php if($vo['state'] == 1): ?><span class="label label-success radius">已通过</span>
						<?php elseif($vo['state'] == 2): ?><span class="label label-warning radius">被拒绝</span>
						<a onclick="showreason('<?php echo $vo['nopassdesc']; ?>')" href="javascript:;" style="background-color: #0da3f9;color: white;padding: 1px 8px;">理由</a>
						<?php else: ?><span class="label radius">待审核</span><?php endif; ?></td>
					<td><?php echo $vo['phone']; ?></td>
					<td><?php echo $vo['regtime']; ?></td>
					<td class="td-manage">
						<?php if(($vo['state'] == 0)): ?>
						<a style="text-decoration:none" onclick="selllist_nopass('填写拒绝理由',
						'<?php echo url('admin/selllist/reason',['id'=>$vo['id']]); ?>','1','','310')"
						   href="javascript:;" title="拒绝">
							<i class="Hui-iconfont">&#xe631;拒绝</i>
						</a>
						<a style="text-decoration:none;margin-left: 5px;" onClick="selllist_start(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="通过"><i class="Hui-iconfont">&#xe615;通过</i></a>
						<?php elseif($vo['state'] == 1): ?>
						<a style="text-decoration:none" onclick="selllist_nopass('填写拒绝理由',
						'<?php echo url('admin/selllist/reason',['id'=>$vo['id']]); ?>','1','','310')"
						   href="javascript:;" title="拒绝">
							<i class="Hui-iconfont">&#xe631;拒绝</i>
						</a>
						<?php else: ?><a style="text-decoration:none" onClick="selllist_start(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="通过"><i class="Hui-iconfont">&#xe615;通过</i></a><?php endif; ?>
						<a title="编辑" href="javascript:;" onclick="selllist_edit('编辑/查看','<?php echo url('admin/selllist/detail',['id'=>$vo['id']]); ?>')" class="ml-5" style="text-decoration:none">
							<i class="Hui-iconfont">&#xe6df;</i>详细</a>
						<a title="删除" href="javascript:;" onclick="selllist_del(this,'<?php echo $vo['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>


				</tbody>
			</table>
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
    layui.use(['form','layer'], function(){
        var form = layui.form;
        var layer = layui.layer;
        //监听提交
        form.on('select()', function(data){
            window.location.href="<?php echo url('admin/selllist/index'); ?>?type="+data.value;
            console.log("选择值"+data.value);
        });
    });
</script>
<script type="text/javascript">
    $("#menu-selllist dd").css('display','block');
    $("#selllist").addClass("current");
    //    搜索
    $("#findkeyword").click(function () {
        layer.load();
        var getkeyword=$('#keyword').val();
        window.location.href="<?php echo url('admin/selllist/index'); ?>?keyword="+getkeyword;

    })
    /*
        参数解释：
        title	标题
        url		请求的url
        id		需要操作的数据id
        w		弹出层宽度（缺省调默认值）
        h		弹出层高度（缺省调默认值）
    */
    /*账号-增加*/
    function selllist_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*账号-删除*/
    function selllist_del(obj,id){
        layer.confirm('删除后不可恢复，是否继续？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……
            var lod=layer.load(0, {shade: false});
            $.post('',{id:id},function (e) {
                var data=JSON.parse(e);
                if (data.code){
                    $(obj).parents("tr").remove();
                    var index = parent.layer.getFrameIndex(window.name);
                    layer.msg(data.msg,{icon:1,time:1000});
                    parent.$('.r').click();
                    layer.close(lod);
                    parent.layer.close(index);
                }else{
                    layer.msg(data.msg,{icon:0,time:1000});
                }
            });
        });
    }
    /*账号-编辑*/
    function selllist_edit(title,url,w,h){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
        //layer_show(title,url,w,h);
    }
    /*账号-停用*/
    /*管理员-权限-编辑*/
    function selllist_nopass(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
	function showreason(str) {
        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['420px', '240px'], //宽高
            content: "<span style='padding: 20px;'>"+str+"</span>"
        });
    }
    /*账号-启用*/
    function selllist_start(obj,id){
        layer.confirm('确认要通过吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……
            var lod=layer.load(0, {shade: false});
            $.post("<?php echo url('admin/selllist/stoppass'); ?>",{id:id,state:1},function (e) {
                var data=JSON.parse(e);
                if (data.code){
                    var index = parent.layer.getFrameIndex(window.name);
                    layer.msg(data.msg,{icon:1,time:1000});
                    location.replace(location.href);
                    layer.close(lod);
                    parent.layer.close(index);
                }else{
                    layer.msg(data.msg,{icon:5,time:1000});
                }
            });
//            $(obj).parents("tr").find(".td-manage").prepend('<a onClick="selllist_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
//            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
//            $(obj).remove();
            //layer.msg('已启用!', {icon: 6,time:1000});
        });
    }
</script>
</body>
</html>