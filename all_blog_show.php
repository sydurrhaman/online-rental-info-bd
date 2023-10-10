 <section>
     <div class="blog-area bg-gray-color">
         <div class="container">
             <div class="col-md-12">
                 <div class="row">
                     <div class="heading-content-one">
                         <h2 class="title">Our Blog Post</h2>
                         <h5 class="sub-title">Our News Feed</h5>
                     </div><!-- /.blog-heading-content -->
                 </div><!-- /.row -->
             </div><!-- /.col-md-12 -->
             <div class="row">
                 <?php
                 $all_info = $obj->all_blog_show();
                 while($row = mysqli_fetch_array($all_info)){
                     ?>
                     <div class="col-md-4 col-sm-6 col-xs-6">
                         <article class="post">
                             <figure class="post-thumb">
                                 <a href="?page=single_blog.php&blog_id=<?php echo $row['id'];?>">
                                     <img src="blog_img/<?php echo $row['image'];?>" alt="blog" />
                                 </a>
                             </figure><!-- /.post-thumb -->
                             <div class="post-content">
                                 <div class="entry-meta">
                                <span class="entry-date">
                                    <h3 class="date"> <?php echo $row['post_date'];?> </h3>
                                </span>
                                     <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="?page=single_blog.php&blog_id=<?php echo $row['id'];?>"><h3 class="title"> <?php echo $row['title'];?> </h3></a>
                                </span>
                                 </div><!-- /.entry-header -->
                                 <div class="entry-header">
                                     <h5><p><?php echo $row['description'];?></p></h5>
                                 </div><!-- /.entry-header -->
                                 <div class="entry-footer">
                                     <div class="entry-footer-meta">
                                         <span class="view"><i class="fa fa-eye"></i>35</span>
                                         <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                         <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                                     </div><!-- /.entry-footer-meta -->
                                 </div><!-- /.entry-footer -->
                             </div><!-- /.post-content -->
                         </article><!-- /.post -->
                     </div><!-- /.col-md-4 -->
                 <?php } ?>
             </div><!-- /.row -->
         </div><!-- /.container -->
     </div>
 </section>