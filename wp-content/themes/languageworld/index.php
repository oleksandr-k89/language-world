<?php get_header(); ?>
<h1>Welcome to Language World!</h1>
<?php if(have_posts()):
    while(have_posts()): the_post();
?>
    <h2><?php the_title(); ?></h2>
    <i>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('H:i'); ?>
        in <?php the_category(); ?>
    </i>
    <p><?php the_content(); ?></p>
    <?php endwhile;
endif;
?>
<?php get_footer(); ?>