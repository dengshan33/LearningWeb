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
<!--个人信息-->
<section id="1" style="width: auto;margin-top: 80px;">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div style="margin-left: 45%">
        <a href="" style="font-size: 20px; text-decoration: none;">个人信息</a>
    </div>
    <form action="/gongwei/qihang/Home/Back/index" method="post" >
    <div class="container">
        <div class="raw">
            <div class="col-md-4">
                <label style="color: #46b8da">真实姓名：</label>
                <input type="text" style="color: #46b8da"  value=<?php echo (session('truename')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">出生日期：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('birthday')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">信用状态：</label>
                <input type="text" style="color: #46b8da"  value=<?php echo (session('credit')); ?> placeholder="" />
            </div>
            <div class="col-md-4">
                <label style="color: #46b8da">卡号：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('card_id')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">性别：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('sex')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">邮箱：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('email')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">密码：</label>
                <input type="password" style="color: #46b8da" value=<?php echo (session('password')); ?> placeholder="" />
            </div>
            <div class="col-md-4">
                <label style="color: #46b8da">账户：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('username')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">电话：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('tel')); ?> placeholder="" />
                <br/>
                <label style="color: #46b8da">专业：</label>
                <input type="text" style="color: #46b8da" value=<?php echo (session('college_id')); ?> placeholder="" />
                <br/>
                <button style="color: #46b8da;width:100px;height: 25px;margin-left: 20%;" id="btnSubmit">确认修改</button>
            </div>
        </div>
    </div>
    </form>
</section>

<!--意见反馈情况-->


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
                <p style="line-height: 20px;"><a href="<?php echo U('View/index');?>">校园文化</a>
                    <a style="margin-left: 20px;" href="<?php echo U('View/service');?>">服务中心</a></p>
                <p></p>
                <p><a href="<?php echo U('Back/index');?>">个人信息</a>
                    <a style="margin-left: 20px;" href="<?php echo U('Borrow/index');?>">课程管理</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#btnSubmit').on('click',function(){
            $('form').submit();
        });
    });

    $(function() {
            //给查看按钮绑定点击事件
            $('.show1').on('click', function() {
                //事件处理程序
                var id = $(this).attr('data');
                var title = $(this).attr('data-title');
                var isread = $(this).attr('isread');
                var content=$(this).attr('content');
                alert("标题："+title+"\n"+"内容："+content);
                layer.open({
                    type: 2,
                    title: '',
                    time:2000,
                    shadeClose: true,
                    shade: false,
                    maxmin: true, //开启最大化最小化按钮
                    area: ['0px', '0px'],
                    content: '/gongwei/qihang/Home/Back/getContent/id/' + id,
                    end: function(){
                        //处理关闭的操作
                        if(isread == 0){
                            window.location.href =location.href;
                        }
                        else {
                            window.location.href =location.href;
                        }
                    }
                });
                //layer.close(index);
            });
        });

    //jQuery代码
    $(function(){
        //给删除按钮绑定点击事件
        $('.del1').on('click',function(){
            var id = $(this).attr('data');
            //带着参数跳转到del方法
            window.location.href = '/gongwei/qihang/Home/Back/del/id/' + id;
        });
    });

    $(function(){
        //给删除按钮绑定点击事件
        $('.del2').on('click',function(){
            var id = $(this).attr('data');
            //带着参数跳转到del方法
            window.location.href = '/gongwei/qihang/Home/Back/del/id/' + id;
        });
    });

    $(function() {
        //给查看按钮绑定点击事件
        $('.show2').on('click', function() {
            //事件处理程序
            var id = $(this).attr('data');
            var title = $(this).attr('data-title');
            var isread = $(this).attr('isread');
            var content=$(this).attr('content');
            alert("标题："+title+"\n"+"内容："+content);
            layer.open({
                type: 2,
                title: '',
                time:2000,
                shadeClose: true,
                shade: false,
                maxmin: true, //开启最大化最小化按钮
                area: ['0px', '0px'],
                content: '/gongwei/qihang/Home/Back/getContent/id/' + id,
                end: function(){
                    //处理关闭的操作
                    if(isread == 0){
                        window.location.href =location.href;
                    }
                    else {
                        window.location.href =location.href;
                    }
                }
            });
            //layer.close(index);
        });
    });


</script>