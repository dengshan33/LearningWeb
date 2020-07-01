<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/Style.css"/>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-default" role="navigation" style="background: white;height: 80px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="container">
                    <div class="raw">
                        <div class="col-md-4">
                            <img class="logo" src="/gongwei/qihang/Public/Home/images/logo-4.png">
                            <font class="word" color="#46b8da">启航</font>
                            <button type="button" style="margin-top:20px; " class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                                <span class="sr-only">切换导航</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-8">
                            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                                <?php if($role_id != 1): ?><ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                        <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                        <li class="ti"><a href="<?php echo U('View/index');?>">试卷库</a></li>
                                        <li class="ti"><a href="<?php echo U('View/service');?>">服务中心</a></li>
                                        <li class="ti"> <a href="<?php echo U('Borrow/index');?>">课程管理</a></li>
                                        <li class="ti"><a href="<?php echo U('Back/index');?>">个人信息</a></li>
                                        <li class="ti"><a href="<?php echo U('User/addS');?>">学生管理</a></li>
                                        <li class="ti"><a href="<?php echo U('Public/logout');?>">退出登录</a></li>
                                    </ul>
                                    <?php else: ?>
                                    <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                        <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                        <li class="ti"><a href="<?php echo U('View/service');?>">管理中心</a></li>
                                        <li class="ti"><a href="<?php echo U('Back/index');?>">个人信息</a></li>
                                        <li class="ti"><a href="<?php echo U('Public/logout');?>">退出登录</a></li>
                                    </ul><?php endif; ?>
                            </div>
                        </div>
                        <?php if($role_id != 1): ?><font style="margin-top: 5px;position: absolute; ">欢迎您！<?php echo (session('username')); ?></font>
                            <?php else: ?>
                            <font style="margin-top: 5px;position: absolute; ">Welcome！<?php echo (session('username')); ?></font><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<section id="1">
	<div id="search" style="width: 100%;min-width: 1263px;height: 500px;background: url(/gongwei/qihang/Public/Home/images/oc_bg.png) no-repeat center;position: relative;">
			
			<div class="center" style="width: 600px;height: 60px;background-color: #000000;/*搜索框背景色*/position: absolute;top: 50%;left: 50%;margin: -30px 0 0 -300px;border-radius: 10px;opacity: 0.6;"></div>
			<input type="text" class="search" placeholder="请输入你要查找的试卷" style="width: 446px;
	height: 52px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -27px 0 0 -296px;
	border-radius: 10px;
	border: 1px solid #666;
	font-size: 24px;
	color: #666666;
	outline: none;
	padding: 0 10px;" />
			<button class="button" style="width: 120px;
	height: 52px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -27px 0 0 175px;
	border-radius: 10px;
	border: 1px solid #666;
	font-size: 24px;
	color: #666666;
	cursor: pointer;
	padding: 0 10px;">搜索</button>
		</div>

<section id="2">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-4">
				<img src="/gongwei/qihang/Public/Home/images/one_card2.jpg" style="height:100px;width:100px;">
			</div>
			<div class="col-md-4 col-lg-4">
				<img src="/gongwei/qihang/Public/Home/images/one_card2.jpg" style="height:100px;width:100px;">
			</div>
			<div class="col-md-4 col-lg-4">
				<img src="/gongwei/qihang/Public/Home/images/one_card2.jpg" style="height:100px;width:100px;">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-lg-4">
				<img src="/gongwei/qihang/Public/Home/images/one_card2.jpg" style="height:100px;width:100px;">
			</div>
			<div class="col-md-4 col-lg-4">
				<img src="/gongwei/qihang/Public/Home/images/one_card2.jpg" style="height:100px;width:100px;">
			</div>
			<div class="col-md-4 col-lg-4">
				<img src="/gongwei/qihang/Public/Home/images/one_card2.jpg" style="height:100px;width:100px;">
			</div>
		</div>
	</div>
</section>


<footer class="footer">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div class="container">
        <div class="raw">
            <br/><br/>
            <div class="col-md-5 col-xs-5" style="height: auto;">
                <div><font style="font-size:20px; color: white;">Content Us</font></div>
                <p></p>
                <p>地址:重庆市沙坪坝区大学城</p>
                <p>电话:123456789</p>
                <p>传真:(123)456-789</p>
                <p>邮箱:111@qq.com</p>
            </div>
            <div class="col-md-2 col-xs-2"></div>
            <div class="col-md-5 col-xs-5">
                <div ><font style="font-size:20px; color: white;">Other Links</font></div>
                <p></p>
                <p style="line-height: 20px;"><a href="<?php echo U('View/index');?>">试卷库</a>
                    <a style="margin-left: 20px;" href="<?php echo U('View/service');?>">服务中心</a></p>
                <p></p>
                <p><a href="<?php echo U('Back/index');?>">个人信息</a>
                    <a style="margin-left: 20px;" href="<?php echo U('Borrow/index');?>">课程管理</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var index=0;
    function Slider() {
        index++;
        var obj1=document.getElementById("img1");
        var obj2=document.getElementById("img2");
        var obj3=document.getElementById("img3");
        var obj4=document.getElementById("p1");
        var m=index%3;
        if(m==0){
            //alert(obj1.getAttribute(src));
            //obj1.setAttribute(src,"/gongwei/qihang/Public/Home/images/oc_bg.png");
            //obj1.font="Welcome";
            obj1.style.display="block";
            obj2.style.display="none";
            obj3.style.display="none";
        }
        if(m==1){
            //alert("h")
            obj4.style.display="block";
            obj2.style.display="block";
            obj1.style.display="none";
            obj3.style.display="none";
            //obj1.setAttribute(src,"/gongwei/qihang/Public/Home/images/oc_bg1.png");
        }
        if(m==2){
            obj4.style.display="none";
            obj3.style.display="block";
            obj2.style.display="none";
            obj1.style.display="none";
            //alert("3")
            //obj1.setAttribute(src,"/gongwei/qihang/Public/Home/images/oc_bg2.png");
        }
        //alert("Message");
    }
    setInterval(Slider,5000);
</script>
</html>