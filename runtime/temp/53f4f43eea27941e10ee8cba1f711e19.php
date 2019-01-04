<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"E:\mydemo\yikehao/application/admin\view\sernewlist\addnews.html";i:1545124132;s:59:"E:\mydemo\yikehao\application\admin\view\common\footer.html";i:1542697499;}*/ ?>
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
    <!--编辑器-->
    <script type="text/javascript" charset="utf-8" src="/yikehao/public/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/yikehao/public/static/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/yikehao/public/static/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!--编辑器-->
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>后台管理系统</title>
    <meta name="keywords" content="后台管理系统">
    <meta name="description" content="后台管理系统">
</head>

        <article class="cl pd-20">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">标题：</label>
                    <div class="formControls col-xs-6 col-sm-7">
                        <input type="text" name="title"  placeholder="" value="<?php echo $newsinfo['title']; ?>" id="title" class="input-text">
                    </div>
                </div>
            <div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
                <label class="form-label col-xs-4 col-sm-2">内容简要：</label>
                <div class="formControls col-xs-6 col-sm-7">
                    <input type="text" name="desc"  placeholder="" value="<?php echo $newsinfo['desc']; ?>" id="desc" class="input-text">
                </div>
            </div>
            <div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
                <label class="form-label col-xs-4 col-sm-2">首图：</label>
                <div class="formControls col-xs-6 col-sm-7">
                    <div class="layui-upload col-sm-10">
                        <button type="button" class="layui-btn" id="test1">选择图片</button>
                        <div class="layui-upload-list">

                            <?php if($newsinfo['titleimg'] == ''): ?>
                                <input type="hidden" id="file_upload_image" required="required" name="titleimg" multiple="true" value=""/>
                                <div id="showimg"></div>
                                <p id="demoText"></p>
                                <?php else: ?>
                                <input type="hidden" id="file_upload_image" required="required"
                                       name="gtopimg" multiple="true" value="<?php echo $newsinfo['titleimg']; ?>"/>
                                <div id="showimg">
                                    <li><img class='layui-upload-img' id='showone' src="<?php echo $newsinfo['titleimg']; ?>" style='width:100px;height:100px;'>
                                        <img class='button' onclick="deletefimg('<?php echo $newsinfo['titleimg']; ?>');" id='oneimgclose' src="/yikehao/public/static/layer/images/fancy_close.png">
                                    </li>
                                </div>
                                <p id="demoText"></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">新闻内容：</label>
                <div class="formControls col-xs-6 col-sm-7">
                    <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
                </div>

            </div>
                <div class="row cl" style="margin-top: 15px;margin-bottom: 15px;">
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                        <input type="hidden" value="<?php echo $newsinfo['id']; ?>" name="id" id="getid">
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

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    layui.use('upload', function(){
        var $ = layui.jquery
            ,upload = layui.upload;
        //图片上传
        var uploadInst = upload.render({
            elem: '#test1'
            ,url: "<?php echo url('admin/Configs/upImg'); ?>"
            ,before: function(obj){
            }
            ,done: function(res){
                //如果上传失败
                if(res.code > 0){
                    return layer.msg('上传失败');
                }
                console.log(res);
                //var obj=JSON.parse(res);
                console.log(res.data);
                var newElement = "<li><img class='layui-upload-img' id='showone' src='"+res.data
                    + "' style='width:200px;height:200px;'>" +
                    "<img class='button' id='oneimgclose' src="+"/yikehao/public/static/layer/images/fancy_close.png"+"></li>";

                    if($("#file_upload_image").val()==''){
                        console.log('为空中设值')
                        $("#showimg").append(newElement);//deleteqrcodeimg
                        $("#file_upload_image").attr('value',res.data);
                    }else{
                        console.log('已存在中设值')
                        $("#file_upload_image").attr('value',res.data);
                        $("#showone").attr('src',res.data);
                    }


                $("#oneimgclose").bind("click", deletefimg);
                $('#demo1').show();
                //上传成功
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });

    });
    function dopost() {
        layer.msg('已保存',{icon:1,time:800});
        $('#form-article-add').submit();
    }

</script>
<script>
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    //setContent("<?php echo $newsinfo['contents']; ?>");
    // editor准备好之后才可以使用
    ue.addListener("ready", function () {
        //赋值
        ue.setContent('<?php echo $newsinfo['contents']; ?>');
    });

    $(function () {
         ue = UE.getEditor('editor');

        $("#form-admin-add").click(function () {
            var ishava = ue.hasContents();
            var title=$("#title").val();
            var desc=$("#desc").val();
            var comment=$("#comment").val();
            var titleimg=$("#file_upload_image").val();
            var id=$("#getid").val();
           var contents=ue.getContent();
            if (titleimg==''){
                layer.msg('请上传图片',{icon:0,time:1000});
            }else if(!ishava){
                layer.msg('新闻内容不可为空',{icon:0,time:800});
            }else{
                var lod=layer.load(0, {shade: false});
                $.post('',{'titleimg':titleimg,'id':id,'title':title,'desc':desc,'contents':contents},function (e) {
                    console.log(e);
                    var data=JSON.parse(e);
                    if (data.code){
                        var index = parent.layer.getFrameIndex(window.name);
                        layer.msg(data.msg,{icon:1,time:1000});
                        parent.location.reload();
                        parent.layer.close(index);
                    }else{
                        layer.close(lod);
                        layer.msg(data.msg,{icon:0,time:1000});
                    }
                });
            }

        });
    })
    function deletefimg(imgpath) {
        if (imgpath=='[object Object]'){
            console.log('imgpath为空')
            var src=$(this).siblings('img').attr('src');
        }else{
            console.log('不为空')
            var src=imgpath;
            $("#file_upload_image").attr('value','');
            $("#oneimgclose").hide();
            $("#showone").hide();
        }

        $.ajax({
            type: "POST", //访问WebService使用Post方式请求
            url: "<?php echo url('admin/Configs/delone'); ?>", //调用WebService的地址和方法名称组合---WsURL/方法名
            data: "src=" + src,
            success: function(data){
                console.log(data);
            }
        });
        $("#file_upload_image").attr('value','');
        $(this).parent().remove();

    }

</script>

</body>
</html>