<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>修改个人信息</title>
<link href="/chapter11a/Public/home/css/changeinfo.css" rel="stylesheet" />
<script src="/chapter11a/Public/home/js/jquery.min.js"></script>
</head>
<body>
<div id="box">
	<div id="main">
		
		<form method="post" action="/chapter11a/Home/Stusercenter/changeinfo" onSubmit="return chkinput(this)" enctype="multipart/form-data">
		<table class="register right">
			<tr><th>学号：</th><td><?php echo ($userinfo["sno"]); ?></td></tr>
			<tr><th>邮箱：</th><td><input type="email" name="semail" id="email" placeholder="<?php echo ($userinfo["semail"]); ?>" required /></td></tr>
			<tr><th>电话号码：</th><td><input type="text" id="sphone" name="sphone" placeholder="<?php echo ($userinfo["sphone"]); ?>"required /></td></tr>
			
			<tr><th>学院：</th><td><input type="text" name="scolle" placeholder="<?php echo ($userinfo["scolle"]); ?>" required /></td></tr>
			<tr><th>年级：</th><td><select name="syear">
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						</select>
				</td></tr>
			<tr><th>专业：</th><td><input type="text" name="smajor" placeholder="<?php echo ($userinfo["smajor"]); ?>" required /></td></tr>
			<tr><th>班级：</th><td><input type="text" name="sclass" placeholder="<?php echo ($userinfo["sclass"]); ?>" required /></td></tr>
			<tr><th>选择你的头像：</th><td><input name="fpic" type="file" value="" size="58"/ required /></td></tr>
			
			<tr><td>&nbsp;</td><td><input class="button" type="submit" value="确定修改" /></td></tr>
			
		</table>
		</form>
		<div class="clear"></dic>
	</div>
</div>
<script>
	 function chkinput(form)
	  {
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