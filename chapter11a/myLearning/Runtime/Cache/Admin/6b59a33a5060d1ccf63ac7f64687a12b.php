<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理员登录</title>
    <link href="/chapter11a/Public/admin/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <script src="/chapter11a/Public/admin/jquery-3.4.1.min.js"></script>
    <script src="/chapter11a/Public/admin/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link href="/chapter11a/Public/admin/css/login.css" rel="stylesheet">
</head>
<body >
<div class="context" style="background:url(/chapter11a/Public/home/images/body-bg.jpg)no-repeat center 0px;background-attachment:fixed;">
    <div class="container" style="text-align: center">
        <h1 align="center">欢迎来到启航网后台管理</h1>
        <form class="form" action="" method="post">
            <input class="input" type="text"  name="username" placeholder="请输入账号"/>
            <input class="input" type="password"  name="password" placeholder="请输入密码"/>
            <div class="verify">
                <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <img src="/chapter11a/Admin/Login/captcha" id="img" onclick="img.src='/chapter11a/Admin/Login/captcha?rand='+Math.random()" />
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <input type="text"  class="captcha"  name="captcha" placeholder="请输入验证码"/>
                    </div>
                </div>
            </div>
            <br />
            <input class="button" type="submit" value="提交登录" />
        </form>
    </div>
</div>
</body>
</html>