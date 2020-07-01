<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/Style.css"/>
    <script src="/gongwei/qihang/Public/Home/js/jQuery.min.js"></script>
	<script src="/gongwei/qihang/Public/Home/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript" src="/gongwei/qihang/Public/Home/js/jquery-1.12.4.js"></script>
<script>
$(document).ready(function(){
	 $("#row:even").addClass("evevclass");
	$("#row").mouseover(function(){
		$(this).addClass("over");
	})
	.mouseout(function(){
		$(this).removeClass("over");
	});
});
</script>
<style>
.evevclass{
	background:#ECF8FD;
}
.over{
	background:#ff9;
}
</style>

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
        </button></div>
        <div class="col-md-8">
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                <li class="ti"><a href="<?php echo U('Index/news');?>">新闻动态</a></li>
                <li class="ti"><a href="<?php echo U('Index/service');?>">服务中心</a></li>
                <li class="ti"><a href="<?php echo U('Index/recruit');?>">招贤纳士</a></li>
                <li class="ti"><a href="<?php echo U('Index/aboutUs');?>">关于我们</a></li>
                <li class="ti"><a href="<?php echo U('Home/Public/login');?>" id="student">学生登录</a></li>
                <li class="ti"><a href="<?php echo U('Admin/Public/login');?>" id="admin">老师登录</a></li>
            </ul>
        </div>
        </div>
    </div>
        </div>
    </div>
        </div>
    </nav>
</header>

<section id="1">
        <div style="width:100%;margin-left: auto;margin-right: auto" id="carousel-example-generic" class="carousel slid" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slid-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slid-to="1"></li>
				<li data-target="#carousel-example-generic" data-slid-to="2"></li>
			</ol>
			<div class="carousel-inner" style="text-align: center">
				<div class="item active">
					<img alt="First slide" src="/gongwei/qihang/Public/Home/images/oc_bg.png"></img>
					
				</div>
				<div class="item">
					<img alt="Second slide" src="/gongwei/qihang/Public/Home/images/oc_bg.png"></img>
					
				</div>
				<div class="item">
					<img alt="Third slide" src="/gongwei/qihang/Public/Home/images/oc_bg.png"></img>
					
				</div>	
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
</section>

<section id="2">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="text-align: center;">
            <p style="margin: 10px; font-size: 30px; color:#46b8da;">关于启航</p>
            <p style="color: #46b8da;">About QIHang</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-4" >
                <p style="color:#46b8da; font-size: 20px;">Interpretation1:</p>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;抖音短视频，是一款音乐创意短视频社交软件，由今日头条孵化，该软件与2006年9月20日上限，是一个专注以年轻人音乐视频社区平台
                </p>
                <br/><br/>
                <p style="color: #46b8da; font-size: 20px; ">Interpretation2:</p>
                <p style="color:#46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;抖音短视频，是一款音乐创意短视频社交软件，由今日头条孵化，该软件与2006年9月20日上限，是一个专注以年轻人音乐视频社区平台
                </p>
            </div>

            <div class="col-md-4 col-xs-4">
                <br/><br/><br/><br/><br/><br/><br/><br/>
                <img class="about-img" src="/gongwei/qihang/Public/Home/images/005.png"/>
            </div>

            <div class="col-md-4 col-xs-4">
                <p style="color: #46b8da; font-size: 20px; ">Function1:</p>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;抖音短视频，是一款音乐创意短视频社交软件，由今日头条孵化，该软件与2006年9月20日上限，是一个专注以年轻人音乐视频社区平台
                </p>
                <br/><br/>
                <p style="color: #46b8da; font-size: 20px; ">Function2:</p>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    抖音短视频，是一款音乐创意短视频社交软件，由今日头条孵化，该软件与2006年9月20日上限，是一个专注以年轻人音乐视频社区平台
                </p>
            </div>
        </div>
</section>

<section id="3">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="text-align: center;">
        <p style="margin: 10px; font-size:30px; color: #46b8da;">新闻动态</p>
        <p style="color: #46b8da;">News</p>
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-3 col-xs-3">
                <img class="new-img" src="/gongwei/qihang/Public/Home/images/news.png"/>
            </div>
            <div class="col-md-3 col-xs-3" style="margin-left: 0;">
                <span style="color: #46b8da; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Python</span>
                <br/><br/>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Python是一种跨平台的计算机程序设计语言。
                    它是一个高层次的结合了解释性、编译性、互动性和面向对象的脚本语言。
                    最初被设计用于编写自动化脚本(shell)，随着版本的不断更新和语言新功能的添加，越多被用于独立的、大型项目的开发。</p>
            </div>
            <div class="col-md-3 col-xs-3" >
                <img class="new-img" src="/gongwei/qihang/Public/Home/images/news1.png"/>
            </div>
            <div class="col-md-3 col-xs-3" style="margin-left: 0;">
                <span style="color: #46b8da; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About PHP</span>
                <br/><br/>
                <p style="color: #46b8da;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP即“超文本预处理器”，是一种通用开源脚本语言。
                    PHP是在服务器端执行的脚本语言，与C语言类似，是常用的网站编程语言。
                    PHP独特的语法混合了C、Java、Perl以及 PHP 自创的语法。利于学习，使用广泛，主要适用于Web开发领域。
                </p>
            </div>
        </div>
    </div>
    <br/>
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
                <p><a href="<?php echo U('Index/news');?>">新闻动态</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Index/service');?>">服务中心</a></p>
                <p><a href="<?php echo U('Index/recruit');?>">招贤纳士</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo U('Index/aboutUs');?>">关于我们</a> </p>
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