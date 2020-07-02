<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理员界面</title>
    <link href="/chapter11a/Public/admin/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <script src="/chapter11a/Public/admin/jquery-3.4.1.min.js"></script>
    <script src="/chapter11a/Public/admin/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link href="/chapter11a/Public/admin/css/layout.css" rel="stylesheet" >
</head>
<body style="background-color: #F2F2F2;">
<div style="width:1200px;margin-left: 10px;">
    <div class="1">
        <p style="margin-top: 20px;"><font color="#8AAEB8" style="font-size: 16px;">
            <b>启航网后台管理</b></font> <a href="/chapter11a/Admin/Login/login" style="float:right;padding-right: 50px;"><img src="/chapter11a/Public/admin/icon/icons8-exit.png" height="18">&nbsp;退出</a>
            <a href="/chapter11a/Admin/Administrator/administratorInfo" style="float:right;"><img src="/chapter11a/Public/admin/icon/icons8-admin.png" height="18">&nbsp;管理员
                <span style="border-right:2px solid gray;margin-right:5px;padding-left:10px;"></span>
            </a></p>

    </div>
    <hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>
    <div class="row" >
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <div  style="height: 668px;width: 200px;background-color: teal;">
                <div class="userManage">
                    <button class="user" style="width: 200px;height: 35px;color: white;font-size: 16px;">
                        <span class="glyphicon glyphicon-user"></span>
                        用户管理&nbsp;&nbsp;&nbsp;</button><br />
                    <button class="userAction " onclick="location='/chapter11a/Admin/UserManagement/userstudentsView'" style="width: 200px;">查看学生</button><br />
                     <button class="userAction banUser1" onclick="location='/chapter11a/Admin/UserManagement/userteachersView'" style="width: 200px;">查看老师</button><br />
                    <button class="userAction banUser"  onclick="location='/chapter11a/Admin/UserManagement/searchUser'" style="width: 200px;">搜索用户</button><br />


                </div>
                <div class="userPost">
                    <button class="post" style="width: 200px;height: 35px;font-size: 16px;">
                        <span class="glyphicon glyphicon-file"></span>
                        课程管理&nbsp;&nbsp;&nbsp;</button><br>
                    <button class="postAction postInfo" onclick="location='/chapter11a/Admin/CourManage/teachercour'" style="width: 200px;">老师课程</button><br />
                    <button class="postAction searchPost" onclick="location='/chapter11a/Admin/CourManage/tuijcour'" style="width: 200px;">推荐课程</button><br />

                </div>

                <div class="newManage">
                    <button class="post" style="width: 200px;height: 35px;font-size: 16px;">
                        <span class="glyphicon glyphicon-globe"></span>
                        就业信息&nbsp;&nbsp;&nbsp;</button><br>
                    <button class="newAction " onclick="location='/chapter11a/Admin/EmployManage/industryinfo'" style="width: 200px;">行业信息</button><br />
                    <button class="newAction addwNews" onclick="location='/chapter11a/Admin/EmployManage/firminfo'" style="width: 200px;">公司信息</button><br />
                    <button class="newAction addNews1" onclick="location='/chapter11a/Admin/EmployManage/mpinfo'" style="width: 200px;">招聘信息</button><br />
                    
                </div>

                <div class="adminInfo">
                    <button class="admin" style="width: 200px;height: 35px;font-size: 16px;">
                        <span class="glyphicon glyphicon-cog"></span>
                        管理员信息
                    </button><br>
                    <button class="adminAction administratorInfo" onclick="location='/chapter11a/Admin/Administrator/administratorInfo'" style="width: 200px;">查看管理员信息</button><br />
                    <button class="adminAction alterPwd" onclick="location='/chapter11a/Admin/Administrator/alterPwd'" style="width: 200px;">修改密码</button><br />

                </div>

                <div class="message">
                    <button class="messages" style="width: 200px;height: 35px;font-size: 16px;">
                        <span class="glyphicon glyphicon-envelope"></span>
                        公共管理&nbsp;&nbsp;&nbsp;</button><br>
                    <button class="messagesAction complaintInfo" onclick="location='/chapter11a/Admin/Messages/complaintInfo'" style="width: 200px;">推荐学校<span class="badge"><?php echo (session('complaint')); ?></span></button>
                    <button class="messagesAction userLiuyan" onclick="location='/chapter11a/Admin/Messages/userLiuyan'" style="width: 200px;">推荐老师<span class="badge"><?php echo (session('userLiuyan')); ?></span></button>
                	<button class="messagesAction userLiuyan" onclick="location='/chapter11a/Admin/Messages/userLiuyan'" style="width: 200px;">推荐书籍<span class="badge"><?php echo (session('userLiuyan')); ?></span></button>
                
                </div>

                <div class="aboutUs">
                    <button class="about"  style="width: 200px;height: 35px;font-size: 16px;">
                        <span class="glyphicon glyphicon-info-sign"></span>
                        关于我们&nbsp;&nbsp;&nbsp;</button><br>
                    <button class="aboutUs" onclick="location='/chapter11a/Admin/AboutUs/aboutUs'" style="width: 200px;">关于我们</button>
                </div>
                <div class="info" style="margin-top: 100px;color: white;text-align: center;color:lightseagreen;">
                    <p>欢迎来到启航网后台管理</p>
                    
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
        <div style="margin-top: 15px;">
            
