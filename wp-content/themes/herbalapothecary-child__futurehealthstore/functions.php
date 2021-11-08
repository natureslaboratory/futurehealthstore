<?php

function fh_enqueue_assets()
{
    wp_enqueue_style('futurehealthstore-style', get_stylesheet_uri(), array('herbalapothecary-style'), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'fh_enqueue_assets');


add_action('init', 'remove_ha_redundant_actions');
function remove_ha_redundant_actions()
{
    remove_action('woocommerce_product_query', 'custom_search');
    remove_filter('woocommerce_catalog_orderby', 'herbalapothecary_add_custom_sorting_options');
}


