<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <title>就业信息</title>
    <link href="/chapter11a/Public/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <script src="/chapter11a/Public/jquery-3.4.1.min.js"></script>
    <script src="/chapter11a/Public/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>
<body style="padding-top:30px;background-color: #F2F2F2;">
    <div class="container">
        <p><span style="border-right:4px solid gray;margin-right:5px;padding-left:10px;"></span>
            <font color="#8AAEB8" size="4">课程信息</font> &gt;<font color="#8AAEB8">推荐课程</font>
            &gt;<font color="#8AAEB8">详细信息</font>
        </p>
        <hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>

        <div class="container" style="margin-top:15px;color:#8AAEB8 ">
            <h2 style="text-align:center"><?php echo ($data["tname"]); ?></h2>
            <p style="text-align:center">授课老师：<?php echo ($data["teachername"]); ?>&nbsp;&nbsp;所属学习：<?php echo ($data["tschool"]); ?>&nbsp;&nbsp;课程类型：<?php echo ($data["tleixing"]); ?></p>
            <br />
            <br />
            <p style="font-size:20px;">课程简介:</p>
            <p style="margin-left:20px;"><?php echo ($data["tprofile"]); ?></p>
             <p style="font-size:20px;">上课时间:</p>
            <p style="margin-left:20px;"><?php echo ($data["ttime"]); ?></p>
             <p style="font-size:20px;">发布时间:</p>
            <p style="margin-left:20px;"><?php echo ($data["tnowtime"]); ?></p>
            
            <a class="btn" href="/chapter11a/Admin/CourManage/tuijcour" style="font-size:20px;margin-left:50px">返回</a>
            <a class="btn" href="/chapter11a/Admin/CourManage/addTjcour" style="font-size:20px;">添加</a>
            <a class="btn" href="/chapter11a/Admin/CourManage/deleteTJ/nid/<?php echo ($data["tid"]); ?>" style="font-size:20px;">删除</a>
        </div>
        <style type="text/css">
            .viewNews{
                background-color: mediumvioletred;
            }
        </style>
    </div>
</body>
</html>