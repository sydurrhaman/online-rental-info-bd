<?php
if(isset($_SESSION['user_id'])){
?>

    <?php
    if (isset($_POST['save_image'])) {
        $obj->profile_image_save( $_SESSION['user_id'], $_FILES['image']);
    }

    $get_profile = $obj->profile_show( $_SESSION['user_id']);
    $row = mysqli_fetch_array($get_profile);

    $get_info = $obj->show_user_info($_SESSION['user_id']);
    $user_info = mysqli_fetch_array($get_info);

    ?>
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col-sm-3">

                    <form action="" method="post" enctype="multipart/form-data">
                        <?php if(!empty($row['image'])){ ?>
                        <img class="image_style_profile" src="profile_image/<?php echo $row['image']; ?>">
                        <?php }else{ ?>
                            <figure><img class="img-bordered-sm img-rounded img-responsive" alt="" src="images/users/user.png"></figure>
                        <?php } ?>
                        <input type="file" class="form-control-file btn-sm" name="image">
                        <button type="submit" class="btn btn-warning btn-sm" name="save_image">Upload Your Pic </button>
                    </form>
                <br>
                <!--<a class="btn btn-success btn-block btn-compose-email">View Profile</a>-->
                <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                    <li class="active">
                        <a href="?page=user_profile.php&profile=user_profile_home.php"><i class="fa fa-eye fa-lg"></i> View Profile</a>
                    </li>
                    <li class="active">
                        <a href="?page=user_profile.php&profile=user_profile_edit.php"><i class="fa fa-eye fa-lg"></i>Edit Profile</a>
                    </li>
                </ul>
                <!-- /.nav -->
            </div>
            <div class="col-sm-9">
                <!-- resumt -->
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php
                                if(!empty($_GET['n'])) {
                                    echo "Profile Updated Successfully!";
                                }
                                ?>

                                <?php
                                if(!empty($_GET['profile'])){
                                    include_once $_GET['profile'];
                                }else{
                                    include_once"user_profile_home.php";
                                }

                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- resume -->

        </div>
    </div>

<?php }else{
    echo"<script>window.location.href='?page=user_login.php'</script>";
} ?>
