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
            <font color="#8AAEB8" size="4">公共信息</font> &gt;<font color="#8AAEB8">推荐学校</font>
            &gt;<font color="#8AAEB8">详细信息</font>
        </p>
        <hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>

        <div class="container" style="margin-top:15px;color:#8AAEB8 ">
            <h2 style="text-align:center"><?php echo ($data["kname"]); ?></h2>
            <p style="text-align:center">创建时间：<?php echo ($data["ktime"]); ?>&nbsp;&nbsp;校长：<?php echo ($data["kpresident"]); ?>&nbsp;&nbsp;
          		 学校 地址：<?php echo ($data["klication"]); ?>&nbsp;&nbsp;类型：<?php echo ($data["kleixing"]); ?></p>
            <br />
            <br />
            <p style="font-size:20px;">校训:</p>
            <p style="margin-left:20px;"><?php echo ($data["txiaoshun"]); ?></p>
            <p style="font-size:20px;">学校简介:</p>
            <p style="margin-left:20px;"><?php echo ($data["tprofile"]); ?></p>
             <p style="font-size:20px;">硕士点:</p>
            <p style="margin-left:20px;"><?php echo ($data["kshuoshi"]); ?></p>
             <p style="font-size:20px;">学校历史:</p>
            <p style="margin-left:20px;"><?php echo ($data["khistory"]); ?></p>
            <p style="font-size:20px;">详情:</p>
            <p style="margin-left:20px;"><?php echo ($data["kcondition"]); ?></p>
            <a class="btn" href="/chapter11a/Admin/Pub/school" style="font-size:20px;margin-left:50px">返回</a>
            <a class="btn" href="/chapter11a/Admin/Pub/addschool" style="font-size:20px;">添加</a>
            <a class="btn" href="/chapter11a/Admin/Pub/deleteSch/nid/<?php echo ($data["kid"]); ?>" style="font-size:20px;">删除</a>
        </div>
        <style type="text/css">
            .viewNews{
                background-color: mediumvioletred;
            }
        </style>
    </div>
</body>
</html>