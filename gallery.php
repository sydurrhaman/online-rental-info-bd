
<section>

    <!-- ====== Gallery Section ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Gallery</h2>
                    <p class="page-description">All gallery and video</p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area======= -->
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                            <a href="index.php">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Gallery</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Photo Gallery Area ====== -->
    <div class="photo-gallery-area">
        <div class="container">
            <div class="col-md-12">
                <div class="heading-content-two text-center">
                    <h2 class="title default-text-gradient">Photo Gallery</h2>
                </div><!-- /.photo-heading-content -->
            </div><!-- /.col-md-12 -->
            <div class="row">
                <?php
                $all_info = $obj->show_gallery();
                $i=1;
                while($row = mysqli_fetch_array($all_info)){
                ?>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="gallery-image-content">
                        <img src="admin/gimage/<?php echo $row['image']?>" alt="" />
                        <div class="overlay-background gradient-transparent">
                            <a href="admin/gimage/<?php echo $row['image']?>" class="image-pop-up">
                                <span><i class="fa fa-picture-o"></i><?php echo $row['img_title']?></span>
                            </a><!-- /.hover-content -->
                        </div><!-- /.hover-content -->

                    </div><!-- /.image-content -->
                </div><!-- /.col-md-3 -->
                <?php $i++; } ?><!-- /.col-md-3 -->
            </div><!-- /.row -->
            <a href="#" class="button nevy-button button-radius default-template-gradient">lode more</a>
        </div>
        <!-- /.container -->
    </div><!-- /.photo-gallery-area-->

    <!-- ====== Video Gallery Area ====== -->

    <!-- /.photo-gallery-area-->

</section>
<!-- ====== Gallery Section end====== -->