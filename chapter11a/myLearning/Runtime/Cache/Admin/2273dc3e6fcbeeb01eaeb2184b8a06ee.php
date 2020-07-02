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
            <font color="#8AAEB8" size="4">公共信息</font> &gt;<font color="#8AAEB8">推荐老师</font>
            &gt;<font color="#8AAEB8">详细信息</font>
        </p>
        <hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>

        <div class="container" style="margin-top:15px;color:#8AAEB8 ">
        <img style="width:400;height:334;align:center;" src="/chapter11a/Public/Uploads/teacherPic/<?php echo ($data["jpic"]); ?>" alt="">
            <h2 style="text-align:center"><?php echo ($data["jname"]); ?></h2>
            <br />
            <br />
            <p style="font-size:20px;">老师简介:</p>
            <p style="margin-left:20px;"><?php echo ($data["jprofile"]); ?></p>
             <p style="font-size:20px;">老师主攻:</p>
            <p style="margin-left:20px;"><?php echo ($data["tspec"]); ?></p>
             <p style="font-size:20px;">个人经历:</p>
            <p style="margin-left:20px;"><?php echo ($data["jjingli"]); ?></p>
            
            <a class="btn" href="/chapter11a/Admin/Pub/teacher" style="font-size:20px;margin-left:50px">返回</a>
            <a class="btn" href="/chapter11a/Admin/Pub/addteacher" style="font-size:20px;">添加</a>
            <a class="btn" href="/chapter11a/Admin/Pub/deleteTea/nid/<?php echo ($data["jid"]); ?>" style="font-size:20px;">删除</a>
        </div>
        <style type="text/css">
            .viewNews{
                background-color: mediumvioletred;
            }
        </style>
    </div>
</body>
</html>