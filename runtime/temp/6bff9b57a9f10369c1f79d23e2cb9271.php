<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"E:\mydemo\yikehao/application/admin\view\typelist\addtype.html";i:1544864419;s:59:"E:\mydemo\yikehao\application\admin\view\common\footer.html";i:1542697499;}*/ ?>
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

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $types['name']; ?>" placeholder="" id="name" name="name">
			</div>
		</div>


		<div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input type="hidden" value="<?php echo $types['tid']; ?>" name="tid" id="getid">
				<input class="btn btn-primary radius" id="form-admin-add" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>

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
<script type="text/javascript">
    $(function(){
        $("#form-admin-add").click(function () {
            var name=$("#name").val();
//            var num=$("#num").val();
            var id=$("#getid").val();
            if (name==''){
                layer.msg('有空字段',{icon:0,time:1000});
			}else{
                var lod=layer.load(0, {shade: false});
                $.post('',{'name':name,'tid':id},function (e) {
                    console.log(e);
                    var data=JSON.parse(e);
                    if (data.code){
                        var index = parent.layer.getFrameIndex(window.name);
                        layer.msg(data.msg,{icon:1,time:1000});
                        parent.location.reload();
                        //parent.$('.btn-refresh').click();
                        parent.layer.close(index);
                    }else{
                       layer.close(lod);
                        layer.msg(data.msg,{icon:0,time:1000});
                    }
                });
			}



        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>