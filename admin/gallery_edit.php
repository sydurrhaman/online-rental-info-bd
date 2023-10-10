<section>
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="page-back"><a href="index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Gallery Picture Add</h4>
                </div>

                <?php
                $gallery_id=$_GET['id'];
                $current_img=$obj->edit_gallery($gallery_id);
                $current_img_row=mysqli_fetch_array($current_img);
                if (isset($_POST['save_img'])){
                    $obj->gallery_update ($gallery_id ,$_POST['img_title'],$_POST['old_image'],$_FILES['image']);
                }
                ?>


                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">TITLE</label>
                        <input type="text" value="<?php echo $current_img_row['img_title']?>" class="form-control" name="img_title"placeholder="img title">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <br>
                            <img src="gimage/<?php echo $current_img_row ['image'];?>" width="250" height="150">
                            <input type="hidden" name="old_image" value="<?php echo $current_img_row['image']; ?>">
                            <br>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <button type="submit" class="btn btn-success btn-large" name="save_img">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>