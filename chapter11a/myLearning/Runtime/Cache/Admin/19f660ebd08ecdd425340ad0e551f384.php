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
            <font color="#8AAEB8" size="4">行业信息</font> &gt;<font color="#8AAEB8">查看信息</font>
            &gt;<font color="#8AAEB8">详细信息</font>
        </p>
        <hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>

        <div class="container" style="margin-top:15px;color:#8AAEB8 ">
            <h3 style="text-align:center;"><?php echo ($data["iindustry"]); ?></h3>
            
            <br />
            <br />
            <p style="font-size:20px;">行业简介</p>
            <p style="margin-left:20px;"><?php echo ($data["iprofile"]); ?></p>
             <p style="font-size:20px;">行业现状</p>
            <p style="margin-left:20px;"><?php echo ($data["inow"]); ?></p>
             <p style="font-size:20px;">行业发展</p>
            <p style="margin-left:20px;"><?php echo ($data["ifazhan"]); ?></p>
             <p style="font-size:20px;">行业职位</p>
            <p style="margin-left:20px;"><?php echo ($data["ijob"]); ?></p>
            <a class="btn" href="/chapter11a/Admin/EmployManage/industryinfo" style="font-size:20px;margin-left:50px">返回</a>
            <a class="btn" href="/chapter11a/Admin/EmployManage/addind" style="font-size:20px;">添加</a>
            <a class="btn" href="/chapter11a/Admin/EmployManage/deleteind/nid/<?php echo ($data["iid"]); ?>" style="font-size:20px;">删除</a>
        </div>
        <style type="text/css">
            .viewNews{
                background-color: mediumvioletred;
            }
        </style>
    </div>
</body>
</html>