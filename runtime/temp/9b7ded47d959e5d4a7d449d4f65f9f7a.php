<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"E:\mydemo\yikehao/application/admin\view\adminlist\adminadd.html";i:1546056608;s:59:"E:\mydemo\yikehao\application\admin\view\common\footer.html";i:1542697499;}*/ ?>
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
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $admininfo['rolename']; ?>" placeholder="客服"  id="rolename" name="rolename">
			</div>
		</div>
		<div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>登录用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $admininfo['adminname']; ?>" placeholder="用户名" id="loginname" name="loginname">
			</div>
		</div>
		<div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" value="<?php echo $admininfo['psw']; ?>" placeholder="密码" id="password" name="password">
			</div>
		</div>
		<div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" value="<?php echo $admininfo['psw']; ?>"  placeholder="确认新密码" id="password2" name="password2">
			</div>
		</div>
		<div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $admininfo['phone']; ?>" placeholder="手机号" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>QQ：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $admininfo['qq']; ?>" placeholder="QQ" id="qq" name="qq">
			</div>
		</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">设置权限：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<dl class="permission-list">
				<dt>
					<label><input type="checkbox" value="" name="user-Character-0" id="user-Character-0">所有权限</label>
				</dt>
				<dd style="display:flex;flex-wrap: wrap;">
					<?php if(is_array($rootlist) || $rootlist instanceof \think\Collection || $rootlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rootlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<dl class="cl permission-list2" >
						<dt>
							<label class="">
								<?php if(in_array(($vo['id']), is_array($rootids)?$rootids:explode(',',$rootids))): ?>
								<input type="checkbox" checked value="<?php echo $vo['id']; ?>" name="ids" ><?php echo $vo['name']; else: ?>
								<input type="checkbox" value="<?php echo $vo['id']; ?>" name="ids" ><?php echo $vo['name']; endif; ?>

							</label>
						</dt>
					</dl>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</dd>
			</dl>
		</div>
	</div>
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9">-->
				<!--<input type="text" class="input-text" value="" placeholder="" id="phone" name="phone">-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3">角色：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">-->
				<!--<select class="select" name="adminRole" size="1">-->
					<!--<option value="0">超级管理员</option>-->
					<!--<option value="1">总编</option>-->
					<!--<option value="2">栏目主辑</option>-->
					<!--<option value="3">栏目编辑</option>-->
				<!--</select>-->
				<!--</span> </div>-->
		<!--</div>-->
		<!--<div class="row cl">-->
			<!--<label class="form-label col-xs-4 col-sm-3">备注：</label>-->
			<!--<div class="formControls col-xs-8 col-sm-9">-->
				<!--<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"></textarea>-->
				<!--<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>-->
			<!--</div>-->
		<!--</div>-->
		<div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input type="hidden" value="<?php echo $admininfo['id']; ?>" name="id" id="getid">
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
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form-admin-add").click(function () {
            var getids=jqchk();
            console.log(getids);
            var rolename=$("#rolename").val();
            var loginnmae=$("#loginname").val();
            var psw=$("#password").val();
            var psw2=$("#password2").val();
            var id=$("#getid").val();
            var phone=$("#phone").val();
            var qq=$("#qq").val();
            if (psw!=psw2){
                layer.msg('密码不一致',{icon:0,time:1000});
            }else if(phone==''){
                layer.msg('请填手机号',{icon:0,time:1000});
			}else if(qq==''){
                layer.msg('请填qq',{icon:0,time:1000});
            }else if(rolename==''||loginnmae==''||psw==''){
                layer.msg('请填完数据',{icon:0,time:1000});
			}else{
                layer.load(0, {shade: false});
                $.post('',{'adminname':loginnmae,'psw':psw,'rolename':rolename,'id':id,'rootnum':getids,'phone':phone,'qq':qq},function (e) {
                    console.log(e);
                    var data=JSON.parse(e);
                    if (data.code){
                        var index = parent.layer.getFrameIndex(window.name);
                        layer.msg(data.msg,{icon:1,time:1000});
                        parent.location.reload();
                        //parent.$('.btn-refresh').click();
                        parent.layer.close(index);
                    }else{
                        layer.msg(data.msg,{icon:0,time:1000});
                    }
                });
            }

        });

        $(".permission-list dt input:checkbox").click(function(){
            $(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
        });
        $(".permission-list2 dt input:checkbox").click(function(){
            var l =$(this).parent().parent().find("input:checked").length;
            var l2=$(this).parents(".permission-list").find(".permission-list2 dt").find("input:checked").length;
            if($(this).prop("checked")){
                $(this).closest("dl").find("dt input:checkbox").prop("checked",true);
                $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
            }
            else{
                if(l==0){
                    $(this).closest("dl").find("dt input:checkbox").prop("checked",false);
                }
                if(l2==0){
                    $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
                }
            }
        });
        //获取选中的值
        function jqchk(){ //jquery获取复选框值
            var chk_value ='';
            $('input[name="ids"]:checked').each(function(){
                //chk_value.push($(this).val());
                chk_value+=$(this).val()+',';
            });
            return chk_value.substring(0, chk_value.lastIndexOf(','));
        }

    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>