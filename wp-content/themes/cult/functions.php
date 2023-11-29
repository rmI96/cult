<?php
/**
 * Yout functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'cult_scripts' );
function cult_scripts() {

    wp_enqueue_style( 'grid', get_template_directory_uri() . '/assets/libs/bootstrap-grid/bootstrap-grid.min.css?1' );
    wp_enqueue_style( 'calculator', get_template_directory_uri() . '/assets/libs/calculator/css/calculate.min.css?11' );
   	wp_enqueue_style( 'style-01', get_template_directory_uri() . '/assets/style/app.min.css?11' );
    wp_enqueue_style( 'style-02', get_template_directory_uri() . '/assets/style/css/style.css?s2' );
    wp_enqueue_style( 'style-03', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
    /*
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/libs/jquery/jquery.min.js?2');
    wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/assets/libs/smoothscroll/smoothscroll.js', array('jquery'));
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/libs/parallax/parallax.js', array('jquery'));

    wp_enqueue_script( 'calculator', get_template_directory_uri() . '/assets/libs/calculator/js/calculate.min.js?9');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js?98');
    */

}

add_action('wp_footer', 'cult_scripts_footer');
function cult_scripts_footer() {
    /*
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/libs/jquery/jquery.min.js?2');
    wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/assets/libs/smoothscroll/smoothscroll.js', array('jquery'));
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/libs/parallax/parallax.js', array('jquery'));
    */
    wp_enqueue_script( 'calculator', get_template_directory_uri() . '/assets/libs/calculator/js/calculate.min.js?43');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js?98');

}

add_theme_support( 'custom-logo' );
add_filter( 'show_admin_bar', '__return_false' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
    acf_add_options_sub_page('Post');
    acf_add_options_sub_page('Search');
}

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );


// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
    wp_dequeue_style( 'wp-block-library' ); // Wordpress core
    wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
    wp_dequeue_style( 'wc-block-style' ); // WooCommerce
    wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}
