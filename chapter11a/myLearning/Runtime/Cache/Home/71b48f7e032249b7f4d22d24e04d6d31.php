<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>HaFood</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/chapter11a/Public/home/assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/bootstrap.min.css">

    <!--====== Pe Icon 7 Stroke css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/Pe-icon-7-stroke.css">

    <!--====== Ion Icons css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/chapter11a/Public/home/kaoyan/css/bootstrap.css">
		<link rel="stylesheet" href="/chapter11a/Public/home/kaoyan/css/main.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/animate.min.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/nice-select.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="/chapter11a/Public/home/assets/css/style.css">

    <style>
.button {
    background-color: White;
    border: none;
  
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>

<body>

    <!--====== PRELOADER  PART START ======-->

    <div id="preloader">
        <div id="loader">
            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
    </div>

    <!--====== PRELOADER  PART ENDS ======-->

    <!--====== SEARCH PART START ======-->

    <div class="search-box">
        <div class="search-header">
            <div class="container mt-60">
                <div class="row">
                    <div class="col-6">
                        <h5 class="search-title">Search</h5> <!-- search title -->
                    </div>
                    <div class="col-6">
                        <div class="search-close text-right">
                            <button class="search-close-btn">Close <span></span><span></span></button>
                        </div> <!-- search close -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search header -->
        <div class="search-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Search for Products">
                                <button><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search body -->
    </div>

    <!--====== SEARCH PART ENDS ======-->

    <!--====== SHOPPING CART PART START ======-->

    <div class="shopping-cart-wrapper">
        <div class="shopping-cart-canvas">
            <div class="shopping_cart">
                <div class="shopping_cart-top-bar d-flex justify-content-between">
                    <h6>欢迎您！<?php echo ($userinfo["sname"]); ?></h6>
                    <button class="shopping-cart-close">
                        <i class="ion ion-md-add"></i>
                    </button>
                </div>
                <div class="shopping_cart-list-items mt-30">
                    <?php if($userinfo["spic"] == 0 ): ?><img  width="200px" height="200px" src="/chapter11a/Public/Uploads/stuPic/11.jpg" alt=""/>
										<?php else: ?><img  width="200px" height="200px" src="/chapter11a/Public/Uploads/stuPic/<?php echo ($userinfo["spic"]); ?>" /><?php endif; ?>
                </div> <!-- shopping_cart list items -->
                <div class="shopping_cart-btn">
                    <div class="total pt-35 d-flex justify-content-between">
                        <h5>学号:</h5>
                        <p><?php echo ($userinfo["sno"]); ?></p>
                    </div>
                    <div class="cart-btn pt-25">
                        <a class="main-btn"  href="<?php echo u('Stusercenter/index');?>">我的中心</a>
                        
                    </div>
                </div>
            </div> 
        </div>
        <div class="overlay"></div>
    </div>

    <!--====== SHOPPING CART PART ENDS ======-->

    <!--====== HEADER  PART START ======-->

  
        <div class="navigation fixed-top">
            <div class="container-fluid pl-60 pr-60">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="/chapter11a/Public/home/assets/images/logo-4.png" alt="Logo" width="120px" height="50px">
                            </a> <!-- Logo -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button> <!-- navbar-toggler -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="<?php echo u('zhuye/index');?>">首页</a>
                                  
                                    </li>
                                    <li class="nav-item"><a href="<?php echo u('kaoyan/index');?>">考研</a></li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?php echo u('class/index');?>">课程</a>
                                       
                                    </li>
                                    <li class="nav-item">
                                    <a class="page-scroll" href="<?php echo u('job/index');?>">就业</a>
                                        
                                    </li>
                                    <li class="nav-item"><a class="page-scroll" href="product-grid.html">论坛</a></li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?php echo u('english/index');?>">四六级</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="navbar-icon d-none d-sm-block">
                                <ul>
                                    <li><a class="search-open" href="#"><i class="pe-7s-search"></i></a></li>
                                    <li><a class="shopping-cart-open" href="#"><i class="pe-7s-cart"></i></a></li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->
  

    <!--====== HEADER  PART ENDS ======-->
<div class="banner-a">
<div class="main-wrapper-first">
		<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo" style="margin-left: 50px;">
								<img src="/chapter11a/Public/home/kaoyan/img/logo-4.png">
							</div>
							<div class="main-menubar d-flex align-items-center">
								<p style="margin-right:50px ;margin-top: 30px; font-size: 20px;color: white;">欢迎您！</p>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<h1 class="text-white text-uppercase">welcome to qihang</h1>
								<a href="#1" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a name="1"></a>
			<section class="featured-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single-feature d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-sun"></span>
								</div>
								<div class="desc">
									<a href="#2"><h6 class="title text-uppercase">名师推荐</h6></a>
									<p>走进每一个学生的心灵，拥有姹紫嫣红的春天</p>
								</div>
							</div>
						</div>
 				
						<div class="col-md-4">
							<div class="single-feature d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-code"></span>
								</div>
								<div class="desc">
									<a href="#3"><h6 class="title text-uppercase">全部课程</h6></a>
									<p>数学、英语、政治等各个专业视频课程应有尽有！</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-clock"></span>
								</div>
								<div class="desc">
									<a href="#4"><h6 class="title text-uppercase">学校简介</h6></a>
									<p>全国的学校都在这里！</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="service-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="section-title text-center">
								<h1 class="text-white"><a name="2"></a>名师推荐</h3>
							</div>
						</div>
					</div>
					<div class="row">
					 <?php if(is_array($list3)): foreach($list3 as $key=>$v): ?><div class="col-lg-3 col-sm-6">
							<div class="single-service">
								<div class="thumb" style="background: url(/chapter11a/Public/Uploads/teacherPic/<?php echo ($v["jpic"]); ?>);">
									<div class="overlay overlay-content d-flex justify-content-center align-items-center">
										<a href="<?php echo U('kaoyan/teacher','jid='.$v['jid']);?>" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10"><?php echo ($v["jname"]); ?></span><span class="lnr lnr-arrow-right"></span></a>
									</div>
								</div>
								<div class="desc">
									<h3 class="text-uppercase text-white"><?php echo (msubstr($v["tspec"],0,6,'utf-8',true)); ?></h3>
									<p class="text-white" style="margin: 15px;"><?php echo (msubstr($v["jprofile"],0,20,'utf-8',true)); ?></p>
									<p class="text-white"><?php echo ($v["jname"]); ?></p>
								</div>
							</div>
						</div><?php endforeach; endif; ?>
				</div>
				<div class="pageList" style="margin-left: 800px;font-size:30px" >
       			 		<?php echo ($page3); ?>
   			 		</div>
				</div>
			</section>
		</div>
		
		<div class="main-wrapper-first">
			<section class="service-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="section-title text-center">
								<h1 class="text-white"><a name="3"></a>全部课程</h3>
							</div>
						</div>
					</div>
					<div class="main-menubar d-flex align-items-center">
						<a href="<?php echo u('kaoyan/index');?>"><p style="margin-left: 20px; font-size: 20px;color: white;">综合</p></a>
						<a href="<?php echo u('kaoyan/hot');?>#"><p style="margin-left: 20px; font-size: 20px;color: white;">热门</p></a>
						<a href="<?php echo u('kaoyan/latest');?>"><p style="margin-left: 20px; font-size: 20px;color: white;">最新</p></a>
					</div>
					<div class="row">
					<?php if(is_array($list2)): foreach($list2 as $key=>$v): ?><div class="col-lg-3 col-sm-6">
							<div class="single-service">
							
								<div class="thumb" style="background: url(/chapter11a/Public/Uploads/couPic/<?php echo ($v["tpic"]); ?>);">
									<div class="overlay overlay-content d-flex justify-content-center align-items-center">
										<a href="<?php echo U('class/detail','tid='.$v['tno']);?>" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10"><?php echo ($v["tname"]); ?></span><span class="lnr lnr-arrow-right"></span></a>
									</div>
								</div>
							
								<div class="desc">
									<h6 class="text-uppercase text-white"><?php echo (msubstr($v["tname"],0,10,'utf-8',true)); ?></h6>
									<p class="text-white"><?php echo (msubstr($v["tprofile"],0,30,'utf-8',true)); ?></p>
								</div>
									<div>
									<a class="button" href="<?php echo U('Stusercenter/addcollecttj','s='.$v['tno']);?>">收藏</a>
									<a class="button" href="<?php echo U('Stusercenter/addcoursetj','s='.$v['tno']);?>">选课</a>
								</div>
							</div>
						</div><?php endforeach; endif; ?>
					</div>
					<div class="pageList" style="margin-left: 800px;font-size:30px" >
       			 		<?php echo ($page2); ?>
   					 </div>
				</div>
			</section>
		</div>
		
		<div class="main-wrapper-first">
			<section class="service-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="section-title text-center">
								<h1 class="text-white"><a name="4"></a>学校简介</h3>
							</div>
						</div>
					</div>
					<div class="row">
					<?php if(is_array($list1)): foreach($list1 as $key=>$v): ?><div class="col-lg-3 col-sm-6">
							<div class="single-service">
								<div class="thumb" style="background: url(/chapter11a/Public/Uploads/schPic/<?php echo ($v["kpic"]); ?>);">
									<div class="overlay overlay-content d-flex justify-content-center align-items-center">
										<a href="<?php echo U('kaoyan/school','kid='.$v['kid']);?>" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10"><?php echo ($v["kname"]); ?></span><span class="lnr lnr-arrow-right"></span></a>
									</div>
								</div>
								<div class="desc">
									<h6 class="text-uppercase text-white"><?php echo (msubstr($v["kname"],0,10,'utf-8',true)); ?></h6>
									<p class="text-white"><?php echo (msubstr($v["tprofile"],0,30,'utf-8',true)); ?></p>
								</div>
							</div>
						</div><?php endforeach; endif; ?>
				
				</div>
				<div class="pageList" style="margin-left: 800px;font-size:30px" >
       			 		<?php echo ($page1); ?>
   					 </div>
				
			</section>
		</div>
</div>

    <!--====== BACK TO TOP ======-->
    <div class="back-to-top">
        <a href="">
            <i class="ion ion-md-arrow-up"></i>
        </a>
    </div>
    <!--====== BACK TO TOP ======-->



    <!--====== jquery js ======-->
    <script src="/chapter11a/Public/home/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/chapter11a/Public/home/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/chapter11a/Public/home/assets/js/bootstrap.min.js"></script>
    <script src="/chapter11a/Public/home/assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="/chapter11a/Public/home/assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="/chapter11a/Public/home/assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="/chapter11a/Public/home/assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/chapter11a/Public/home/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="/chapter11a/Public/home/assets/js/jquery.nice-select.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="/chapter11a/Public/homeadmin/assets/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="/chapter11a/Public/home/assets/js/main.js"></script>

</body>

</html>