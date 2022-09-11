<?php get_header(); ?>
<h1>Welcome to Language World!</h1>
<?php if(have_posts()):
    while(have_posts()): the_post(); ?>
    <?php get_template_part('content', get_post_format());  ?>
    <?php endwhile;
endif;
?>
<?php get_footer(); ?>