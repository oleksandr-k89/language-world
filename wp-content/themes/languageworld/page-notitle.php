<?php

/*
Template Name: Page No Title
*/
get_header(); ?>
    <h1>Welcome to Language World!</h1>
<?php if(have_posts()):
    while(have_posts()): the_post();
        ?>
        <i>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('H:i'); ?>
            in <?php the_category(); ?>
        </i>
        <p><?php the_content(); ?></p>
        <hr>
    <?php endwhile;
endif;
?>
<?php get_footer(); ?>