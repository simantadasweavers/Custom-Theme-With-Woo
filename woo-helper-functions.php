<?php 

/** theme support for woocommerce */
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
     add_theme_support( 'wc-product-gallery-zoom' );
     add_theme_support( 'wc-product-gallery-lightbox' );
     add_theme_support( 'wc-product-gallery-slider' );
}


?>