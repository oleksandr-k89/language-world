<?php get_header(); ?>
    <h1>Welcome to Language World!</h1>
<?php if(have_posts()):
    while(have_posts()): the_post();
        ?>
        <p><?php the_content(); ?></p>
        <h2><?php the_title(); ?></h2>
        <hr>
    <?php endwhile;
endif;
?>
<?php get_footer(); ?>