<?php
/**
 * Yout functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'yout_scripts' );
function yout_scripts() {

    wp_enqueue_style( 'grid', get_template_directory_uri() . '/assets/libs/bootstrap-grid/bootstrap-grid.min.css' );
   	wp_enqueue_style( 'style-01', get_template_directory_uri() . '/assets/style/app.min.css?7' );
    wp_enqueue_style( 'style-02', get_template_directory_uri() . '/assets/style/css/style.css' );
    wp_enqueue_style( 'style-03', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );


    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/libs/jquery/jquery.min.js');
    wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/assets/libs/smoothscroll/smoothscroll.js', array('jquery'));
    wp_enqueue_script( 'rellax', get_template_directory_uri() . '/assets/libs/rellax/rellax.min.js', array('jquery') );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/libs/parallax/parallax.js', array('jquery'));
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js?2', array('jquery') );
}

add_theme_support( 'custom-logo' );
add_filter( 'show_admin_bar', '__return_false' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
    acf_add_options_sub_page('Post');
}

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );
