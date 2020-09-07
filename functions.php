<?php

function custom_theme_assets() {
    wp_enqueue_style('ress', get_template_directory_uri().'/ress.css', array(), null, 'all');
    wp_enqueue_style('fonts', get_template_directory_uri().'/fonts.css', array(), null, 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), null, 'all');
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
