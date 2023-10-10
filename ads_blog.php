<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12" style="margin-top: 15px;">
                <?php

                ?>
                <form action="" method="post" class="well">
                    <input name="search" value="" type="hidden">
                    <div class="row">
                        <div class="col-md-3 col-xs-6"></div>
                        <div class="col-md-3 col-xs-6">
                            <label></label>
                            <select class="form-control" name="category" required="">
                                <option value="">Select Categroy</option>
                                <option value="House">House</option>
                                <option value="Vehicle">Vehicle</option>
                                <option value="Event Management Instrument">Event Management Instrument</option>
                            </select>
                
                        </div>
                        <div class="col-md-2 col-xs-6">
                            <br>
                            <input type="submit" class="btn btn-success" name="search_ads" value="Search">
                        </div>
                        <div class="col-md-1 col-xs-6"></div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <?php
                if(isset($_POST['search_ads']) && !empty($_POST['category'])){
                    $all_ads = $obj->ads_search($_POST['category']);
                    if(!mysqli_num_rows($all_ads) > 0){
                        echo"<h1 style='color: red;'>No Result Found</h1>";
                    }
                }else{
                    $all_ads = $obj->show_home_page_ads();
                }
                while($row = mysqli_fetch_array($all_ads)){
                ?>

                    <div class="ads_list">
                        <h5 class="text-center ads_top_title"><a href="?page=single_ads.php&ads_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a> </h5>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="ads_img">
                                    <img src="ads_img_folder/<?php echo $row['image1']; ?>" width="200" height="200">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h4><a href="?page=single_ads.php&ads_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                                <ul class="list-unstyled">
                                    <li> <i class="fa fa-folder-open"></i> <?php echo substr($row['information'],0,100); ?></li>
                                    <li> <i class="fa fa-map-marker"></i> <?php echo substr($row['address'],0,40); ?></li>
                                </ul>
                                <p>Posted Date - <?php echo $row['post_date']; ?></p>
                            </div>
                            <div class="col-md-2">
                                <img src="ads_img_folder/<?php echo $row['image1']; ?>" width="50" height="50">
                                <ul class="list-unstyled">
                                    <li><?php echo $row['city']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                <?php } ?>



            </div>

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
        </div>

    </div>
</div>
