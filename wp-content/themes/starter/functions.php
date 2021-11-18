<?php

function add_theme_scripts(){
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/public/css/frontend.css', array(), time(), false);
    wp_enqueue_script('jQuery', get_stylesheet_directory_uri() . '/assets/public/js/jquery.js', array(), time(), true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/public/js/frontend.js', array(), time(), true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