<p><span style="border-right:4px solid gray;margin-right:5px;padding-left:10px;"></span>
    <font color="#8AAEB8" size="4">课程信息</font> &gt;<font color="#8AAEB8">推荐课程</font>
    &gt;<font color="#8AAEB8">添加推荐课程</font>
</p>
<hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>

<div style="margin-top: 20px">
    <div class="row">
        <div class="col-sm-6 col-xs-6">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="newsTitle">请输入课程名</label>
                    <input type="text" class="form-control" name="tname" id="newsTitle" />
                </div>
                <div class="form-group">
                    <label for="newContent">请输入课程号</label>
                     <input type="text" class="form-control" name="tno" id="newsTitle" />
                </div>
                <div class="form-group">
                    <label for="newContent">请输入课程类型</label>
                     <input type="text" class="form-control" name="tleixing" id="newsTitle" />
                </div>
                <div class="form-group">
                    <label for="newContent">请输入老师名字</label>
                     <input type="text" class="form-control" name="teachername" id="newsTitle" />
                </div>
                <div class="form-group">
                    <label for="newContent">请输入所属学校</label>
                     <input type="text" class="form-control" name="tschool" id="newsTitle" />
                </div>
                <div class="form-group">
                    <label for="newContent">请输入上课时间</label>
                     <input type="text" class="form-control" name="ttime" id="newsTitle" />
                </div>
                <div class="form-group">
                    <label for="newContent">请输入课程简介</label>
                    <textarea type="text" rows="4" class="form-control" name="tprofile" id="newsContent" ></textarea>
                </div>
               <div class="form-group">
                    <label for="newContent">请选择图片</label>
                   <input name="tpic" type="file" value="" size="58"/>
                </div>
                <a class="btn btn-default" href="/chapter11a/Admin/CourManage/tuijcour" >取消</a>
                <button type="submit" class="btn btn-default">确认</button>
            </form>
        </div>
        <div class="col-xs-2 col-sm-2">
            <p style="margin-top: 35px;font-size: 18px">*</p>
            <p style="margin-top: 48px;font-size: 18px">*</p>
            <p style="margin-top: 70px;font-size: 18px">*</p>
        </div>
    </div>
</div>

<style type="text/css">
    .viewNews{
        background-color: mediumvioletred;
    }
</style>
        </div>
    </div>
</div>


<!-- <script type="text/javascript">
    $(document).ready(function(){
        $(".user").click(function(){
            $(".userAction").slideToggle("slow");
        });
        $(".post").click(function(){
            $(".postAction").slideToggle("slow");
        });
        $(".admin").click(function(){
            $(".adminAction").slideToggle("slow");
        });
    });
</script> -->
</body>
</html>