<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 style="margin: 0" class="title">Post Your Rent Info</h2>
                </div><!-- /.Apartments-heading-content -->
            </div><!-- /.col-md-12 -->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4 class="text-success" style="margin: 0"><?php if(!empty($_GET['v'])){echo "Save Successfully";} ?></h4>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="widget_rental_search widget-top clerafix">
                    <div class="form-border gradient-border">
                        <?php
                        if(isset($_POST['post_ad'])){
                            //print_r($_POST);exit;
                             $obj->post_adverts($_POST['category'],$_POST['title'],$_POST['division'],$_POST['city'],$_POST['information'],$_POST['address'],$_POST['rentcost'],
                                $_FILES['image1'],$_FILES['image2'],$_FILES['image3'],$_FILES['image4'],$_POST['post_date']);
                        }
                        ?>


                        <form action="" method="post" enctype="multipart/form-data" class="advance_search_query">
                            <div class="form-bg seven">
                                <div class="form-content">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Rent Type</label>
                                            <select name="category" required="">
                                                <option >--Select--</option>
                                                <option value="House">House</option>
                                                <option value="Vehicle">Vehicle</option>
                                                <option value="Event Management Instrument">Event Management Instrument</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="Title" required="">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Division</label>
                                            <select name="division" required="">
                                                <option >--select--</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="khulna">Khulna</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Mymensingh">Mymensing</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>City</label>
                                            <select name="city" required="">
                                                <option >--select--</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Gazipur">Gazipur</option>
                                                <option value="khulna">khulna</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="khulna">Khulna</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Bogra">Bogra</option>
                                                <option value="Mymensingh">Mymensing</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Information</label>
                                            <textarea id="message" class="form-control" name="information" cols="40" rows="4" placeholder="Information Details"></textarea>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea id="message" required="" name="address" class="form-control" cols="40" rows="4" placeholder="Address"></textarea>
                                        </div><!-- /.form-group -->
                                        <div class="form-group ">
                                            <label>Rent Cost</label>
                                            <input type="text" id="message" required="" name="rentcost" class="form-control" cols="40" rows="4" placeholder="Rent cost">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-1</label>
                                            <input type="file" required="" class="form-control-file file_size_image" name="image1">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-2</label>
                                            <input type="file" required="" class="form-control-file file_size_image" name="image2">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-3</label>
                                            <input type="file" required="" class="form-control-file file_size_image" name="image3">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image input-4</label>
                                            <input type="file" required="" class="form-control-file file_size_image" name="image4">
                                            <small id="fileHelp" class="form-text text-muted"></small>
                                        </div><!-- /.form-group -->
                                        <input type="hidden" name="post_date" value="<?php echo date('Y-m-d'); ?>">

                                    <div class="form-group">
                                        <input type="submit" name="post_ad" class="button button-radius default-template-gradient" value="Post Ads">
                                    </div><!-- /.form-group -->
                                </div><!-- /.form-content -->
                            </div><!-- /.form-bg -->
                        </form> <!-- /.advance_search_query -->
                    </div><!-- /.form-border -->
                </div><!-- /.widget_rental_search -->
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>