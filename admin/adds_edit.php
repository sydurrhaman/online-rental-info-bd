<?php

session_start();

?>
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> User Blog Edit Form</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Blog Edit Post</h4>
                    </div>
                    <div class="tab-inn">
                        <?php
                        $ads_id=$_GET['id'];
                        $current_ads=$obj->edit_adds_post($ads_id);
                        $current_ads_row=mysqli_fetch_array($current_ads);
                       // echo $ads_id;
                        if(isset($_POST['post_ad'])){
                            $obj->adds_update($ads_id,$_POST['category'],$_POST['title'],$_POST['division'],$_POST['city'],$_POST['information'],$_POST['address'],$_POST['rentcost'],
                                $_POST['old_image1'],$_FILES['image1'],$_POST['old_image2'],$_FILES['image2'],$_POST['old_image3'],$_FILES['image3'],$_POST['old_image4'],$_FILES['image4'],$_POST['post_date']);
                        }
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-bg seven">
                                <div class="form-content">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Rent Type</label>
                                            <input type="text" name="category" value="<?php echo $current_ads_row['category']?>" placeholder="category">
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="<?php echo $current_ads_row ['title'] ?>"placeholder="Title">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Division</label>
                                            <input type="text" name="division" value="<?php echo $current_ads_row['division']?>" placeholder="Division">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" value="<?php echo $current_ads_row['city']?>" placeholder="city">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Information</label>
                                            <textarea id="message" class="form-control" name="information" cols="40" rows="4" placeholder="Information Details"><?php echo $current_ads_row ['information'] ?></textarea>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea id="message" required="" name="address" class="form-control" cols="40" rows="4" placeholder="Address"><?php echo $current_ads_row ['address'] ?></textarea>
                                        </div><!-- /.form-group -->
                                        <div class="form-group ">
                                            <label>Rent Cost</label>
                                            <input type="text" id="message" required="" name="rentcost" value="<?php echo $current_ads_row ['rentcost'] ?>" class="form-control" cols="40" rows="4" placeholder="Rent cost">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-1</label>
                                            <br>
                                            <img src="../ads_img_folder/<?php echo $current_ads_row ['image1'];?>" width="250" height="150">
                                            <input type="hidden" name="old_image1" value="<?php echo $current_ads_row['image1']; ?>">
                                            <br>
                                            <br>
                                            <input type="file" class="form-control-file file_size_image" name="image1">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-2</label>
                                            <br>
                                            <img src="../ads_img_folder/<?php echo $current_ads_row ['image2'];?>" width="250" height="150">
                                            <input type="hidden" name="old_image2" value="<?php echo $current_ads_row['image2']; ?>">
                                            <br>
                                            <br>
                                            <input type="file" class="form-control-file file_size_image" name="image2">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-3</label>
                                            <br>
                                            <img src="../ads_img_folder/<?php echo $current_ads_row ['image3'];?>" width="250" height="150">
                                            <input type="hidden" name="old_image3" value="<?php echo $current_ads_row['image3']; ?>">
                                            <br>
                                            <br>
                                            <input type="file"  class="form-control-file file_size_image" name="image3">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-4</label>


                                            <br>
                                            <img src="../ads_img_folder/<?php echo $current_ads_row ['image4'];?>" width="250" height="150">
                                            <input type="hidden" name="old_image4" value="<?php echo $current_ads_row['image4']; ?>">
                                            <br>
                                            <br>
                                            <input type="file"class="form-control-file file_size_image" name="image4">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <!--<label>post date</label>-->
                                        <input type="hidden" name="post_date" value="<?php echo $current_ads_row['post_date']?>" placeholder="date">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="post_ad" class="btn btn-success btn-large" value="Update post">
                                        </div><!-- /.form-group -->
                                    </div><!-- /.form-content -->
                                </div><!-- /.form-bg -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>