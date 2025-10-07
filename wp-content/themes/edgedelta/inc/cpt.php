<?php
function register_custom_post_types()
{
    // CPT "Product"
    register_post_type('product', array(
        'labels' => array(
            'name' => __('Products', 'edgedelta'),
            'singular_name' => __('Product', 'edgedelta'),
            'add_new' => __('Add New Product', 'edgedelta'),
            'add_new_item' => __('Add New Product', 'edgedelta'),
            'edit_item' => __('Edit Product', 'edgedelta'),
            'new_item' => __('New Product', 'edgedelta'),
            'view_item' => __('View Product', 'edgedelta'),
            'search_items' => __('Search Products', 'edgedelta'),
            'not_found' => __('No Products found', 'edgedelta'),
            'not_found_in_trash' => __('No Products found in Trash', 'edgedelta'),
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'product'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
    ));

    // CPT "Solutions"
    register_post_type('solutions', array(
        'labels' => array(
            'name' => __('Solutions', 'edgedelta'),
            'singular_name' => __('Solution', 'edgedelta'),
            'add_new' => __('Add New Solution', 'edgedelta'),
            'add_new_item' => __('Add New Solution', 'edgedelta'),
            'edit_item' => __('Edit Solution', 'edgedelta'),
            'new_item' => __('New Solution', 'edgedelta'),
            'view_item' => __('View Solution', 'edgedelta'),
            'search_items' => __('Search Solutions', 'edgedelta'),
            'not_found' => __('No Solutions found', 'edgedelta'),
            'not_found_in_trash' => __('No Solutions found in Trash', 'edgedelta'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'use-cases'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_position' => 6,
        'menu_icon' => 'dashicons-lightbulb',
    ));

    // CPT "Thanks Pages"
    register_post_type('thanks', array(
        'labels' => array(
            'name' => __('Thanks Pages', 'edgedelta'),
            'singular_name' => __('Thanks Pages', 'edgedelta'),
            'add_new' => __('Add Thanks Page', 'edgedelta'),
            'add_new_item' => __('Add Thanks Page', 'edgedelta'),
            'edit_item' => __('Edit', 'edgedelta'),
            'new_item' => __('New', 'edgedelta'),
            'view_item' => __('View', 'edgedelta'),
            'search_items' => __('Search', 'edgedelta'),
            'not_found' => __('No Thanks Pages found', 'edgedelta'),
            'not_found_in_trash' => __('No Thanks Pages found in Trash', 'edgedelta'),
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'thank-you'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 7,
        'menu_icon' => 'dashicons-smiley',
    ));
}
add_action('init', 'register_custom_post_types');
