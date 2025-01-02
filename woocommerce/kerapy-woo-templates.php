<?php 


function kerapy_woocommerce_before_main_content() {
    echo '<div class="container"><div class="row">';
}
add_action('woocommerce_before_main_content', 'kerapy_woocommerce_before_main_content', 8);

function kerapy_woocommerce_before_main_content_after_sidebar() {
    echo '<div class="col-lg-3">';
}
add_action('woocommerce_before_main_content', 'kerapy_woocommerce_before_main_content_after_sidebar', 9);

function kerapy_woocommerce_after_main_content() {
    echo '</div></div></div>';
}
add_action('woocommerce_after_main_content', 'kerapy_woocommerce_after_main_content', 8);

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 9);


function kerapy_woocommerce_output_content_wrapper() {
    echo '</div><div class="col-lg-9">';
}
add_action('woocommerce_before_main_content', 'kerapy_woocommerce_output_content_wrapper', 9);