<?php

// Add a rewrite rule for about, newsletter and integrations pages
function custom_rewrite_rules()
{
    add_rewrite_rule('^company/about/?$', 'index.php?pagename=about', 'top');
    add_rewrite_rule('^company/newsletter/?$', 'index.php?pagename=newsletter-signup', 'top');
    add_rewrite_rule('^company/newsletter/?$', 'index.php?pagename=newsletter', 'top');
    add_rewrite_rule('^product/integrations/?$', 'index.php?pagename=integrations', 'top');
}
add_action('init', 'custom_rewrite_rules');

// Form the URL for about, newsletter and integrations pages
function modify_page_permalink($url, $post)
{
    // Check if $post is an object before accessing its properties
    if (is_object($post) && isset($post->post_name)) {
        if ($post->post_name === 'about') {
            return home_url('/company/about');
        }

        if ($post->post_name === 'newsletter-signup' || $post->post_name === 'newsletter') {
            return home_url('/company/newsletter');
        }

        if ($post->post_name === 'integrations') {
            return home_url('/product/integrations');
        }
    }

    return $url;
}
add_filter('page_link', 'modify_page_permalink', 10, 2);

function redirect_old_url()
{
    if (!is_admin()) {
        $current_url = trim($_SERVER['REQUEST_URI'], '/');

        if ($current_url === 'about') {
            wp_redirect(home_url('/company/about'), 301);
            exit;
        }

        if ($current_url === 'newsletter-signup' || $current_url === 'newsletter') {
            wp_redirect(home_url('/company/newsletter'), 301);
            exit;
        }

        if ($current_url === 'integrations') {
            wp_redirect(home_url('/product/integrations'), 301);
            exit;
        }
    }
}
add_action('template_redirect', 'redirect_old_url');




// Add a rewrite rule for all categories
function custom_post_url_prefix()
{
    // General rule for all posts
    add_rewrite_rule(
        '^company/([^/]+)/([^/]+)/?$',
        'index.php?category_name=$matches[1]&name=$matches[2]',
        'top'
    );

    // Special rule for the resources category with subcategory
    add_rewrite_rule(
        '^company/resources/([^/]+)/([^/]+)/?$',
        'index.php?subcategory=$matches[1]&name=$matches[2]',
        'top'
    );
}
add_action('init', 'custom_post_url_prefix');

// Form the URL for posts
function modify_post_permalinks($post_link, $post)
{
    if ($post->post_type === 'post') {
        $categories = get_the_category($post->ID);
        if (!empty($categories)) {
            $main_category = $categories[0]->slug;

            // If the main category is "resources", add a subcategory
            if ($main_category === 'resources') {
                $terms = wp_get_post_terms($post->ID, 'subcategory');
                if (!empty($terms) && !is_wp_error($terms)) {
                    $subcategory_slug = $terms[0]->slug;
                    return rtrim(home_url('/company/resources/' . $subcategory_slug . '/' . $post->post_name), '/');
                }
            }

            // For other categories we use the standard format
            return rtrim(home_url('/company/' . $main_category . '/' . $post->post_name), '/');
        }
    }
    return $post_link;
}
add_filter('post_link', 'modify_post_permalinks', 1, 3);

// Redirects from old URLs
function redirect_old_urls()
{
    if (!is_singular('post')) {
        return;
    }

    global $post;
    if (!$post) {
        return;
    }

    $categories = get_the_category($post->ID);
    if (empty($categories)) {
        return;
    }

    $main_category = $categories[0]->slug;
    $current_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $expected_uri = '';

    // If this is a resources category, check the subcategory
    if ($main_category === 'resources') {
        $terms = wp_get_post_terms($post->ID, 'subcategory');
        if (!empty($terms) && !is_wp_error($terms)) {
            $subcategory_slug = $terms[0]->slug;
            $expected_uri = 'company/resources/' . $subcategory_slug . '/' . $post->post_name;
        }
    } else {
        // For all other categories
        $expected_uri = 'company/' . $main_category . '/' . $post->post_name;
    }

    // If the URL is incorrect — redirect
    if ($current_uri !== $expected_uri) {
        wp_redirect(rtrim(home_url('/' . $expected_uri), '/'), 301);
        exit;
    }
}
add_action('template_redirect', 'redirect_old_urls');




// Remove Category & Add Company Prefix
function change_category_prefix_to_company()
{
    global $wp_rewrite;

    // Change the base for categories to "company"
    // Remove trailing slash from category URLs
    $wp_rewrite->extra_permastructs['category']['struct'] = '/company/%category%';
    add_filter('category_link', 'remove_trailing_slash_from_urls');
}
add_action('init', 'change_category_prefix_to_company');

function company_category_rewrite_rules($rules)
{
    $new_rules = [];
    $categories = get_categories(['hide_empty' => false]);

    foreach ($categories as $category) {
        $category_slug = $category->slug;
        $new_rules['company/' . $category_slug . '/?$'] = 'index.php?category_name=' . $category_slug;
        $new_rules['company/' . $category_slug . '/page/([0-9]{1,})/?$'] = 'index.php?category_name=' . $category_slug . '&paged=$matches[1]';
    }

    return $new_rules + $rules;
}
add_filter('category_rewrite_rules', 'company_category_rewrite_rules');

function flush_rewrite_rules_on_activation()
{
    change_category_prefix_to_company();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_rewrite_rules_on_activation');

function flush_rewrite_rules_on_deactivation()
{
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'flush_rewrite_rules_on_deactivation');

// Function to remove trailing slashes from URLs
function remove_trailing_slash_from_urls($url) {
    return rtrim($url, '/');
}

// Apply the filter to archive page URLs
add_filter('get_pagenum_link', 'remove_trailing_slash_from_urls');
add_filter('term_link', 'remove_trailing_slash_from_urls');
add_filter('day_link', 'remove_trailing_slash_from_urls');
add_filter('month_link', 'remove_trailing_slash_from_urls');
add_filter('year_link', 'remove_trailing_slash_from_urls');

// / Remove Category & Add Company Prefix