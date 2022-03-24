<?php

function fh_enqueue_assets()
{
    wp_enqueue_style('futurehealthstore-style', get_stylesheet_uri(), array('herbalapothecary-style'), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'fh_enqueue_assets', 20);


add_action('init', 'remove_ha_redundant_actions');
function remove_ha_redundant_actions()
{
    remove_action('woocommerce_product_query', 'custom_search');
    remove_filter('woocommerce_catalog_orderby', 'herbalapothecary_add_custom_sorting_options');
    remove_action('wp_dashboard_setup', 'ha_dashboard_widgets');
    remove_action( 'admin_post_ha_upload_stock', 'ha_upload_handler');
    remove_action("woocommerce_single_product_summary", "ha_add_organic_flag", 31);
    remove_action("woocommerce_single_product_summary", "ha_single_product_acf_details", 25);
    remove_filter('the_content', 'customizing_woocommerce_description');
    remove_action('woocommerce_created_customer', 'ha_save_register_fields');
    remove_action('woocommerce_register_form', 'ha_add_register_form_field_top', 20);
    remove_action('woocommerce_register_form', 'ha_add_register_form_field_bottom', 30);
    remove_action('woocommerce_register_form_tag', 'ha_enctype_custom_registration_forms');
    remove_action("woocommerce_register_form_start", "ha_register_top");
    remove_action("woocommerce_register_form", "ha_register_middle", 25);
    remove_action("woocommerce_register_form", "ha_register_bottom", 35);
    remove_action('woocommerce_product_query', 'show_only_instock_products');
}


add_filter('get_custom_logo', 'fh_change_logo_class');
function fh_change_logo_class($html)
{

    $html = str_replace('custom-logo', 'c-header__logo', $html);
    $html = str_replace('custom-logo-link', 'your-custom-class', $html);

    return $html;
}
