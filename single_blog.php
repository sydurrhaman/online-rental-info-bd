<?php
$blog_id = $_GET['blog_id'];
$single_blog = $obj->single_blog_show($blog_id);
$blog_row = mysqli_fetch_array($single_blog);

?>

<!-- ====== Breadcrumbs Area ====== -->
<div class="breadcrumbs-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index.php">Home</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item"><?php echo $blog_row['title']; ?></span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->

<!-- ====== Blog Area ====== -->
<div class="blog-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-main-content">
                    <article class="post">
                        <div class="entry-header">
                            <h2 class="entry-title"><?php echo $blog_row['title']; ?></h2>
                        </div><!-- /.entry-header -->
                        <div class="entry-meta">
                            <div class="entry-date">
                                <span>Post Date</span> <?php echo $blog_row['post_date']; ?>
                            </div>

                            <div class="entry-view">
                                <span>View</span>
                                <i class="fa fa-eye"></i>35
                            </div>

                            <div class="entry-like">
                                <span>Like</span>
                                <a href="#"><i class="fa fa-heart-o"></i>09</a>
                            </div><!-- /.entry-like -->

                        </div><!-- /.entry-header -->

                        <figure class="post-thumb">
                            <img src="blog_img/<?php echo $blog_row['image']; ?>" alt="blog" />
                        </figure><!-- /.post-thumb -->

                        <div class="entry-content">
                            <?php echo $blog_row['description']; ?>
                        </div><!-- /.entry-content -->

                        <div class="entry-share">
                            <span>Share:</span>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div><!-- /.entry-share -->
                    </article><!-- /.post -->
                </div><!-- /.single-main-content -->
            </div><!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="blog-content-right">
                    <div class="widget widget_popular_posts">
                        <div class="widget-title-area">
                            <h4 class="widget-title">Popular Posts</h4><!-- /.widget-title -->
                        </div><!-- /.widget-title-area -->

                        <div class="widget-content">

                            <?php
                            $recent_blog = $obj->recent_blog();
                            while($row = mysqli_fetch_array($recent_blog)){
                            ?>
                            <div class="post-content clearfix">
                                <div class="image-content">
                                    <a href="?page=single_blog.php&blog_id=<?php echo $row['id'];?>">
                                        <img src="blog_img/<?php echo $row['image'];?>" alt="blog" />
                                    </a>
                                </div><!-- /.image-content -->
                                <div class="post-title">
                                    <h5><a href="?page=single_blog.php&blog_id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h5>
                                    <p style="margin: 0px;"><?php echo substr($row['description'],0,20);?> ....</p>
                                    <span><?php echo $row['post_date'];?></span>
                                </div><!-- /.post-title -->
                            </div><!-- /.post-content -->
                            <?php } ?>


                        </div><!-- /.widget-content -->
                    </div><!-- /.widget widget_popular_post -->
                </div><!-- /.blog-content-right -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-area -->