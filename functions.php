<?php

function custom_theme_assets() {
    wp_enqueue_style('ress', get_stylesheet_uri().'/ress.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );