<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
<div class="col-sm-6 col-xs-12">
    <div class="single-blog-post">
        <div class="img">
            <?php the_post_thumbnail('full'); ?>
            <div class="date p-color-bg"><b><?php the_time('j'); ?></b> <span><?php the_time('D'); ?></span></div>
        </div>
        <div class="post">
            <h4><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h4>
            <p><?php echo substr( wp_trim_words( get_the_content(), 28, '...' ),0,150).'...'; ?></p>
            <a href="<?php echo get_permalink();?>" class="tran3s">read more</a>
        </div>
        <!-- /.post -->
    </div>
    <!-- /.single-blog-post -->
</div>

<?php endwhile; ?>
<?php get_footer(); ?>