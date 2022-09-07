<?php

function language_world_script_enqueue() {
    wp_enqueue_style('maainstyle', get_template_directory_uri() . '/css/main.css', [], '1.0.0', 'all');
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'language_world_script_enqueue');

function language_world_setup() {
    add_theme_support('menus');

    register_nav_menu('main', 'Main header navigation');
    register_nav_menu('secondary', 'Secondary footer navigation');
}
add_action('init', 'language_world_setup');