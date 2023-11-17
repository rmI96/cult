<?php
/**
 * Yout functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'yout_scripts' );
function yout_scripts() {

    wp_enqueue_style( 'grid', get_template_directory_uri() . '/assets/libs/bootstrap-grid/bootstrap-grid.min.css' );
    wp_enqueue_style( 'style-01', get_template_directory_uri() . '/assets/style/app.min.css' );
    wp_enqueue_style( 'style-02', get_template_directory_uri() . '/assets/style/css/style.css' );
    wp_enqueue_style( 'style-03', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

    wp_enqueue_script( 'smoothscroll', 'https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true );
}

add_theme_support( 'custom-logo' );
add_filter( 'show_admin_bar', '__return_false' );


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
}

