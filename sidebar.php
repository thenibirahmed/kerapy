<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

if ( is_shop() && is_active_sidebar( 'woocommerce-sidebar' ) ) { 
    dynamic_sidebar('woocommerce-sidebar');
}else{
    dynamic_sidebar('woocommerce-sidebar');
}
