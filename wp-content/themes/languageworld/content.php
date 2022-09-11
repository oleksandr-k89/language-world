<h2><?php the_title(); ?></h2>
<section class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></section>
<i>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('H:i'); ?>
    in <?php the_category(); ?>
</i>
<p><?php the_content(); ?></p>
<hr>