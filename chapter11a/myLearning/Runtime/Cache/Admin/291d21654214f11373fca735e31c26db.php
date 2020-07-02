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
            <font color="#8AAEB8" size="4">招聘信息</font> &gt;<font color="#8AAEB8">查看信息</font>
            &gt;<font color="#8AAEB8">详细信息</font>
        </p>
        <hr style="margin-top: 10px;margin-bottom: 0px;border-top: 2px solid #8AAEB8;"/>

        <div class="container" style="margin-top:15px;color:#8AAEB8 ">
            <h2 style="text-align:center"><?php echo ($data["mfirm"]); ?></h2>
            <p style="text-align:center">公司类型：<?php echo ($data["mfirmleixing"]); ?>
            &nbsp;&nbsp;招聘人数：<?php echo ($data["mpeople"]); ?>&nbsp;&nbsp;联系方式：<?php echo ($data["mnumber"]); ?>
            &nbsp;&nbsp;工作薪水：<?php echo ($data["msalary"]); ?>&nbsp;&nbsp;工作区域：<?php echo ($data["mlocation"]); ?></p>
            <br />
            <br />
            <p style="font-size:20px;">招聘岗位:</p>
            <p style="margin-left:20px;"><?php echo ($data["mname"]); ?></p>
             <p style="font-size:20px;">基本要求:</p>
            <p style="margin-left:20px;"><?php echo ($data["mrequire"]); ?>&nbsp;&nbsp;学历要求：<?php echo ($data["mxueli"]); ?></p>
             <p style="font-size:20px;">工作时间:</p>
            <p style="margin-left:20px;"><?php echo ($data["mtime"]); ?></p>
            <p style="font-size:20px;">具体工作地点:</p>
            <p style="margin-left:20px;"><?php echo ($data["mlocate"]); ?></p>
             <p style="font-size:20px;">岗位职责:</p>
            <p style="margin-left:20px;"><?php echo ($data["mzhizhe"]); ?></p>
            <p style="font-size:20px;">通知方式:</p>
            <p style="margin-left:20px;"><?php echo ($data["mform"]); ?></p>
            <a class="btn" href="/chapter11a/Admin/EmployManage/mpinfo" style="font-size:20px;margin-left:50px">返回</a>
            <a class="btn" href="/chapter11a/Admin/EmployManage/addmp" style="font-size:20px;">添加</a>
            <a class="btn" href="/chapter11a/Admin/EmployManage/deletemp/nid/<?php echo ($data["mid"]); ?>" style="font-size:20px;">删除</a>
        </div>
        <style type="text/css">
            .viewNews{
                background-color: mediumvioletred;
            }
        </style>
    </div>
</body>
</html>