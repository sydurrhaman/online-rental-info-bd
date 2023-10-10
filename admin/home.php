<?php session_start();?>
<?php if(isset($_SESSION['password'])){ ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 04:44:18 GMT -->
<head>
    <title>Rent Information System </title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<?php
include_once"../rent_info_classes.php";
$obj = new rent_info_classes();
?>
<body>
<!--== MAIN CONTRAINER ==-->
<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="index.php" class="logo_img"><img src="images/logo.png" alt=""/>
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">
            <form class="app-search">
                <input type="text" placeholder="Search..." class="form-control">
                <a href="#"><i class="fa fa-search"></i></a>
            </form>
        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide">
            <div class="top-not-cen">
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o"
                                                             aria-hidden="true"></i><span></span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o"
                                                             aria-hidden="true"></i><span></span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span></span></a>
            </div>
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><?php echo $_SESSION['name'];?> <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>

            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>

                <li>
                    <a href="../user_profile.php" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i>My profile</a>
                </li>
                <li>
                    <a href="logout.php" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">

            </div>

            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="?page=dashboard.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                            Dashboard</a>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>

                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="?page=all_user.php">All Users</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Ads Section</a>

                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="?page=ads_show.php">Ads Show</a>
                                </li>
                                <li><a href="?page=view_blog_table.php">View Blog</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>Gallery</a>

                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="?page=add_gallery.php">Add Gallery</a>
                                </li>
                                <li><a href="?page=view_gallary.php">Show Gallery</a>
                                </li>
                            </ul>
                        </div>
                    </li>
            </div>
        </div>
    </div>
</div>
<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        <?php
        if(!empty($_GET['page'])){
            include_once $_GET['page'];

        }else{
            include_once"dashboard.php";
        }

        ?>
        <section>
            <div class="fixed-action-btn vertical">
                <a class="btn-floating btn-large red pulse">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                    </li>
                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                    </li>
                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                    </li>
                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>




<!--======== SCRIPT FILES =========-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 04:44:49 GMT -->
</html>
<?php }else{
    echo"<script>window.location.href='index.php'</script>";
}?>