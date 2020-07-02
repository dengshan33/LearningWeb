<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/gongwei/qihang/Public/Admin/css/base.css" />
    <link rel="stylesheet" href="/gongwei/qihang/Public/Admin/css/info-mgt.css" />
    <link rel="stylesheet" href="/gongwei/qihang/Public/Admin/css/WdatePicker.css" />
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/gongwei/qihang/Public/Home/css/Style.css"/>
    <title>一卡通后台管理系统</title>
    <style type='text/css'>
        table tr .id{ width:63px; text-align: center;}
        table tr .username{ width:118px; padding-left:17px;}
        table tr .truename{ width:100px; padding-left:17px;}
        table tr .role_id{ width:80px; padding-left:13px;}
        table tr .sex{ width:63px; padding-left:13px;}
        table tr .birthday{ width:120px; padding-left:13px;}
        table tr .tel{ width:113px; padding-left:13px;}
        table tr .card_id{ width:120px; padding-left:13px;}
        table tr .email{ width:160px; padding-left:13px;}
        table tr .addtime{ width:160px; padding-left:13px;}
        table tr .operate{ width:200px;padding-left: 13px;}
    </style>
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
<section>
    <hr style="margin: 80px 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div class="table-box">
        <table>
            <thead>
            <tr>
                <th class="id"  style="text-align: center;">序号</th>
                <th class="username" style="text-align: center;">用户名</th>
                <th class="truename"  style="text-align: center;">真实姓名</th>
                <th class="sex"  style="text-align: center;">性别</th>
                <th class="birthday"  style="text-align: center;">生日</th>
                <th class="tel"  style="text-align: center;">电话</th>
                <th class="card_id"  style="text-align: center;">课程号</th>
                <th class="email"  style="text-align: center;">邮箱</th>
                <th class="addtime"  style="text-align: center;">添加时间</th>
                <th class="role_id"  style="text-align: center;">专业</th>
                <th class="sex"  style="text-align: center;">信用状态</th>
                <th class="operate" style="margin-left: 100px; text-align: center;" >操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                    <td class="id"><?php echo ($vol["id"]); ?></td>
                    <td class="username"><?php echo ($vol["username"]); ?></td>
                    <td class="truename"><?php echo ($vol["truename"]); ?></td>
                    <td class="sex"><?php echo ($vol["sex"]); ?></td>
                    <td class="birthday"><?php echo ($vol["birthday"]); ?></td>
                    <td class="tel"><?php echo ($vol["tel"]); ?></td>
                    <td class="card_id"><?php echo ($vol["card_id"]); ?></td>
                    <td class="email"><?php echo ($vol["email"]); ?></td>
                    <td class="addtime"><?php echo ($vol["addtime"]); ?></td>
                    <td class="addtime"><?php echo ($vol["college_id"]); ?></td>
                    <td class="addtime"><?php echo ($vol["credit"]); ?></td>
                    <td class="operate" >
                        <a href="javascript:;"  class="edit" style="margin-left: 20px;text-decoration: none;"  data='<?php echo ($vol["id"]); ?>' data-title='<?php echo ($vol["username"]); ?>'>编辑</a>&nbsp;&nbsp;|
                        <a href="javascript:;"  class="look" style="margin-left: 0;text-decoration: none;"  data='<?php echo ($vol["id"]); ?>' data-title='<?php echo ($vol["username"]); ?>'>查看</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="pagination ue-clear">
        <div class="pagin-list">
            <?php echo ($show); ?>
        </div>
        <div class="pxofy">显示第 1 条到 9 条记录，总共<?php echo ($count); ?>条记录</div>
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
                <p style="line-height: 20px;"><a href="<?php echo U('Index/index');?>">首页</a>
                    <a style="margin-left: 20px;" href="<?php echo U('View/service1');?>">管理中心</a></p>
                <p></p>
                <p><a href="<?php echo U('Back/index');?>">个人信息</a>
                    <a style="margin-left: 20px;"  href="<?php echo U('Public/logout');?>">退出登录</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
<script type="text/javascript" src="/gongwei/qihang/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/gongwei/qihang/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/gongwei/qihang/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/gongwei/qihang/Public/Adminjs//layer.js"></script>
<script type="text/javascript" src="/gongwei/qihang/Public/Admin/js/jquery.pagination.js"></script>
<script type="text/javascript">
    $(".select-title").on("click",function(){
        $(".select-list").hide();
        $(this).siblings($(".select-list")).show();
        return false;
    });
    $(".select-list").on("click","li",function(){
        var txt = $(this).text();
        $(this).parent($(".select-list")).siblings($(".select-title")).find("span").text(txt);
    });
    /*
     $('.pagination').pagination(100,{
     callback: function(page){
     alert(page);
     },
     display_msg: true,
     setPageNo: true
     });
     */
    $("tbody").find("tr:odd").css("backgroundColor","#eff6fa");
    showRemind('input[type=text], textarea','placeholder');

    //jQuery代码
    $(function(){
        //给删除按钮绑定点击事件
        $('.del').on('click',function(){
            //事件处理程序
            var idObj = $(':checkbox:checked');	//获取全部已经被选中的checkbox
            var id = '';	//接收处理后的部门id值，组成id1,id2,id3...
            //循环遍历idObj对象，获取其中的每一个值
            for (var i = 0; i < idObj.length; i++) {
                id += idObj[i].value + ',';
                //alert(idObj[i].value('role_id'));
            }
            //去掉最后逗号
            id = id.substring(0,id.length - 1);
            //判断id
            if(id==''){
                return false;
            }
            //带着参数跳转到del方法
            window.location.href = '/gongwei/qihang/Admin/User/del/id/' + id;
        });
    });
    //jQuery代码
    $(function(){
        //给查看按钮绑定点击事件
        $('.look').on('click',function(){
            //获取id
            var id = $(this).attr('data');
            //获取公文标题
            var title = $(this).attr('data-title');
            layer.open({
                type: 2,
                title: title,
                shadeClose: true,
                shade: 0,   //背景透明
                area: ['560px', '90%'],
                content: '/gongwei/qihang/Admin/User/showContent/id/' + id //iframe的url
            });
        });
    });
</script>
</html>