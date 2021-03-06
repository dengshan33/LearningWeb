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
    <link rel="stylesheet" type="text/css" href="/chapter11a/Public/home/english/styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/chapter11a/Public/home/english/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/chapter11a/Public/home/english/styles/responsive.css">
 <style>
.button {
    background-color: pink;
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
                                    <li class="nav-item"><a class="page-scroll" href="product-grid.html">讨论</a></li>
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
  

 <div class="banner-a">
<div class="super_container main-wrapper-first">

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">欢迎来到启航学习四六级</h2>
						<div class="section_subtitle"><p>在这里，有优秀的讲师，完美的书籍供你在线学习。</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="/chapter11a/Public/home/english/images/icon_1.png" alt=""></div>
						<h3 class="feature_title">优秀讲师</h3>
						<div class="feature_text"><p>包你一听就懂，一学就会！</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="/chapter11a/Public/home/english/images/icon_2.png" alt=""></div>
						<h3 class="feature_title">书籍</h3>
						<div class="feature_text"><p>涵盖了各种四六级的书，有你想不到，没你找不到！</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="/chapter11a/Public/home/english/images/icon_3.png" alt=""></div>
						<h3 class="feature_title">四六级课程</h3>
						<div class="feature_text"><p>为你量身定做的四六级课程，让你有意想不到的收获！</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="/chapter11a/Public/home/english/images/icon_4.png" alt=""></div>
						<h3 class="feature_title">奖励</h3>
						<div class="feature_text"><p>完成了课程记得还有小奖励哦！</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">课程</h2>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				<?php if(is_array($list3)): foreach($list3 as $key=>$v): ?><!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="/chapter11a/Public/Uploads/couPic/<?php echo ($v["tpic"]); ?>" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="<?php echo U('class/detail','tid='.$v['tno']);?>"><?php echo ($v["tname"]); ?></a></h3>
							<div class="course_teacher"><?php echo ($v["teachername"]); ?></div>
							<div class="course_text">
								<p><?php echo (msubstr($v["tprofile"],0,20,'utf-8',true)); ?></p>
							</div>
						</div>
						<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="button" href="<?php echo U('Stusercenter/addcollecttj','s='.$v['tno']);?>">收藏</a>
									<a class="button" href="<?php echo U('Stusercenter/addcoursetj','s='.$v['tno']);?>">选课</a>
								
								</div>
					</div>
				</div><?php endforeach; endif; ?>

				</div>
			
			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="<?php echo u('english/all');?>">查看所有课程</a></div>
				</div>
			</div>
		
		</div>
	</div>

	<!-- Events -->

	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">书籍推荐</h2>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				<?php if(is_array($list2)): foreach($list2 as $key=>$v): ?><!-- Course -->
				<div class="col-lg-3 course_col">
					<div class="course">
						<div class="course_image"><img src="/chapter11a/Public/Uploads/bookPic/<?php echo ($v["spic"]); ?>" alt="" width="300px" height="250px"> </div>
						<div class="course_body">
							<div class="course_teacher"><?php echo ($v["sname"]); ?></div>
							<div class="course_text">
								<p><?php echo ($v["sprice"]); ?></p>
							</div>
						</div>
					
					</div>
				</div><?php endforeach; endif; ?>

				</div>
			<div style="margin-left: 800px;font-size:30px"><?php echo ($page2); ?></div>
			</div>
		
		</div>
	</div>
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