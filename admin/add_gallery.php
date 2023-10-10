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
                    if (isset($_POST['save_img'])) {
                        $obj-> save_gallery ($_POST['img_title'],$_FILES['image']);
                    }
                    ?>


                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputFile">TITLE</label>
                                <input type="text" class="form-control" name="img_title" placeholder="img title" required="">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input type="file" class="form-control-file" name="image" required="">
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