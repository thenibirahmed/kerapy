<?php 

function kerapy_basic_functions(){

    global $kerapy_option;
    if ( ! isset( $kerapy_option ) ) {
        $kerapy_option = get_option( 'kerapy_theme_options' );
    }

    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    //require_once get_template_directory() . '/inc/class-wp-comment-walker.php';

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('widgets');
    add_theme_support('post-formats', array('audio','gallery','video'));
    add_theme_support('woocommerce');
    add_theme_support( 'automatic-feed-links' );


    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'kerapy' ),
    ) );

}
add_action('after_setup_theme', 'kerapy_basic_functions');


function kerapy_sidebar(){
    register_sidebar( array(
        'name'          => __( 'Kerapy footer 1', 'kerapy' ),
        'id'            => 'kerapy-footer-1',
        'description'   => __( 'Widgets in this area will be shown footer 1 comulm.', 'kerapy' ),
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
add_action( 'widgets_init', 'kerapy_sidebar' );



function kerapy_load_scripts(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap', array(), null, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.3.2', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/all.min.css', array(), '6.4.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all');

    wp_enqueue_style('kerapy-style', get_stylesheet_uri(), array(), '1.0', 'all');

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '5.3.2', true);
    wp_enqueue_script('infinite-scroll', get_template_directory_uri().'/assets/js/infinite-scroll.min.js', array('jquery'), '4.0.1', true);
    wp_enqueue_script('kerapy-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
}
add_action('wp_enqueue_scripts', 'kerapy_load_scripts');


function kerapy_theme_option_scripts(){
    wp_enqueue_style('kerapy-redux-custom-css', get_template_directory_uri() . '/assets/css/redux.css' , array( 'redux-admin-css' ), '1.0.0', 'all');
}
add_action( 'redux/page/kerapy_theme_options/enqueue', 'kerapy_theme_option_scripts' );


