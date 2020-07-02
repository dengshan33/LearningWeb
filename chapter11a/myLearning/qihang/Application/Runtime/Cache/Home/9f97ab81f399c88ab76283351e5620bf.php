<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>校园文化</title>
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
    <div style="position: relative;">
        <hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
        <img id="img0" style="height: 400px; margin-left: 0; margin-top: 0; position: absolute; width: 300px; background-color: #46b8da;" src="/ykt4/Card-system/Public/Home/images/school/3.png" alt="1"/>
        <p id="p1" style="color:red; display: block; position: absolute; text-align:center; margin-left: 30%; margin-top: 50px; font-size: 30px">
            重&nbsp;&nbsp;庆&nbsp;&nbsp;师&nbsp;&nbsp;范&nbsp;&nbsp;大&nbsp;&nbsp;学&nbsp;&nbsp;欢&nbsp;&nbsp;迎&nbsp;&nbsp;你
            ，&nbsp;&nbsp;期&nbsp;&nbsp;待&nbsp;&nbsp;你&nbsp;&nbsp;的&nbsp;&nbsp;到&nbsp;&nbsp;来&nbsp;&nbsp;!</p>
        <img id="img1" class="image" style="height: 400px;" src="/ykt4/Card-system/Public/Home/images/school/1.jpg" alt="1"/>
        <p id="p2" style="color:#46b8da; display: none; position: absolute; text-align:center; margin-left: 25%; margin-top: 100px; font-size: 20px">
            重&nbsp;&nbsp;庆&nbsp;&nbsp;师&nbsp;&nbsp;范&nbsp;&nbsp;大&nbsp;&nbsp;学&nbsp;&nbsp;欢&nbsp;&nbsp;迎&nbsp;&nbsp;你
            ，&nbsp;&nbsp;期&nbsp;&nbsp;待&nbsp;&nbsp;你&nbsp;&nbsp;的&nbsp;&nbsp;到&nbsp;&nbsp;来&nbsp;&nbsp;!</p>
        <img id="img2"  style="display: none; width: 100%; height: 400px; margin: 0;padding: 0;" src="/ykt4/Card-system/Public/Home/images/school/1.png"alt="2"/>
        <p id="p3" style="color:#46b8da; display: none; position: absolute; text-align:center; margin-left: 25%; margin-top: 100px; font-size: 20px">
            重&nbsp;&nbsp;庆&nbsp;&nbsp;师&nbsp;&nbsp;范&nbsp;&nbsp;大&nbsp;&nbsp;学&nbsp;&nbsp;欢&nbsp;&nbsp;迎&nbsp;&nbsp;你
            ，&nbsp;&nbsp;期&nbsp;&nbsp;待&nbsp;&nbsp;你&nbsp;&nbsp;的&nbsp;&nbsp;到&nbsp;&nbsp;来&nbsp;&nbsp;!</p>
        <img id="img3" style="display:none; width: 100%; height: 400px;" src="/ykt4/Card-system/Public/Home/images/school/2.png" alt="3"/>
    </div>
</section>
<section id="2">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <p style="color: #46b8da; font-size: 20px; margin-left: 100px; position: absolute; margin-top: 5px;">核心理念</p>
    <p style="color: #46b8da; font-size: 15px; position: absolute; margin-top: 35px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重庆师范大学创办于1954年，是一所以文<br/>
        理为主，多学科协调发展的多科性高等学府，<br/>
        校园面积2688亩，包括大学城校区、沙坪坝<br/>
        校区和北碚校区。办学60年来，学校始终坚<br/>
        持“立教无类，以文化人”的办学理念，秉承<br/>
        “自强不息，躬行师道”的重师精神，践行<br/>
        “厚德、笃学、砺志、创新”的校训，立足<br/>
        重庆、面向西部、服务全国，突出教师教育<br/>
        特色，构建形成了师范教育和非师范教育。</p>
    <div class="container" style="position: absolute; margin-left: 270px; margin-top: 5px;">
        <div class="raw">
            <div class="col-md-4 col-xs-4">
                <img src="/ykt4/Card-system/Public/Home/images/school/4.jpg" height="230px;" class="image"/>
            </div>
            <div class="col-md-4 col-xs-4">
                <img src="/ykt4/Card-system/Public/Home/images/school/5.jpg" height="230px;" class="image"/>
            </div>
            <div class="col-md-4 col-xs-4">
                <img src="/ykt4/Card-system/Public/Home/images/school/6.jpg" height="230px;" class="image"/>
            </div>
        </div>
    </div>
</section>
<section id="3" style="background-color: #46b8da;">
    <hr style="margin: 235px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <p style="color: #46b8da; font-size: 20px; margin-left: 100px; position: absolute; margin-top: 5px;">重师内涵</p>
    <p style="color: #46b8da; font-size: 18px; position: absolute; margin-top: 35px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重师精神：自强不息&nbsp;&nbsp;&nbsp;&nbsp;躬行师道 <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重师校风：学高为师&nbsp;&nbsp;&nbsp;&nbsp;身正为范<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;办学理念：立教无类&nbsp;&nbsp;&nbsp;&nbsp;以文化人<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重师教风：博学敬业&nbsp;&nbsp;&nbsp;&nbsp;为人师表<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重师校训：厚德笃学&nbsp;&nbsp;&nbsp;&nbsp;砺志创新<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;重师学风：勤学善思&nbsp;&nbsp;&nbsp;&nbsp;求是致用<br/>
    </p>
    <div class="container" style="position: absolute; margin-left: 270px; margin-top: 5px;">
        <div class="raw">
            <div class="col-md-4 col-xs-4">
                <img src="/ykt4/Card-system/Public/Home/images/school/7.jpg" height="230px;" class="image"/>
            </div>
            <div class="col-md-4 col-xs-4">
                <img src="/ykt4/Card-system/Public/Home/images/school/8.jpg" height="230px;" class="image"/>
            </div>
            <div class="col-md-4 col-xs-4">
                <img src="/ykt4/Card-system/Public/Home/images/school/9.jpg" height="230px;" class="image"/>
            </div>
        </div>
    </div>
</section>
<section id="4" style="background-color: white;">
    <hr style="margin: 235px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <p style="color: #46b8da; font-size: 30px; margin-left: 45%; position: absolute; margin-top: 5px;">校歌</p>
    <div class="container">
        <div class="raw">
            <div class="col-md-4">
                <img src="/ykt4/Card-system/Public/Home/images/school/1.gif" height="400px;" style="margin-top: 45px;"/>
            </div>
            <div class="col-md-4" style="margin-left: 25%;">
                <img src="/ykt4/Card-system/Public/Home/images/school/1.gif" height="400px;" style="margin-top: 45px;"/>

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
            //obj1.setAttribute(src,"/ykt4/Card-system/Public/Home/images/oc_bg.png");
            //obj1.font="Welcome";
            obj4.style.display="block";
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
            //obj1.setAttribute(src,"/ykt4/Card-system/Public/Home/images/oc_bg1.png");
        }
        if(m==2){
            obj4.style.display="block";
            obj3.style.display="block";
            obj2.style.display="none";
            obj1.style.display="none";
            //alert("3")
            //obj1.setAttribute(src,"/ykt4/Card-system/Public/Home/images/oc_bg2.png");
        }
        //alert("Message");
    }
    setInterval(Slider,5000);
</script>
</html>