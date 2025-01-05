<?php 

function kerapy_woo_inline_css() {
    global $kerapy_option;
    // $btn_color = $kerapy_option['btn-hover'];
    ?>
    <style>
        .woocommerce .woocommerce-ordering select {
            vertical-align: top;
            padding: 10px;
        }

        .woocommerce ul.products li.product .woocommerce-loop-product__title{
            font-size: 20px;
            color: black;
        }

        .woocommerce ul.products li.product .price {
            display: block;
            font-weight: 400;
            margin-bottom: .5em;
            font-size: 16px;
        }

        .woocommerce ul.products li.product .price {
            font-size: 16px;
            color: #666666;
        }

        .woocommerce ul.products li.product .button {
            display: inline-block;
            margin-top: 1em;
            background-color: #00DCC2;
            color: #2A2A2A;
            padding: 16px 32px;
            border-radius: 100px;
        }

        .woocommerce ul.products li.product .onsale {
            background-color: #00DCC2;
            color: #2A2A2A;
        }

        .woocommerce nav.woocommerce-pagination ul {
            display: flex;
            white-space: nowrap;
            padding: 0;
            clear: both;
            border: none;
            border-right: none;
            margin: 0px;
            justify-content: center;
            align-content: center;
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
            background-color: #00DCC2;
            color: #2A2A2A;
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
            background-color: #00DCC2;
            color: #2A2A2A;
            border-radius: 100px;
            border: 0;
        }

        .woocommerce-shop ul{
            list-style: none;
            padding-left: 0rem;
        }

        .woocommerce-shop #sidebar h2{
            font-size: 24px;
            line-height: 120%;
        }
        .woocommerce-shop #sidebar a{
            color:#666666;
        }
    </style>
    <?php
}
add_action('wp_head', 'kerapy_woo_inline_css');