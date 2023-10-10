<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 04:45:39 GMT -->
<head>
    <title>Rent Information System</title>
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
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="blog-login">

    <div class="blog-login-in">




        <?php
        include_once"../rent_info_classes.php";
        $obj = new rent_info_classes();

        if(isset($_POST['admins_login'])){
            $admin_data = $obj->admins_login($_POST['email'],$_POST['password']);
            if(mysqli_num_rows($admin_data)>0){
                $row = mysqli_fetch_array($admin_data);
                $_SESSION['admin_id']= $row['id'];
                $_SESSION['name']= $row['name'];
                $_SESSION['email']= $row['email'];
                $_SESSION['password']= $row['password'];
                $_SESSION['mobile']= $row['mobile'];
                echo"<script>window.location.href='home.php'</script>";
            }else{
                echo "<h4 class='text-danger'>Email address or Password Not Valid</h4>";
            }

        }



        ?>
        <form method="post"action="">
            <img src="logo.png" alt="" />
            <div class="row">
                <div class="input-field col s12">
                    <input id="" type="email" class="validate" name="email">
                    <label for="">User Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="" type="password" class="validate" name="password">
                    <label for="">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="submit"class="btn btn-success btn-large" name="admins_login" value="Login">
                </div>
            </div>
            <a href="" class="for-pass">Forgot Password?</a>
        </form>
    </div>
</div>

<!--======== SCRIPT FILES =========-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 04:45:40 GMT -->
</html>