<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>学生注册</title>
<link href="/chapter11a/Public/home/css/register.css" rel="stylesheet" />
<script src="/chapter11a/Public/home/js/jquery.min.js"></script>
</head>
<body>
<div id="box">
	<h1>欢迎注册</h1>
	<div id="main">
		
		<form method="post" onSubmit="return chkinput(this)">
		<table class="register right">
			<tr><th>学号：</th><td><input type="text" name="sno" required /></td></tr>
			<tr><th>密码：</th><td><input type="password" name="spwd" id="spwd" required /></td></tr>
			<tr><th>确认密码：</th><td><input type="password" id="pwd2" required /></td></tr>
			<tr><th>姓名：</th><td><input type="text" name="sname" required /></td></tr>
			<tr><th>姓别：</th><td><select name="ssex">
						<option value="男">男</option>
						<option value="女">女</option>
						</select>
				</td></tr>
			<tr><th>邮箱：</th><td><input type="email" name="semail" id="email" required /></td></tr>
			<tr><th>电话号码：</th><td><input type="text" id="sphone" name="sphone" required /></td></tr>
			<tr><th>学校：</th><td><select name="school">
						<option value="重庆师范大学">重庆师范大学</option>
						</select>
				</td></tr>
			<tr><th>学院：</th><td><input type="text" name="scolle" required /></td></tr>
			<tr><th>年级：</th><td><select name="syear">
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						</select>
				</td></tr>
			<tr><th>专业：</th><td><input type="text" name="smajor" required /></td></tr>
			<tr><th>班级：</th><td><input type="text" name="sclass" required /></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="captcha" required /></td></tr>
			<tr><td>&nbsp;</td><td><img src="/chapter11a/Home/Stulogin/captcha" onclick="this.src='/chapter11a/Home/Stulogin/captcha/'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="button" type="submit" value="注　册" /></td></tr>
			<tr><td colspan="2" class="center"><a href="/chapter11a/Home/Stulogin/stulogin">返回登录</a><a href="/chapter11a/">返回首页</a></td></tr>
		</table>
		</form>
		<div class="clear"></dic>
	</div>
</div>
<script>
	$("#pwd2").blur(function(){ //失去焦点时判断
		if($(this).val() !== $("#spwd").val()){
			$(this).addClass('error');
		}else{
			$(this).removeClass('error');
		}
	});
	$("form").submit(function(){ //表单提交时判断
		if($("#pwd2").val() !== $("#spwd").val()){
			alert('两次输入密码不一致！');
			return false;
		}
	});
	 function chkinput(form)
	  {
		 if(form.sno.value.length<13 || form.sno.value.length>13 )
		 {
		 alert("学号长度应为13!");
		 form.sno.select();
		 return(false);
		 }
		 if(form.spwd.value.length<6 ||form.spwd.value.length>20)
		 {
		 alert("注册密码长度应大于6小于20!");
		 form.spwd.select();
		 return(false);
		 }
		 if(form.phone.value.length < 11)
		 {
		 alert("手机电话位数长度应为11!");
		 form.phone.select();
		 return(false);
		 }	
		 if(form.phone.value.length > 11)
		 {
		 alert("手机电话位数长度应为11!");
		 form.phone.select();
		 return(false);
		 }		
	  }
</script>
</body>
</html>