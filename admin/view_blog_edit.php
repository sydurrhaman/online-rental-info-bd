
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
                        $blog_id=$_GET['id'];
                        $current_blog=$obj->edit_blog_post($blog_id);
                        $current_blog_row=mysqli_fetch_array($current_blog);
                        if(isset($_POST['updateBlog'])){
                            $obj->blog_update($blog_id,$_POST['title'],$_POST['description'],$_POST['old_image'],$_FILES['image'],$_POST['post_date']);
                        }
                        ?>
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $current_blog_row['title'] ?>" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea id="" class="form-control" rows="4" cols="40" name="description" placeholder="description"><?php echo $current_blog_row['description']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label> <br>

                                        <img src="../blog_img/<?php echo $current_blog_row['image'];?>" width="250" height="150">
                                        <input type="hidden" name="old_image" value="<?php echo $current_blog_row['image']; ?>">
                                        <br>
                                        <br>

                                        <input type="file" class="form-control-file file_size_image" name="image">
                                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="date" class="form-control" name="post_date" value="<?php echo $current_blog_row['post_date'] ?>" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary btn_size" name="updateBlog">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>