<?php 

function kerapy_basic_functions(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('widgets');
    add_theme_support('post-formats', array('audio','gallery','video'));
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'kerapy_basic_functions');


// function enqueue_theme_assets(){
//     // Styles
//     wp_enqueue_style( 'normal', get_template_directory_uri() . '/css/normalize.css', array(), '1.0' );
//     wp_enqueue_style( 'style', get_stylesheet_uri());


//     // Scripts
//     wp_enqueue_script( 'imagesload', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(),'1.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_theme_assets' );