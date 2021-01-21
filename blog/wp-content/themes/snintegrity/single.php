<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
    <!-- 
			=============================================
				Blog Details Page 
			============================================== 
			-->
    <div class="blog-details-page">
    <div class="container">
        <div class="theme-large-asidebar float-left blog-details-content">
            <div class="wrapper">
                <?php the_post_thumbnail('full'); ?>
                <div class="main-wrapper">
                    <div class="text-content">
                        <h3><?php the_title(); ?></h3>
                        <ul class="post-info">
                            <li><i class="fa fa-tag" aria-hidden="true"></i><?php the_author_posts_link(); ?></li>
                            <li><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Post on <?php the_time('j F Y'); ?></li>
                            <li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="<?php comments_link(); ?>" class="comments">
                                <?php comments_number('0 Comments', '1 Comments', '% responses'); ?></a></li>
                        </ul>
                        <?php the_content(); ?>
                    </div>
                    <!-- /.text-content -->
                    
                    <div class="testimonial-section" style="padding-bottom:0px">
                        <div class="leave-comment wow fadeInUp">
                        <?php comments_template(); ?>
                    </div>
                    <!-- /.leave-comment -->
                    </div>
                    
                </div>
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.theme-large-asidebar -->




        <!-- ************************** Sidebar ***************************** -->
        <div class="theme-sidebar float-left">
                <?php dynamic_sidebar('right-sidebar'); ?>
            <!-- /.sidebar-search -->

            <div class="sidebar-quick-contact p-color-bg">
                <h6>Quick contact</h6>
                <h4>Get Solution</h4>
                <p>Ask us a question by completing our online form. One of our team of experts will respond within 24 hours – We Promise.</p>
                <a href="/contact-us.php" class="tran3s">Contact Us</a>
            </div>
            <!-- /.sidebar-quick-contact -->
        </div>
        <!-- /.theme-sidebar -->
    </div>
    <!-- /.container -->
</div>
<!-- /.blog-details-page -->
<?php endwhile; ?>
<?php get_footer(); ?>