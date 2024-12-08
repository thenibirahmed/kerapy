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
    wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '2.11.8', true);
    wp_enqueue_script('kerapy-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
}
add_action('wp_enqueue_scripts', 'kerapy_load_scripts');


function kerapy_theme_option_scripts(){
    wp_enqueue_style('kerapy-redux-custom-css', get_template_directory_uri() . '/assets/css/redux.css' , array( 'redux-admin-css' ), '1.0.0', 'all');
}
add_action( 'redux/page/kerapy_theme_options/enqueue', 'kerapy_theme_option_scripts' );


function kerapy_inline_css() {
global $kerapy_option;
$btn_color = $kerapy_option['btn-hover'];
$btn_bg = $kerapy_option['h-btn-bg'];
$btn_border = $kerapy_option['h-btn-border'];
$btn_border_radius = $kerapy_option['h-btn-radius'];
$btn_typography = $kerapy_option['h-btn-typography'];
// styles options
$primary_color = $kerapy_option['primary_color'];
$heading_color = $kerapy_option['heading_color'];
// maintenance mode
// footer setting
$footer_background_color = $kerapy_option['footer_bg_color'];
$footer_heading_typography = $kerapy_option['footer-title-typography'];
$footer_content_typography = $kerapy_option['footer-content-typography'];


?>
<style>
    .btn-outline-dark {
        background-color: <?php echo esc_html($btn_bg['regular']); ?> !important;
        border-top-width: <?php echo esc_html($btn_border['border-top']); ?>!important;
        border-right-width: <?php echo esc_html($btn_border['border-right']); ?> !important;
        border-bottom-width: <?php echo esc_html($btn_border['border-bottom']); ?> !important;
        border-left-width: <?php echo esc_html($btn_border['border-left']); ?> !important;
        border-style: <?php echo esc_html($btn_border['border-style']); ?> !important;
        border-color:<?php echo esc_html($btn_border['border-color']); ?> !important;
        border-radius:<?php echo esc_html($btn_border_radius); ?>px!important;
    }
    .btn-outline-dark {
        font-family: <?php echo esc_html($btn_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($btn_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($btn_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($btn_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($btn_typography['line-height']); ?> !important;
        color: <?php echo esc_html($btn_typography['color']); ?> !important;
        text-align: <?php echo esc_html($btn_typography['text-align']); ?> !important;
    }
    .btn-outline-dark:hover {
        color:<?php echo esc_html($btn_color); ?> !important;
        background-color: <?php echo esc_html($btn_bg['hover']); ?> !important;
    }
    :root{
        --primary: <?php echo esc_html($primary_color); ?> !important;
        --heading: <?php echo esc_html($heading_color); ?> !important;
    }
    .footer-bg-color {
        background-color: <?php echo esc_html($footer_background_color); ?> !important;
    }
</style>
<style>
    .footer-list-header{
        font-family: <?php echo esc_html($footer_heading_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($footer_heading_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($footer_heading_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($footer_heading_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($footer_heading_typography['line-height']); ?> !important;
        color: <?php echo esc_html($footer_heading_typography['color']); ?> !important;
        text-align: <?php echo esc_html($footer_heading_typography['text-align']); ?> !important;
    }
    .wp-calendar-table caption{
        font-family: <?php echo esc_html($footer_heading_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($footer_heading_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($footer_heading_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($footer_heading_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($footer_heading_typography['line-height']); ?> !important;
        color: <?php echo esc_html($footer_heading_typography['color']); ?> !important;
        text-align: <?php echo esc_html($footer_heading_typography['text-align']); ?> !important;
    }
    .footer-list-item a{
        font-family: <?php echo esc_html($footer_content_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($footer_content_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($footer_content_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($footer_content_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($footer_content_typography['line-height']); ?> !important;
        color: <?php echo esc_html($footer_content_typography['color']); ?> !important;
        text-align: <?php echo esc_html($footer_content_typography['text-align']); ?> !important;
    }
    .wp-calendar-table tr {
        font-family: <?php echo esc_html($footer_content_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($footer_content_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($footer_content_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($footer_content_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($footer_content_typography['line-height']); ?> !important;
        color: <?php echo esc_html($footer_content_typography['color']); ?> !important;
        text-align: <?php echo esc_html($footer_content_typography['text-align']); ?> !important;
    }
    .wp-social-link a svg {
        color: <?php echo esc_html($footer_content_typography['color']); ?> !important;
    }
    .footer-bottom-menu ul li a{
        font-family: <?php echo esc_html($footer_content_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($footer_content_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($footer_content_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($footer_content_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($footer_content_typography['line-height']); ?> !important;
        color: <?php echo esc_html($footer_content_typography['color']); ?> !important;
        text-align: <?php echo esc_html($footer_content_typography['text-align']); ?> !important;
    }
    .list-unstyled .menu li a {
        font-family: <?php echo esc_html($footer_content_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($footer_content_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($footer_content_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($footer_content_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($footer_content_typography['line-height']); ?> !important;
        color: <?php echo esc_html($footer_content_typography['color']); ?> !important;
        text-align: <?php echo esc_html($footer_content_typography['text-align']); ?> !important;
    }
    .footer-list-item{
        color: <?php echo esc_html($footer_content_typography['color']); ?> !important;
        font-family: <?php echo esc_html($footer_content_typography['font-family']); ?> !important;
        font-weight: <?php echo esc_html($footer_content_typography['font-weight']); ?> !important;
        font-style: <?php echo esc_html($footer_content_typography['font-style']); ?> !important;
        font-size: <?php echo esc_html($footer_content_typography['font-size']); ?> !important;
        line-height: <?php echo esc_html($footer_content_typography['line-height']); ?> !important;
        color: <?php echo esc_html($footer_content_typography['color']); ?> !important;
        text-align: <?php echo esc_html($footer_content_typography['text-align']); ?> !important;
    }
</style>

<?php
}
add_action('wp_head', 'kerapy_inline_css');





// Enable maintenance mode
function enable_maintenance_mode() {
    global $kerapy_option;
    $maintenance_mode = $kerapy_option['maintenance_mode'];

    if( $maintenance_mode == '1' ){
    wp_die(
        '<h1>Under Maintenance</h1><p>Our website is currently undergoing scheduled maintenance. Please check back later.</p>',
        'Maintenance Mode',
        array( 'response' => 503 )
    );
    }

}
add_action( 'get_header', 'enable_maintenance_mode' );




// custom excerpt
function kerapy_excerpt($word_count = 10) {
    global $post;
    
    // Get the post content
    $content = get_the_content(null, false, $post);
    // var_dump($content);
    // Strip shortcodes and tags from the content
    $content = strip_shortcodes($content);
    $content = wp_strip_all_tags($content);
    
    // Break the content into an array of words
    $words = explode(' ', $content);
    
    // Truncate the words to the desired length
    if (count($words) > (int) $word_count) {
        $words = array_slice($words, 0, (int) $word_count);
        $content = implode(' ', $words) . '...'; // Add ellipsis for continuation
    }
    
    return $content;
}
