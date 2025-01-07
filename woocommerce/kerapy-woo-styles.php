<?php 

function kerapy_woo_inline_css() {
    global $kerapy_option;

    $header_size = $kerapy_option['kerapy_woo_header_size'];
    $btn_color = $kerapy_option['kerapy_woo_button_color'];
    $btn_text_color = $kerapy_option['kerapy_woo_button_text_color'];
    $sale_badge_color = $kerapy_option['kerapy_woo_sale_badge_color'];
    $sale_badge_text_color = $kerapy_option['kerapy_woo_sale_badge_text_color'];
    $price_color = $kerapy_option['kerapy_woo_price_color'];
    $title_color = $kerapy_option['kerapy_woo_title_color'];
    $woo_notice_color = $kerapy_option['kerapy_woo_notice_color'];
    
    $single_button_color = $kerapy_option['kerapy_woo_single_button_color'];
    $single_button_text_color = $kerapy_option['kerapy_woo_single_button_text_color'];
    $single_title_color = $kerapy_option['kerapy_woo_single_title_color'];
    $single_sub_title_color = $kerapy_option['kerapy_woo_single_sub_title_color'];
    
    $checkout_button_color = $kerapy_option['kerapy_woo_cart_checkout_button_color'];
    $checkout_button_text_color = $kerapy_option['kerapy_woo_cart_checkout_button_text_color'];

    ?>
    <style>
        .woocommerce .woocommerce-ordering select {
            vertical-align: top;
            padding: 10px;
        }

        .woocommerce ul.products li.product .woocommerce-loop-product__title{
            font-size: 20px;
            color: <?php esc_attr_e($title_color) ?>;
        }

        .woocommerce ul.products li.product .price {
            display: block;
            font-weight: 400;
            margin-bottom: .5em;
            font-size: 16px;
            color: <?php esc_attr_e($price_color) ?>;
        }
        .woocommerce ul.products li.product .button {
            display: inline-block;
            margin-top: 1em;
            background-color: <?php esc_attr_e($btn_color) ?>;
            color: <?php esc_attr_e($btn_text_color) ?>;
            padding: 16px 32px;
            border-radius: 100px;
        }

        .woocommerce ul.products li.product .onsale {
            background-color: <?php esc_attr_e($sale_badge_color)?>;
            color: <?php esc_attr_e($sale_badge_text_color)?>;
        }

        .woocommerce nav.woocommerce-pagination ul {
            display: flex;
            white-space: nowrap;
            padding: 0;
            clear: both;
            border: none;
            border-right: none;
            margin: 0px 0px 40px 0px;
            justify-content: center;
            align-content: center;
        }

        .page-numbers {
            gap: 10px;
        }

        .woocommerce nav.woocommerce-pagination ul li {
            border-right: none;
        }

        .woocommerce nav.woocommerce-pagination ul li a {
            line-height: 2;
        }
        .woocommerce nav.woocommerce-pagination ul li span {
            line-height: 2;
        }

        .woocommerce div.product .product_title {
            padding-bottom: 0.5em;
            font-size: 48px;
            line-height: 120%;
            color: <?php esc_attr_e($single_title_color) ?>;
        }

        .woocommerce:where(body:not(.woocommerce-uses-block-theme)) div.product p.price{
            color: #000000;
            font-size: 20px;
        }

        .woocommerce-product-details__short-description{
            padding: 1em 0em;
        }

        .woocommerce .quantity .qty {
            width: 6.631em;
            text-align: center;
            height: 48px;
        }

        .woocommerce div.product form.cart .button {
            background-color:<?php esc_attr_e($single_button_color) ?>;
            color: <?php esc_attr_e($single_button_text_color) ?>;
            border-radius: 100px;
            padding: 16px 32px;
        }
        .wc-block-cart__submit-button {
            border: 1px black !important;
            background-color: #00DCC2;
            color: #2A2A2A;
            border-radius: 100px;
        }

        .woocommerce .products ul, .woocommerce ul.products {
            margin: 1em 0 1em;
        }

        .comment-respond .comment-form p {
            width: 100%;
        }

        .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit{
            background-color: #00DCC2;
            color: #2A2A2A;
            border-radius: 100px;
            padding: 16px 32px;
        }

        .wc-block-components-button:not(.is-link) {
            background-color: <?php esc_attr_e($checkout_button_color) ?>;
            color: <?php esc_attr_e($checkout_button_text_color) ?>;
            border-radius: 100px;
            border: 0;
        }

        .woocommerce-shop ul{
            list-style: none;
            padding-left: 0rem;
        }

        .woocommerce-shop #sidebar h2{
            font-size: <?php esc_attr_e($header_size) ?>;
            line-height: 120%;
        }
        .woocommerce-shop #sidebar a{
            color:#666666;
        }
        .woocommerce span.onsale{ 
            background-color: #00DCC2; 
            color: #ffff; 
        }
        .woocommerce-shop .footer-list-header{
            color:#2A2A2A !important;
            padding-bottom: 0.5em;
            font-size: 20px !important;
        }
        .woocommerce-shop .price_slider_wrapper .price_slider_amount  button.button{
            background-color: #00DCC2;
            color: #2A2A2A;
            border-radius: 100px;
            margin-top:0.8em;
        }
        .woocommerce div.product form.cart .reset_variations{
            background-color: #00DCC2;
            color: #2A2A2A;
            border-radius: 100px;
            border:0px;
        }
        .woocommerce div.product form.cart .variations select{
            padding:0.4em;
        }
        .woocommerce div.product form.cart .group_table td{
            align-content: center;
        }
        .woocommerce div.product form.cart .group_table td.woocommerce-grouped-product-list-item__label a{
            color: #2A2A2A;
        }
        .woocommerce-product-search button[type="submit"]{
            padding: 0.3em 1em;
            margin-top:0.8em;
        }
        .woocommerce-shop a{
            color: #666666;
        }
        #woocommerce-product-search-field-0 {
            padding:0.5em;
            width: 100%;
        }
        .ui-state-default, .ui-widget-content .ui-state-default{
            border: 0px;
            border-radius: 100px;
            background-color: #00DCC2;
        }
        .woocommerce:where(body:not(.woocommerce-uses-block-theme)) div.product span.price {
            color: #00DCC2;
            font-size: 2.25em;
            font-weight: 700;
        }
        .single-product h2 {
            font-size:2.5em;
        }
    </style>
    <?php
}
add_action('wp_head', 'kerapy_woo_inline_css');
