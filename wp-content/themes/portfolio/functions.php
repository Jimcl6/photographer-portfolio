<?php

function portfolio_files() {
    wp_enqueue_style( 'portfolio_main_style', get_theme_file_uri( '/assets/css/style.css' ) );
    wp_enqueue_style( 'portfolio_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );
    
    // javascript
    wp_enqueue_script( 'portfolio_main_script', get_theme_file_uri('/assets/js/script.js'), ['jquery'], '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'portfolio_files' );


function portfolio_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'portfolio_features');