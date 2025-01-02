<?php 

function kerapy_woo_inline_css() {
    global $kerapy_option;
    // $btn_color = $kerapy_option['btn-hover'];
    ?>
    <style>
        /* woocommerce css here */
    </style>
    <?php
}
add_action('wp_head', 'kerapy_woo_inline_css');