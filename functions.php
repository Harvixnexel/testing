<?php
function lovable_theme_enqueue_assets() {
    // Theme style.css is still required by WordPress to read the Theme Name metadata
    wp_enqueue_style('lovable-style', get_stylesheet_uri(), array(), '1.1.0');
}

add_action('wp_enqueue_scripts', 'lovable_theme_enqueue_assets');

// Add theme support
function lovable_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'lovable_theme_setup');
