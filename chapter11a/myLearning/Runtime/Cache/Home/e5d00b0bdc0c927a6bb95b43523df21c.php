<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>老师登录</title>
<link href="/chapter11a/Public/home/css/login.css" rel="stylesheet" />
</head>
<body>
<div class="main">
    <div class="title">
        <span>老师登录</span>
    </div>
 
    <div class="title-msg">
        <span>请输入登录账户和密码</span>
    </div>
 
    <form class="login-form" method="post"  >
        <!--输入框-->
        <div class="input-content">
            <!--autoFocus-->
            <div>
                <input type="text" autocomplete="off"
                       placeholder="工号" name="numb" required/>
            </div>
 
            <div style="margin-top: 16px">
                <input type="password"
                       autocomplete="off" placeholder="登录密码" name="password" required maxlength="32"/>
            </div>
             <div style="margin-top: 16px">
            	<tr><td><input type="text" name="captcha" placeholder="验证码" /></td></tr>
            	<tr><td><img  style="margin-top: 10px" src="/chapter11a/Home/Tealogin/captcha" onclick="this.src='/chapter11a/Home/Tealogin/captcha/'+Math.random()"/></td></tr>
        	</div>
        </div>
 
        <!--登入按钮-->
        <div style="text-align: center;margin-top: 100px">
            <button type="submit" class="enter-btn" >登录</button>
        </div>
 
        <div class="foor">
            <div class="left"><span><a href="/chapter11a/">返回</a></span></div>
            <div class="left" style="margin-left: 200px"><span>忘记密码 ?</span></div>
 			
            <div class="right"><span><a href="/chapter11a/Home/Tealogin/tearegister">注册账户</a></span></div>
        </div>
    </form>
 
</div>
</body>
</html>