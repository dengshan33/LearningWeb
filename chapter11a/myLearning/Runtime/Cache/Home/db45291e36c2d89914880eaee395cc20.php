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
    <link rel="stylesheet" href="/chapter11a/Public/home/kaoyan/school/css/school.css">
	<link rel="stylesheet" href="/chapter11a/Public/home/kaoyan/school/css/bootstrap.css" />

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
    <link rel="stylesheet" href="/chapter11a/Public/home/class/css/top-teacher.css">


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
                                    <a class="page-scroll" href="#service">就业</a>
                                        
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
 <section class="course_details_area main-wrapper-first service-area">
 <?php if(is_array($detail)): foreach($detail as $key=>$v): ?><div class="container">
            <div>
                <div class="col-lg-12 course_details_left">
					<h2 style="color: #000000;font-family: 微软雅黑;"><?php echo ($v["kname"]); ?></h4>
					
					
					<div class="container">
						<div class="row clearfix">
						
							<div class="col-md-8 column">
								<img class="img-school" src="/chapter11a/Public/Uploads/schPic/<?php echo ($v["kpic"]); ?>" / width=270px; height=170px;>
							</div>
							<div class="col-md-4 column">
								<p ><?php echo ($v["tprofile"]); ?>
								</p>
							</div>
							
						</div>
						<div class="row clearfix">
								<div class="col-md-6 column">
									<div style="margin-top:50px ;">
										<ul>
										    <li>
										        <div style="font-family: 宋体;">所属地区&nbsp;&nbsp;&nbsp;<?php echo ($v["klication"]); ?></div>
												<div class="clear"></div>
										    </li>
											<li>
											    <div style="font-family: 宋体;">校训 &nbsp;&nbsp;&nbsp;<?php echo ($v["txiaoshun"]); ?> </div>
											</li>
											<li>
											    <div style="font-family: 宋体;">创办时间&nbsp;&nbsp;&nbsp;<?php echo ($v["ktime"]); ?>年 </div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 column">
									<div style="margin-top:50px ;">
										<ul>
										    <li>
										        <div style="font-family: 宋体;">现任校长 &nbsp;&nbsp;&nbsp;<?php echo ($v["kpresident"]); ?></div>
												<div class="clear"></div>
										    </li>
											<li>
											    <div style="font-family: 宋体;">学校类型 &nbsp;&nbsp;&nbsp;<?php echo ($v["kleixing"]); ?></div>
											</li>
											<li>
											    <div style="font-family: 宋体;">硕士点 &nbsp;&nbsp;&nbsp;<?php echo ($v["kshuoshi"]); ?> </div>
											</li>
										</ul>
									</div>
								</div>
							</div>
			
						<div class="row clearfix">
							<div class="col-md-12 column">
								<h4 class="title" style="color: #000000; font-family: 微软雅黑">学校简介</h4>
								<div style="color: #000000; font-family: 宋体;">
								    <?php echo ($v["tprofile"]); ?>
								    <br>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-md-12 column">
								<h4 class="title" style="color: #000000; font-family: 微软雅黑">历史沿革</h4>
								<div style="color: #000000; font-family: 宋体;">
								    <?php echo ($v["khistory"]); ?>
								    <br>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-md-12 column">
								<h4 class="title" style="color: #000000; font-family: 微软雅黑">办学条件</h4>
								<div style="color: #000000; font-family: 宋体;">
								    <?php echo ($v["kcondition"]); ?>
								    <br>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div><?php endforeach; endif; ?>
    </section>
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