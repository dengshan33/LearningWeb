<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <title>我的课程</title>
    <link rel="stylesheet" href="/chapter11a/Public/home/css/bootstrap.css">
    <link rel="stylesheet" href="/chapter11a/Public/home/css/mycourse.css">
    <link href="/chapter11a/Public/home/css/student.css" type="text/css" rel="stylesheet" media="all" />
<style type="text/css">
.aa{
	box-shadow: 0 1px 6px 2px rgba(1,1,1,0.6);
    border-radius: 2px;
    border: 2px solid rgba(1,1,1,0.6);
    transition: all 0.5s;
    position: relative;
    cursor: pointer;
   }
.aa:hover{
    transform: scale(1.05);
    box-shadow: 0 1px 8px 4px rgba(1,1,1,0.8);
    border: 2px solid rgba(1,1,1,0.8);
}
.info{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 280px;
    height: 0;
    overflow: hidden;
    padding: 0 10px;
    z-index: 200;
    transition: all 0.5s;
    background-color: rgba(0,0,0,0.6);
}
.aa:hover > .info{
    height: 80px;
}
.info p{
    font-size: 16px;
    font-family: SourceHanSansCN-Medium, sans-serif;
    color: #f0f0f0;
    margin: 5px 0;
    padding: 0;
    line-height: 30px;
    height: 30px;
    text-shadow: 1px 1px rgba(1,1,1,0.6);
}
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
<body style="margin:0;" >
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
    <div class="popular_courses lite_bg" style="background:url(/chapter11a/Public/home/images/body-bg.jpg)no-repeat center 0px;background-attachment:fixed;" >
        <div class="container">
            <div class="row justify-content-center">
                
                        <h2>我的推荐课程</h2>
               
               <hr style="border: none;margin: 0;height: 1px;background-color: #23262c;"/>
			   <br />	
            </div>
            <div style="width:1200px;height:500px">
               
                
                <?php if(is_array($cours)): foreach($cours as $key=>$nn): ?><div class="single_course ">
                     
                        <div class="course_head overlay aa">
                            <img class="img-fluid w-100" style="width:300px;height:250px" src="/chapter11a/Public/Uploads/couPic/<?php echo ($nn["tpic"]); ?>" alt="">
                            
                            <div class="info">
							      <p><?php echo (msubstr($nn["tname"],0,8,'utf-8',true)); ?></p>							                     
							      <p style="font-size: 14px;">课程号：<?php echo ($nn["tno"]); ?></p>
							 </div>
                        </div>
                        <div class="course_content" style="width:300px;height:250px">
                            <h4>
                                <a href="<?php echo U('Stusercenter/contentTjc','b='.$nn['tno']);?>" title="<?php echo ($nn["tname"]); ?>"><?php echo (msubstr($nn["tname"],0,10,'utf-8',true)); ?></a>
                            </h4>
                            <p><?php echo (msubstr($nn["tprofile"],0,15,'utf-8',true)); ?></p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        355
                                    </span>
                                    <span class="meta_info">
                                            35
                                    </span>
                                </div>
                                <div>
                                    <span class="price">
                                    <a href="<?php echo U('Stusercenter/deleteCourtj','sid='.$nn['sid']);?>">退课</a></span>
                                </div>
                            </div>
                        </div>
                       
                    </div><?php endforeach; endif; ?>
              	
                </div>
           <div style="margin-left: 100px;margin-bottom:20px;"><?php echo ($page); ?></div>
                <!-- single course -->
                     
          
        </div>
    </div>
</body>
</html>