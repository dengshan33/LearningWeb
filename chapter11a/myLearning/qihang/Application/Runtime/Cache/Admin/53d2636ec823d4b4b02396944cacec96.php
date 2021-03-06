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
<!--添加学生-->
<section id="1" style="background-color: #46b8da;">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <form action="/gongwei/qihang/Admin/User/addS" method="post" style="margin-top: 20%;">
        <div style="text-align: center;">
        <a href="<?php echo U('User/showS');?>" style="color: black;font-weight: 800;font-size: 20px;text-decoration: none;">添加账户（点击查看学生信息）</a>
        </div>
            <div class="container" style="margin-top: 20px;">
            <div class="raw">
                <div class="col-md-4">
                    <label>账户：</label>
                    <input name="username" type="text" placeholder="account" id="us"/>
                    <br/><br/><br/>
                    <label>密码：</label>
                    <input name="password" type="text" placeholder="password" id="ps"/>
                    <br/><br/><br/>
                    <label>专业：</label>
                    <input name="college_id" type="text" placeholder="college_id" id="college"/>
                    <br/><br/><br/>
                    <label>性别：</label>
                    <input name="sex" type="radio" value="boy" checked="checked"/>boy
                    <input name="sex" type="radio" value="girl" />girl
                </div>
                <div class="col-md-4">
                    <label>真实姓名：</label>
                    <input name="truename" type="text" placeholder="truename" id="tn"/>
                    <br/><br/><br/>
                    <label>联系电话：</label>
                    <input name="tel" type="text" placeholder="tel" id="tel"/>
                    <br/><br/><br/>
                    <label>出生日期：</label>
                    <input name="birthday" type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" placeholder="birthday" id="bd"/>
                </div>
                <div class="col-md-4">
                    <label>信用：</label>
                    <input name="credit" type="text" placeholder="credit" id="credit"/>
                    <br/><br/><br/>
                    <label>邮箱：</label>
                    <input name="email" type="text" placeholder="email" id="em"/>
                    <br/><br/><br/>
                    <label>卡号：</label>
                    <input name="card_id" type="text" placeholder="card_id" id="cid"/>
                </div>
            </div>
        </div>
        <div style="margin-left: 25%">
            <button style="text-decoration: none; margin-left: 30%;" class="confirm" id="btnSubmit">确定</button>
        </div>
        <hr style="margin: 10% 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    </form>
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
    $(function(){
        $('#btnSubmit').on('click',function(){
            $('form').submit();
        });
    });

    $(".select-title").on("click",function(){
        $(".select-list").toggle();
        return false;
    });
    $(".select-list").on("click","li",function(){
        var txt = $(this).text();
        $(".select-title").find("span").text(txt);
    });
    showRemind('input[type=text], textarea','placeholder');
</script>
</html>