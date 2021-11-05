<?php

function fh_enqueue_assets()
{
    wp_enqueue_style('futurehealthstore-style', get_template_directory_uri() . "/style.css", array('herbalapothecary-style'), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'fh_enqueue_assets');


add_action('init', 'remove_my_custom_search');
function remove_my_custom_search()
{
    remove_action('woocommerce_product_query', 'custom_search');
}