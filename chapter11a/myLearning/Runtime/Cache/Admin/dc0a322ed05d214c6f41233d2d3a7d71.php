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
            <font color="#8AAEB8" size="4">公司信息</font> &gt;<font color="#8AAEB8">查看信息</font>
            &gt;<font color="#8AAEB8">详细信息</font>
        </p>
        <hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>

        <div class="container" style="margin-top:15px;color:#8AAEB8 ">
            <h2 style="text-align:center"><?php echo ($data["gname"]); ?></h2>
            <p style="text-align:center">创始人：<?php echo ($data["gfounder"]); ?>&nbsp;&nbsp;员工人数：<?php echo ($data["gnumber"]); ?>&nbsp;&nbsp;公司地点：<?php echo ($data["glocation"]); ?></p>
            <br />
            <br />
            <p style="font-size:20px;">公司简介:</p>
            <p style="margin-left:20px;"><?php echo ($data["gprofile"]); ?></p>
             <p style="font-size:20px;">经营范围:</p>
            <p style="margin-left:20px;"><?php echo ($data["gearn"]); ?></p>
             <p style="font-size:20px;">公司理念:</p>
            <p style="margin-left:20px;"><?php echo ($data["glinian"]); ?></p>
             <p style="font-size:20px;">公司历程:</p>
            <p style="margin-left:20px;"><?php echo ($data["glicheng"]); ?></p>
            <a class="btn" href="/chapter11a/Admin/EmployManage/firminfo" style="font-size:20px;margin-left:50px">返回</a>
            <a class="btn" href="/chapter11a/Admin/EmployManage/addfirm" style="font-size:20px;">添加</a>
            <a class="btn" href="/chapter11a/Admin/EmployManage/deletefirm/nid/<?php echo ($data["gid"]); ?>" style="font-size:20px;">删除</a>
        </div>
        <style type="text/css">
            .viewNews{
                background-color: mediumvioletred;
            }
        </style>
    </div>
</body>
</html>