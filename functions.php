<?php
function greenmafu_theme_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'greenmafu_theme_scripts' );

// Add theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
?>
