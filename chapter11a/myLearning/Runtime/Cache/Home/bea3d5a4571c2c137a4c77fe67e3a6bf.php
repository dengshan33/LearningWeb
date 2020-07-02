<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <title>我的收藏</title>
    <link rel="stylesheet" href="/chapter11a/Public/home/css/bootstrap.css">
    <link href="/chapter11a/Public/home/css/student.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/chapter11a/Public/home/css/collectstyle.css" type="text/css" rel="stylesheet" media="all" />
<style type="text/css">
	.nav .two{
		display: none;
		position:absolute;
		z-index:999;
		background-color:#FF9900;
		width:160px;
		height:100px;
		color:red;
		background-color:rgba(0,0,0,0.4);
		}  /* 先使二级菜单的内容隐藏 */
    .nav>li:hover .two{display: block;}   /* 鼠标滑过一级菜单后的显示二级菜单 */
    .nav .two li{padding: 5px 0;transition: .4s;cursor: pointer;}
    /*.nav .two li:hover{background: pink;}*/
	ul,li{list-style:none;}
</style>
	</head>
<body style="background:url(/chapter11a/Public/home/images/body-bg.jpg)no-repeat center 0px;background-attachment:fixed;">
<div class="top-nav wow" style="background-color: #FF9900;">
					
					<ul class="nav navbar">
						<li>
                           <img src="/chapter11a/Public/home/assets/images/logo-4.png" alt="Logo" width="120px" height="50px">
                        </li>
                        <li><a href="<?php echo u('zhuye/index');?>" class="scroll">首页</a></li>
						<li><a href="<?php echo U('index');?>" class="scroll">个人中心</a></li>
						<li><a href="<?php echo U('mycourse');?>" class="scroll">我的课程</a>
							<ul class="two">
                        		<li style="margin-top:10px"><a href="<?php echo U('mycourse');?>">老师课程</a></li>
                        		<li style="margin-top:10px"><a href="<?php echo U('tjcourse');?>">推荐课程</a></li>
                        		
                    		</ul>
						</li>
						<li><a href="<?php echo U('mycollect');?>" class="scroll">我的收藏</a>
							<ul class="two">
                        		<li style="margin-top:10px"><a href="<?php echo U('mycollect');?>">课程收藏</a></li>
                        		<li style="margin-top:10px"><a href="<?php echo U('mycollecttj');?>">推荐收藏</a></li>
                        		
                    		</ul>
						</li>
						<!--  <li><a href="#education" class="scroll">我的班级</a></li>
					--></ul>
		
</div>
<div  class="content-body" style="position: relative">
        <div id="middle">
        <br /><br />
                <!--推荐信息-->
                <div id="detail">
                  <ul>我的推荐收藏<hr />
						
							<div class="match container">
							    <div class="content">
							        <div class="slide">
							      
							            <div class="match-list">
							            <?php if(is_array($cours)): foreach($cours as $key=>$nn): ?><div class="match-item">
							               
							                    <img height="300px" src="/chapter11a/Public/Uploads/couPic/<?php echo ($nn["tpic"]); ?>" width="100%" />
							                    <div class="info">
							                        <p><a href="<?php echo U('class/detail','tid='.$nn['tno']);?>"><?php echo (msubstr($nn["tname"],0,8,'utf-8',true)); ?></a></p>							                     
							                        <p style="font-size: 15px;">课程号：<?php echo ($nn["tno"]); ?></p>
							                         <p style="font-size: 15px;">收藏时间：<?php echo ($nn["rtime"]); ?></p>
							                    </div>
							                    
							                </div><?php endforeach; endif; ?>
										</div>
										
							            
							            <div class="clearfix"></div>
							        </div>
							    </div>
							    
							</div>
							
						<br />
						<br /> 
                    </ul>
                    <div style="margin-left: 100px;"><?php echo ($page); ?></div>
                </div>
           
        </div>

       
    </div>		
</body>
</html>