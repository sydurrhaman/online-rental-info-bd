
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title">Blog Post Info</h2>
                </div><!-- /.Apartments-heading-content -->
            </div><!-- /.col-md-12 -->
        </div>
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="widget_rental_search widget-top clerafix">
                    <div class="form-border gradient-border">

                        <form action="#" method="post" enctype="multipart/form-data" class="advance_search_query">
                            <?php
                            if (isset($_POST['blog_post'])) {
                                $obj->save_blog($_POST['title'],$_POST['description'],$_FILES['image'],$_POST['post_date']);
                            }
                            ?>
                            <div class="form-bg seven">
                                <div class="form-content">

                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="Title">
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea placeholder="Description" name="description"></textarea>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <input type="file" class="form-control-file" name="image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <level>Date</level>
                                            <input type="date" id="myDate" name="post_date" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="button button-radius default-template-gradient" name="blog_post">Submit</button>
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
