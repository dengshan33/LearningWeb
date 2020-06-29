<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>学生信息页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/chapter11a/Public/home/css/student.css" type="text/css" rel="stylesheet" media="all">
<link href="/chapter11a/Public/home/css/stuindexchange.css" type="text/css" rel="stylesheet" media="all">
<script src="/chapter11a/Public/home/js/jquery.min.js"></script>
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
						
					</ul>
		
</div>

	<div id="home" class="banner">
		<div class="banner-info">
			<div>
				<div class="col-md-1">&nbsp;</div>
				<div class="col-md-4 header-left" >
				<?php if($userinfo["spic"] == 0 ): ?><img  width="300px" height="300px" src="/chapter11a/Public/Uploads/stuPic/11.jpg" alt=""/>
										<?php else: ?><img  width="300px" height="300px" src="/chapter11a/Public/Uploads/stuPic/<?php echo ($userinfo["spic"]); ?>" /><?php endif; ?>
					<a href="javascript:void(0)" id="adminBtn" style="float:left;">修改密码</a>
					<a  href="/chapter11a/Home/Stulogin/logout" style="float:right;margin-right:50px;">退出登录</a>
				</div>
				<div class="col-md-8 header-right">
					<h2>Hello</h2>
					<h1><?php echo ($userinfo["sname"]); ?></h1>
					<h6>简介。。。。。。</h6>
					<ul class="address">
						<li>
							<ul class="address-text">
								<li><b>学号</b></li>
								<li><?php echo ($userinfo["sno"]); ?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>学校</b></li>
								<li><?php echo ($userinfo["school"]); ?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>学院</b></li>
								<li><?php echo ($userinfo["scolle"]); ?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>基本信息</b></li>
								<li>年级：<?php echo ($userinfo["syear"]); ?>&nbsp;专业：<?php echo ($userinfo["smajor"]); ?>&nbsp;班级：<?php echo ($userinfo["sclass"]); ?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>电话</b></li>
								<li><?php echo ($userinfo["sphone"]); ?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>邮箱</b></li>
								<li><?php echo ($userinfo["semail"]); ?></li>
							</ul>
						</li>
					</ul>
					<a  href="#" onclick="winpop()" style="float:right;margin-right:50px;">修改信息</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
 
         <!-- 修改密码主体 -->
         <div id="login" class="login">
             <!-- 登陆框标题 -->
             <div id="login-title" class="login-title">
                 修改密码
                 <span><a id="closeBtn" href="javascript:void(0)">关闭</a></span>
             </div>
           <form method="post" action="/chapter11a/Home/Stusercenter/changepwdtest" id="myform" name="myform" onSubmit="return chkinput(this)">
             <!-- 登陆框表单 -->
             <div id="login-form">
            
                 <div class="login-input">
                     <label>原密码：</label>
                     <input type="text" placeholder="请输入原密码" class="list-input" name="old" required/>
                 </div>
 
                 <div class="login-input">
                     <label>新密码：</label>
                     <input type="password" placeholder="请输入新密码" class="list-input" name="new1"  id="new1" required/>
                 </div>
                 <div class="login-input">
                     <label>确认密码：</label>
                     <input type="password" placeholder="请再次输入新密码" class="list-input" name="new2" id="new2" required/>
                 </div>
             </div>
             <!-- 登陆框登陆按钮 -->
             <input type="submit"  id="loginSubmit" value="确认修改" class="loginSubmit"/>  
              <input type="reset"  id="loginSubmit1" value="重置" class="loginSubmit"/>
        </form>
         </div>
 
         <!-- 遮盖层 -->
         <div id="bg" class="bg">sada</div>
         
          
	</div>    
         <script type="text/javascript">
             var login=document.getElementById('login');
             var bg=document.getElementById('bg');
             // 1.点击"点击，弹出登陆框",弹出登陆窗口和遮盖层
             var adminBtn=document.getElementById('adminBtn');
             adminBtn.onclick=function(){
                 login.style.display="block";
                 bg.style.display="block";
                 return false;
             }
             // 2.点击"关闭",隐藏登陆窗口和遮盖层
             var closeBtn=document.getElementById('closeBtn');
             closeBtn.onclick=function(){
                 login.style.display="none";
                 bg.style.display="none";
                 return false;
             }
             

             $("#new2").blur(function(){ //失去焦点时判断
         		if($(this).val() !== $("#new1").val()){
         			$(this).addClass('error');
         		}else{
         			$(this).removeClass('error');
         		}
         	});
         	$("myform").submit(function(){ //表单提交时判断
         		if($("#new2").val() !== $("#new1").val()){
         			alert('两次输入密码不一致！');
         			return false;
         		}
         	});
         	 function chkinput(form)
         	  {
         		 
         		 if(form.new1.value.length<6 ||form.new1.value.length>20)
         		 {
         		 alert("密码长度应大于6小于20!");
         		 form.new1.select();
         		 return(false);
         		 }
         		
         	  }
         
         	 
         	function winpop(){
         	 window.open("changeinfo.html","","top=300,left=300,width=500,height=500");
         	 }
         	
         </script>
         
  
</body>
</html>