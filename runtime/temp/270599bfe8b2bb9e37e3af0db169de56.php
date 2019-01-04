<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"H:\Phpdemo\yikehao/application/admin\view\login\index.html";i:1545117520;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>管理员登录</title>
<link href="/yikehao/public/static/login/css/style_log.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/yikehao/public/static/login/css/style.css">
<link rel="stylesheet" type="text/css" href="/yikehao/public/static/login/css/userpanel.css">
<link rel="stylesheet" type="text/css" href="/yikehao/public/static/login/css/jquery.ui.all.css">
    <script type="text/javascript" src="/yikehao/public/static/h-admin/lib/layer/2.4/layer.js"></script>

</head>
<body class="login" mycollectionplug="bind">
    <div class="login_m">
        <!--<div class="login_logo"><img src="./Wopop_files/logo.png" width="196" height="46"></div>-->
        <div class="login_boder">
            <form  method="post" class="form form-horizontal" id="form-article-add">
                <div class="login_padding layui-form" id="login_model">
                  <h2>用户名</h2>
                  <label>
                    <input type="text" id="username" required="required" placeholder='用户名' name="adminname" class="txt_input txt_input2" value="">
                  </label>
                  <h2>密码</h2>
                  <label>
                    <input type="password" placeholder='密码' required="required" name="psw" id="userpwd" class="txt_input" value="">
                  </label>

                  <div class="rem_sub">
                    <label>
                      <input type="button" class="sub_button" name="button" id="loginbt" value="登录" style="opacity: 0.7;">
                    </label>
                  </div>
                </div>
            </form>
        <!--login_padding  Sign up end-->
        </div><!--login_boder end-->
    </div>
    <script type="text/javascript">
        $(function() {
            $("#loginbt").click(function () {
                var getname=$('#username').val();
                var getpsw=$('#userpwd').val();
                var lod=layer.load(0, {shade: false});
                $.post("<?php echo url('admin/Login/index'); ?>",{adminname:getname,psw:getpsw},function(re){
                    layer.close(lod);
                    re = JSON.parse(re)
                    layer.msg(re.msg);
                    if(re.status == 1){
                        location.href='<?php echo url("admin/Index/index"); ?>'
                    }

                });
            })
            $(".login_m").keypress(function (e) {
                var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
                if (keyCode == 13){
                    var getname=$('#username').val();
                    var getpsw=$('#userpwd').val();
                    var lod=layer.load(0, {shade: false});
                    $.post("<?php echo url('admin/Login/index'); ?>",{adminname:getname,psw:getpsw},function(re){
                        layer.close(lod);
                        re = JSON.parse(re)
                        layer.msg(re.msg);
                        if(re.status == 1){
                            location.href='<?php echo url("admin/Index/index"); ?>'
                        }

                    });
                }
            });
        })
//        function dopost() {
//            layer.msg('登录中...',{icon:1,time:800});
//            $('#form-article-add').submit();
//        }

    </script>
</body>
</html>