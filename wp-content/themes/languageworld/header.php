<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Language World Theme</title>
        <?php wp_head(); ?>
    </head>
    <?php
        if(is_home()):
            $homeClasses = ['blog-design posts-list'];
        elseif(is_front_page()):
            $homeClasses = ['home-design welcome'];
        else:
            $homeClasses = ['regular-design'];
        endif;
    ?>
    <body <?php body_class($homeClasses); ?>>
    <?php wp_nav_menu(['theme_location' => 'main']); ?>