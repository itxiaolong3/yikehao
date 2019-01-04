<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"E:\mydemo\yikehao/application/admin\view\selllist\detail.html";i:1546615532;s:59:"E:\mydemo\yikehao\application\admin\view\common\footer.html";i:1546615532;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
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
<article class="cl pd-20">

	<form class="layui-form">
		<div class="layui-form-item" style="padding-top: 20px;">
			<label class="layui-form-label" style="width: 100px;">公众名称:</label>
			<div class="layui-input-inline">
				<input type="text" id="titlename" name="zhname" value="<?php echo $info['zhname']; ?>" lay-verify="titlename" autocomplete="off" placeholder="公众号名称" class="layui-input">
			</div>
			<label class="layui-form-label" style="width: 100px;">售价:</label>
			<div class="layui-input-inline">
				<input type="number" id="price" name="price" value="<?php echo $info['price']; ?>" lay-verify="price" autocomplete="off" placeholder="您的价格" class="layui-input">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 100px;">粉丝数量:</label>
			<div class="layui-input-inline">
				<input type="number" id="fsnum" name="fsnum" value="<?php echo $info['fansnum']; ?>"  autocomplete="off" placeholder="粉丝数量" class="layui-input">
			</div>
			<label class="layui-form-label" style="width: 100px;">注册日期</label>
			<div class="layui-input-inline">
				<input type="text" name="dates" id="date" value="<?php echo $info['regtime']; ?>"  placeholder="年-月-日" autocomplete="off" class="layui-input">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 100px;">账号类型:</label>
			<div class="layui-input-inline">
				<?php if(is_array($haotype) || $haotype instanceof \think\Collection || $haotype instanceof \think\Paginator): $k = 0; $__LIST__ = $haotype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($vo['htid']==$info['type']): ?>
				<input type="radio" name="gztype" lay-verify="gztype" value="<?php echo $vo['htid']; ?>"  checked title="<?php echo $vo['name']; ?>">
				<?php else: ?>
				<input type="radio" name="gztype" lay-verify="gztype" value="<?php echo $vo['htid']; ?>" title="<?php echo $vo['name']; ?>">
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 100px;">行业分类:</label>
			<div class="layui-input-block">
				<?php if(is_array($alltype) || $alltype instanceof \think\Collection || $alltype instanceof \think\Paginator): $k = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(in_array(($vo['tid']), is_array($info['fortype'])?$info['fortype']:explode(',',$info['fortype']))): ?>
				<input type="checkbox" name="hyftype" value="<?php echo $vo['tid']; ?>|<?php echo $vo['name']; ?>" checked lay-skin="primary" title="<?php echo $vo['name']; ?>">
				<?php else: ?>
				<input type="checkbox" name="hyftype" value="<?php echo $vo['tid']; ?>|<?php echo $vo['name']; ?>" lay-skin="primary" title="<?php echo $vo['name']; ?>">
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>

		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 100px;">认证主体:</label>
			<div class="layui-input-block">
				<input type="radio" name="renz" <?php echo $info['isrz']==0?'checked':''; ?> value="0" title="未认证">
				<input type="radio" name="renz" <?php echo $info['isrz']==1?'checked':''; ?> value="1" title="个人认证">
				<input type="radio" name="renz" <?php echo $info['isrz']==2?'checked':''; ?> value="2" title="企业认证">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 100px;">开通原创:</label>
			<div class="layui-input-block">
				<input type="radio" name="yuanc" <?php echo $info['yuanorzan']==0?'checked':''; ?> value="0" title="未开通">
				<input type="radio" name="yuanc" <?php echo $info['yuanorzan']==1?'checked':''; ?> value="1" title="原创">
				<input type="radio" name="yuanc" <?php echo $info['yuanorzan']==2?'checked':''; ?> value="2" title="赞赏">
				<input type="radio" name="yuanc" <?php echo $info['yuanorzan']==3?'checked':''; ?> value="3" title="原创赞赏">

			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 100px;">粉丝偏向:</label>
			<div class="layui-input-block">
				<input type="radio" name="fens" <?php echo $info['sexbli']==0?'checked':''; ?> value="0" title="男女平衡">
				<input type="radio" name="fens" <?php echo $info['sexbli']==1?'checked':''; ?> value="1" title="男居多">
				<input type="radio" name="fens" <?php echo $info['sexbli']==2?'checked':''; ?> value="2" title="女居多">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label" style="width: 100px;">流量主:</label>
			<div class="layui-input-block" id="liulz">
				<input type="radio" name="liul" <?php echo $info['isliu']==0?'checked':''; ?> value="0" title="未开通" lay-filter="liul">
				<input type="radio" name="liul" <?php echo $info['isliu']==1?'checked':''; ?> value="1" title="已开通" lay-filter="liul">
			</div>
		</div>
		<div class="layui-form-item" style="padding-top: 20px;">
			<div class="mothget ishidden">
				<label class="layui-form-label" style="width: 110px;">流量主月入:</label>
				<div class="layui-input-inline">
					<input type="text" id="liulianget" value="<?php echo $info['getmonth']; ?>" name="getmonth" lay-verify="liulianget" autocomplete="off" placeholder="0" class="layui-input">
				</div>
			</div>

			<label class="layui-form-label" style="width: 100px;">联系方式:</label>
			<div class="layui-input-inline">
				<input type="text" id="phone" name="phone" lay-verify="phone" value="<?php echo $info['phone']; ?>" autocomplete="off" placeholder="联系方式" class="layui-input">
			</div>
		</div>
		<div class="layui-form-item" style="padding-top: 20px;">
			<label class="layui-form-label" style="width: 100px;">UV值:</label>
			<div class="layui-input-inline">
				<input type="text" id="uv" name="uv" value="<?php echo $info['UV']; ?>" lay-verify="uv" autocomplete="off" placeholder="UV值" class="layui-input">
			</div>
			<label class="layui-form-label" style="width: 120px;">头条阅读数:</label>
			<div class="layui-input-inline">
				<input type="number" id="tounum" name="tounum" value="<?php echo $info['headernum']; ?>" lay-verify="weig" autocomplete="off" placeholder="0" class="layui-input">
			</div>
		</div>
		<div class="layui-form-item" style="padding-top: 20px;">
			<label class="layui-form-label" style="width: 100px;">封号次数:</label>
			<div class="layui-input-inline">
				<input type="number" id="weig" name="weig" value="<?php echo $info['weiguinum']; ?>" lay-verify="weig" autocomplete="off" placeholder="0" class="layui-input">
			</div>
		</div>
		<div class="layui-form-item" style="padding-top: 20px;">
			<label class="layui-form-label" style="width: 100px;">卖家描述</label>
			<div class="layui-input-block" style="margin-right: 23px;">
				<textarea placeholder="请输入描述内容" class="layui-textarea" name="desc"><?php echo $info['desc']; ?></textarea>
			</div>
		</div>

		<div class="layui-form-item" style="padding-top: 20px;">

			<div class="formControls col-xs-6 col-sm-7">
				<div class="layui-upload col-sm-10">

					<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;width: 95%;margin-left: 20px;">
						附图：

							<?php if(is_array($imgarr) || $imgarr instanceof \think\Collection || $imgarr instanceof \think\Paginator): $i = 0; $__LIST__ = $imgarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div><img src="<?php echo $vo; ?>"/></div>
							<?php endforeach; endif; else: echo "" ;endif; ?>

					</blockquote>
				</div>
			</div>

		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="demo1" id="postinfo" style="width: 120px;">提交修改</button>
			</div>
		</div>
	</form>
</article>

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
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,upload = layui.upload
            ,laydate = layui.laydate;
        //监听提交
        form.on('select()', function(data){

        });
    });
</script>
<script type="text/javascript">
    $(function(){
        $("#form-admin-add").click(function () {

        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>