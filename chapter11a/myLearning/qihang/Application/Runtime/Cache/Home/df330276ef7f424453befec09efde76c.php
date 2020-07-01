<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/ykt4/Card-system/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/ykt4/Card-system/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/ykt4/Card-system/Public/Home/css/Style.css"/>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-default" role="navigation" style="background: white;height: 80px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="container">
                    <div class="raw">
                        <div class="col-md-4">
                            <img class="logo" src="/ykt4/Card-system/Public/Home/images/logo-4.png">
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
                                <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                    <li class="ti"><a href="<?php echo U('Index/index1');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                    <li class="ti"><a href="<?php echo U('View/index');?>">校园文化</a></li>
                                    <li class="ti"><a href="<?php echo U('View/service');?>">服务中心</a></li>
                                    <li class="ti"> <a href="<?php echo U('Borrow/index');?>">课程管理</a></li>
                                    <li class="ti"><a href="<?php echo U('Back/index');?>">个人信息</a></li>
                                    <li class="ti"><a href="<?php echo U('Public/logout');?>">退出登录</a></li>
                                </ul>
                            </div>
                        </div>
                        <font style="margin-top: 5px;position: absolute; ">欢迎您！<?php echo (session('username')); ?></font>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<section id="1">
    <hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%;margin-top: 20px;">
        <a href="<?php echo U('Borrow/index');?>" style="text-decoration: none;">
            <img src="/ykt4/Card-system/Public/Home/images/service/service/2.gif" class="img"/>
            <font style="color: #46b8da; font-size: 15px;">课程管理</font>
        </a>
    </div>
    <form action="/ykt4/Card-system/Home/Borrow/borrow" method="post" enctype="multipart/form-data" style="margin-left: 45%; margin-top: 10px;">
        <p class="short-input ue-clear">
            <label>课&nbsp;&nbsp;程&nbsp;&nbsp;号：</label>
            <input type="text" name="book_id" placeholder="课程号" id="book_id" />
        </p>
        <p class="short-input ue-clear">
            <label>课&nbsp;&nbsp;程&nbsp;&nbsp;名：</label>
            <input type="text" name="bookname" placeholder="课程名" id="bookname" />
        </p>
        <p class="short-input ue-clear">
            <label>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
            <input type="text" name="username" placeholder="姓名" id="username"/>
        </p>
        <p class="short-input ue-clear">
            <label>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</label>
            <input type="text" name="card_id" placeholder="学号" id="card_id"/>
        </p>
        <p class="short-input ue-clear">
            <label>课程学时：</label>
            <input type="number" name="booktime" placeholder="课程学时" id="booktime"/>
        </p>
        <div class="btn ue-clear">
            <a style="text-decoration: none;" href="javascript:;" class="confirm" id='btnSubmit'>确认报名</a>
            <!--a style="text-decoration: none;margin-left: 30px; " href="javascript:;" class="clear" id='btnReset' >退出</a-->
        </div>
    </form>
</section>

<footer class="footer">
    <hr style="margin: 10% 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
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
                <p style="line-height: 20px;"><a href="<?php echo U('View/index');?>">校园文化</a>
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
    $(function(){
        $('#btnSubmit').on('click',function(){
            $('form').submit();
        });

    });


</script>
</html>