<?php session_start();?>

<?php include_once "rent_info_classes.php";
$obj = new rent_info_classes();

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>Online Rent Information System| Home</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="my%20class/style.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr
    ================================================== -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- ====== Header Mobile Area ====== -->
<header class="mobile-header-area bg-nero hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 tb">
                <div class="mobile-header-block">
                    <div class="menu-area tb-cell">
                        <!--Mobile Main Menu-->
                        <div class="mobile-menu-main hidden-md hidden-lg">
                            <div class="menucontent overlaybg"></div>
                            <div class="menuexpandermain slideRight">
                                <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                    <span></span>
                                </a>
                                <span id="menu-marker"></span>
                            </div><!--/.menuexpandermain-->
                            <div id="mobile-main-nav" class="main-navigation slideLeft">
                                <div class="menu-wrapper">
                                    <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    <div class="left-content">
                                        <ul>
                                            <li>
                                                <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.left-content -->
                                </div>
                            </div><!--/#mobile-main-nav-->
                        </div><!--/.mobile-menu-main-->
                    </div><!-- /.menu-area -->
                    <div class="logo-area tb-cell">
                        <div class="site-logo">
                            <a href="index.php">
                                <img src="assets/images/logo.png" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.logo-area -->
                    <div class="search-block tb-cell">
                        <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                    </div><!-- /.search-block -->
                    <div class="additional-content tb-cell">
                        <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                    </div><!-- /.additional-content -->
                </div><!-- /.mobile-header-block -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.mobile-header-area -->

<!-- ====== Header Top Area ====== -->
<header class="header-area bg-nero hidden-xs hidden-sm">
    <div class="container">
        <div class="header-top-content">
            <div class="row">
                <div class="col-md-7 col-sm-7 mobile-center">
                    <div class="site-logo">
                        <a href="index.php">
                            <img src="assets/images/logo.png" alt="site-logo" />
                        </a>
                    </div><!-- /.site-logo -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-5 col-sm-5 mobile-center">
                    <div class="left-content">
                        <ul>
                            <?php
                            if(isset($_SESSION['user_id'])){
                            ?>
                                <li>
                                    <a href="?page=user_profile.php" class=""><i class="fa fa-user-circle"></i><?php echo $_SESSION['name']; ?></a>
                                </li>
                                <li>
                                    <a href="?page=logout.php" class=""><i class="fa fa-power-off"></i>Logout</a>
                                </li>
                            <?php }else{ ?>
                                <li>
                                    <!--<a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>-->
                                    <a href="?page=user_login.php" class=""><i class="fa fa-address-book"></i>Login</a>
                                </li>
                                <li>
                                    <a href="?page=user_registration.php" class=""><i class="fa fa-address-book"></i>Registration</a>
                                </li>
                            <?php } ?>
                            <!--<li>
                                <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                            </li>-->
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.header-top-content -->
    </div><!-- /.container -->
</header><!-- /.head-area -->

<!-- ====== Header Bottom Content ====== -->
<header class="header-bottom-content bg-nero hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="?page=ads_blog.php">Ads</a></li>
                                <li><a href="?page=all_blog_show.php">Blog</a></li>
                                <li><a href="?page=gallery.php">Gallery</a></li>
                                <li><a href="?page=about.php">About</a></li>
                                <li>
                                    <?php
                                    if(isset($_SESSION['user_id'])){
                                        ?>
                                        <a href="?page=blog_post.php">Blog Post</a>
                                    <?php }else{ ?>
                                        <a href="?page=user_login.php">Blog Post</a>
                                    <?php } ?>
                                </li>
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper -->
                </nav><!-- /.site-navigation -->
            </div><!-- /.col-md-10 -->

            <div class="col-md-2 col-sm-2">
                <div class="booking">
                    <?php
                    if(isset($_SESSION['user_id'])){
                    ?>
                    <span><a href="?page=add_adverts.php" class="btn btn-success post_ads">Post Ads</a></span>
                    <?php }else{ ?>
                        <span><a href="?page=user_login.php" class="btn btn-success post_ads">Post Ads</a></span>
                    <?php } ?>
                </div><!-- /.Booking -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-content -->

<!-- ====== Header Overlay Content ====== -->
<div class="header-overlay-content">
    <!-- overlay-menu-item -->
    <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
        <button type="button" class="overlay-close">Close</button>
        <nav>
            <ul class="overlay-menu">
                <li><a href="#">Home</a></li>
                <li><a href="">About</a>
                    <ul class="sub-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Clients</a>
                            <ul class="sub-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Work</a></li>
                                <li><a href="#">Clients</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div> <!-- /.overlay-menu-item -->

    <!-- header-search-content -->
    <div class="gradient-transparent overlay-search">
        <button type="button" class="overlay-close">Close</button>
        <div class="header-search-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="get" class="searchform">
                            <div class="input-group" id="adv-search">
                                <input type="text" class="form-controller" placeholder="Search for snippets" />
                                <div class="input-group-btn">
                                    <div class="btn-group" role="group">
                                        <div class="dropdown dropdown-lg">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <div class="form-horizontal">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox"> From Blog</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox">Find Your Apartment</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="fa fa-search" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.header-search-content -->

    <!--Registration Modal-->
    <?php //include "old pages/modal.php"; ?>


</div><!-- /.header-overlay-content -->



<?php
if(!empty($_GET['page'])){
    include_once $_GET['page'];
}else{
    include_once"home.php";
}

?>




<!-- ====== Footer Area ====== -->
<footer class="footer-area" style="background-image:url(assets/images/footer-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_about yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">
                            Rent Info
                        </h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <div class="widget-about-content">
                        <img src="assets/images/logo.png" alt="house" />
                        <p class="text-justify">We are the largest real rent information system web service in Bangladesh. We start in 2017 to
                            solve this rent problem. We expect it will helpful for the people, basically who want to find his/her
                            dream house,car,event management instrument easily and who want to delivered all rent to perfect person or company.
                        </p>
                        <a href="#" class="button">More</a>
                    </div><!-- /.widget-content -->
                </div><!-- /.widget widget_about -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="widget widget_place_category yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">Place Category</h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <ul>
                        <li>Flat for Rent <a href="#">Any where Bangladesh</a></li>
                        <li>Appartment for Rent <a href="#">Any where Bangladesh</a></li>
                        <li>Instrument for Rent <a href="#">Any where Bangladeshe</a></li>
                        <li>veheicle for Rent <a href="#">Any where Bangladesh</a></li>
                        <li>house for Rent <a href="#">Any where Bangladesh</a></li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="widget widget_instagram yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">Instagram Image</h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <div class="instagram-image-content">
                        <a href="#"><img src="assets/images/instagram/instagram-one.png" alt="" /></a>
                        <a href="#"><img src="assets/images/instagram/instagram-two.png" alt="" /></a>
                        <a href="#"><img src="assets/images/instagram/instagram-three.png" alt="" /></a>
                        <a href="#"><img src="assets/images/instagram/instagram-four.png" alt="" /></a>
                        <a href="#"><img src="assets/images/instagram/instagram-five.png" alt="" /></a>
                        <a href="#"><img src="assets/images/instagram/instagram-six.png" alt="" /></a>

                    </div><!-- /.instagram-image-content -->
                </div><!-- /.widget -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="bottom-content">
                    <p>Copyright  &copy;2023<a href="#">Rent Info BD</a></p>
                </div><!-- /.bottom-top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.footer-area -->

<!-- All The JS Files
================================================== -->
<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script> <!-- main-js -->
</body>

<!-- Mirrored from house-rent.htmlguru.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 18:29:20 GMT -->
</html>