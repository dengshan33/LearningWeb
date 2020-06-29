<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    
    <title>课程详情</title>
  <link rel="stylesheet" href="/chapter11a/Public/home/css/bootstrap.css" />
    <link rel="stylesheet" href="/chapter11a/Public/home/css/style.css" />
    <link href="/chapter11a/Public/home/css/student.css" type="text/css" rel="stylesheet" media="all" />
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
<body>
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
    <section class="course_details_area section_gap" style="background:url(/chapter11a/Public/home/images/body-bg.jpg)no-repeat center 0px;background-attachment:fixed;">
        <div class="container">
            <div class="row" style="width:1000px;margin-left:80px;;">
                <div class="col-lg-8 course_details_left" >
                    <div class="main_image">
                        <img class="img-fluid" style="width:500px;height:350px" src="/chapter11a/Public/Uploads/couPic/<?php echo ($cour["tpic"]); ?>" alt="" />
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">课程详情</h4>
                        <div class="content">
                           <p><?php echo ($cour["tname"]); ?></p>
                            <br />
                           
                        </div>

                        <h4 class="title">课程内容</h4>
                        <div class="content">
                          <p><?php echo ($cour["tprofile"]); ?></p>
                            <br />
                            
                           
                        </div>

                        <h4 class="title">课程目录</h4>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between d-flex">
                                    <p>Introduction Lesson</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Basics of HTML</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Getting Know about HTML</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Tags and Attributes</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Basics of CSS</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Getting Familiar with CSS</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Introduction to Bootstrap</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Responsive Design</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Canvas in HTML 5</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>授课老师</p>
                                <span class="or"><?php echo ($cour["teachername"]); ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>课程号</p>
                                <span><?php echo ($cour["tno"]); ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>课程人数</p>
                                <span><?php echo ($count); ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>时间</p>
                                <span><?php echo ($cour["ttime"]); ?></span>
                            </a>
                        </li>
                    </ul>
                    
                    <h4 class="title">课程信息</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                               
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <p>所属学校:&nbsp;&nbsp;&nbsp;<?php echo ($cour["tschool"]); ?></p>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <p>发布时间:&nbsp;&nbsp;&nbsp;<?php echo ($cour["tnowtime"]); ?></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>你的建议</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="primary-btn text-right text-uppercase">Submit</a>
                            </div>
                        </div>
                        <div class="comments-area mb-30">
                        <h3>选课学生</h3>
                        <?php if(is_array($stu)): foreach($stu as $key=>$nn): ?><div class="comment-list" style="width:350px;height:100px;">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <?php if($nn["spic"] == 0 ): ?><img src="/chapter11a/Public/Uploads/stuPic/1.jpg" style="width:70px;height:70px; border: 5px solid rgba(0, 0, 0, 0.68);" alt="2" />
                                       		<?php else: ?><img style="width:70px;height:70px; border: 5px solid rgba(0, 0, 0, 0.68);" src="/chapter11a/Public/Uploads/stuPic/<?php echo ($nn["spic"]); ?>" /><?php endif; ?>
                                        </div>
                                        <div class="desc">
                                            <h4><a href="#">学号：<?php echo ($nn["sno"]); ?></a></h4>
                                            <p class="comment">
                                              		姓名：<?php echo ($nn["sname"]); ?> ；性别：<?php echo ($nn["ssex"]); ?>
                                              		</p>
                                              	<p class="comment">
                                              		学院:<?php echo ($nn["scolle"]); ?>
                                                 </p>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; ?>
                           
                        </div>
                        <div style="margin-left: 20px;margin-bottom:20px;margin-top:10px;"><?php echo ($page); ?></div>
                         </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>