<?php 

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
    $logo_width = $kerapy_option['h-img-width'];
    $logo_height = $kerapy_option['h-img-height'];


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
    <style>
        .navbar-brand img{
            max-width: <?php echo esc_html($logo_width); ?>px!important;
            max-height: <?php echo esc_html($logo_height); ?>px!important;
        }
    </style>
    <?php
}
add_action('wp_head', 'kerapy_inline_css');
