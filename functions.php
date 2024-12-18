<?php 

function kerapy_basic_functions(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('widgets');
    add_theme_support('post-formats', array('audio','gallery','video'));
    add_theme_support('woocommerce');


    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'kerapy' ),
    ) );
}
add_action('after_setup_theme', 'kerapy_basic_functions');


function kerapy_load_scripts(){
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap', array(), null, 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '6.4.0', 'all');

    wp_enqueue_style('kerapy-style', get_stylesheet_uri(), array(), '1.0', 'all');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.3.2', true);
    // wp_enqueue_script('kerapy-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'kerapy_load_scripts');


function kerapy_theme_option_scripts(){
    wp_enqueue_style('kerapy-redux-custom-css', get_template_directory_uri() . '/assets/css/redux.css' , array( 'redux-admin-css' ), '1.0.0', 'all');
}
add_action( 'redux/page/kerapy_theme_options/enqueue', 'kerapy_theme_option_scripts' );


function kerapy_widgets(){
    register_sidebar( array(
        'name'          => __( 'Kerapy footer 1', 'kerapy' ),
        'id'            => 'kerapy-footer-1',
        'description'   => __( 'Widgets in this area will be shown footer 1 column.', 'kerapy' ),
        'before_widget' => '<ul class="list-unstyled">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h5 class="footer-list-header">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Kerapy footer 2', 'kerapy' ),
        'id'            => 'kerapy-footer-2',
        'description'   => __( 'Widgets in this area will be shown footer 2 column.', 'kerapy' ),
        'before_widget' => '<ul class="list-unstyled">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h5 class="footer-list-header">',
        'after_title'   => '</h5>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Kerapy footer 3', 'kerapy' ),
        'id'            => 'kerapy-footer-3',
        'description'   => __( 'Widgets in this area will be shown footer 3 column.', 'kerapy' ),
        'before_widget' => '<ul class="list-unstyled">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h5 class="footer-list-header">',
        'after_title'   => '</h5>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Kerapy footer 4', 'kerapy' ),
        'id'            => 'kerapy-footer-4',
        'description'   => __( 'Widgets in this area will be shown footer 4 column.', 'kerapy' ),
        'before_widget' => '<ul class="list-unstyled">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h5 class="footer-list-header">',
        'after_title'   => '</h5>',
    ) );
}
add_action('widgets_init', 'kerapy_widgets');