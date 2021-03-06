<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/base.css" />
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/login.css" />
    <title>学生登录</title>
</head>
<body>
<div id="container">
    <form action="<?php echo U('checkLogin');?>" method="post">
        <div id="bd">
            <div class="login1">
                <div class="login-top"><h1 class="logo"></h1></div>
                <div class="login-input">
                    <p class="user ue-clear">
                        <label>用户名</label>
                        <input type="text" name="username" id="us"/>
                    </p>
                    <p class="password ue-clear">
                        <label>密&nbsp;&nbsp;&nbsp;码</label>
                        <input type="password" name="password" id="ps"/>
                    </p>
                    <p class="yzm ue-clear">
                        <label>验证码</label>
                        <input type="text" name="captcha" maxlength="4" id="yzm" />
                        <!--
                            目标http://1006.com/index.php/Admin/Public/captcha
                            当前http://1006.com/index.php/Admin/Public/login
                        -->
                        <cite><img style="margin-left: 3px;" src="/gongwei/qihang/Home/Public/captcha" onclick="this.src='/gongwei/qihang/Home/Public/captcha/t/'+Math.random()" /></cite>
                    </p>
                </div>
                <div class="login-btn ue-clear">
                    <a href="javascript:;" class="btn" id="login">登录</a>
                    <div class="remember ue-clear">
                        <input type="checkbox" id="remember" />
                        <em></em>
                        <label for="remember">记住密码</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="ft">CopyRight&nbsp;2020&nbsp;&nbsp;版权所有&nbsp;&nbsp;onecard.com专注于coding&nbsp;&nbsp;渝ICP备09003079号</div>
</body>
<script type="text/javascript" src="/gongwei/qihang/Public/HOME/js/jquery1.js"></script>
<script type="text/javascript" src="/gongwei/qihang/Public/HOME/js/common.js"></script>
<script type="text/javascript">
    var height = $(window).height();
    $("#container").height(height);
    $("#bd").css("padding-top",height/2 - $("#bd").height()/2);

    $(window).resize(function(){
        var height = $(window).height();
        $("#bd").css("padding-top",$(window).height()/2 - $("#bd").height()/2);
        $("#container").height(height);

    });

    $('#remember').focus(function(){
        $(this).blur();
    });

    $('#remember').click(function(e) {
        checkRemember($(this));
    });

    function checkRemember($this){
        if(!-[1,]){
            if($this.prop("checked")){
                $this.parent().addClass('checked');
            }else{
                $this.parent().removeClass('checked');
            }
        }
    }

    //jQuery代码
    $(function(){
        //给登录按钮绑定点击事件
        $('.btn').on('click',function(){
            //事件处理程序
            $('form').submit();
        });
    });
</script>
</html>