<?php
$ads_id = $_GET['ads_id'];
$single_ad = $obj->single_ad_show($ads_id);
$ads_row = mysqli_fetch_array($single_ad);

?>

<!-- ====== Breadcrumbs Area====== -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                       <span class="first-item">
                        <a href="index.php">Home</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item"><?php echo $ads_row['title'] ?></span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->

<!-- ====== Apartments-Single-Area ======= -->
<div class="apartment-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="corousel-gallery-content">
                    <div class="gallery">
                        <div class="full-view owl-carousel">
                            <a class="item image-pop-up" href="ads_img_folder/<?php echo $ads_row['image1']; ?>">
                                <img src="ads_img_folder/<?php echo $ads_row['image1']; ?>" alt="corousel">
                            </a>
                            <a class="item image-pop-up" href="ads_img_folder/<?php echo $ads_row['image2']; ?>">
                                <img src="ads_img_folder/<?php echo $ads_row['image2']; ?>" alt="corousel">
                            </a>
                            <a class="item image-pop-up" href="ads_img_folder/<?php echo $ads_row['image3']; ?>">
                                <img src="ads_img_folder/<?php echo $ads_row['image3']; ?>" alt="corousel">
                            </a>
                            <a class="item image-pop-up" href="ads_img_folder/<?php echo $ads_row['image4']; ?>">
                                <img src="ads_img_folder/<?php echo $ads_row['image4']; ?>" alt="corousel">
                            </a>
                        </div>

                        <div class="list-view owl-carousel">
                            <div class="item">
                                <img src="ads_img_folder/<?php echo $ads_row['image1']; ?>" alt="<?php echo $ads_row['image1']; ?>">
                            </div>
                            <div class="item">
                                <img src="ads_img_folder/<?php echo $ads_row['image2']; ?>" alt="<?php echo $ads_row['image2']; ?>">
                            </div>
                            <div class="item">
                                <img src="ads_img_folder/<?php echo $ads_row['image3']; ?>" alt="<?php echo $ads_row['image3']; ?>">
                            </div>
                            <div class="item">
                                <img src="ads_img_folder/<?php echo $ads_row['image4']; ?>" alt="<?php echo $ads_row['image4']; ?>">
                            </div>
                        </div>
                    </div> <!-- /.gallery-two -->
                </div> <!-- /.corousel-gallery-content -->

                <div class="family-apartment-content mobile-extend">
                    <div class="tb">
                        <div class="tb-cell">
                            <h3 class="apartment-title"><?php echo $ads_row['title']; ?></h3>
                        </div><!-- /.tb-cell -->
                        <div class="tb-cell">
                            <p class="pull-right rent">Price - <?php echo $ads_row['rentcost']; ?> TK</p>
                        </div><!-- /.tb-cell -->
                    </div><!-- /.tb -->
                    <div class="clearfix"></div><!-- /.clearfix -->
                    <p class="apartment-description default-gradient-before"><?php echo $ads_row['information']; ?></p>
                    <div class="price-details">
                        <h3>Details-</h3>
                        <ul>
                            <li><span>Address: </span> <?php echo $ads_row['address']; ?></li>
                            <li><span>Division :</span> <?php echo $ads_row['division']; ?></li>
                            <li><span>City :</span> <?php echo $ads_row['city']; ?></li>
                            <li><span>Category :</span><?php echo $ads_row['category']; ?></li>
                        </ul>
                    </div><!-- /.price -->
                </div><!-- /.family-apartment-content -->
            </div> <!-- /.col-md-8 -->

            <div class="col-md-4">
                <h4 class="ads_list recent_ads_title">Recent Ads</h4>
                <?php
                $recent_ads = $obj->recent_ads();
                while($row = mysqli_fetch_array($recent_ads)){
                    ?>
                <div class="row ads_list">
                    <div class="col-md-4 ">
                        <a href="?page=single_ads.php&ads_id=<?php echo $row['id']; ?>">
                            <img class="left_recent_image" src="ads_img_folder/<?php echo $row['image1']; ?>" width="100" height="100">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <h5><a href="?page=single_ads.php&ads_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h5>
                        <p><?php echo substr($row['information'],0,40); ?>....</p>
                    </div>
                </div>
                <?php } ?>
            </div> <!-- .col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.appartment-single-area -->