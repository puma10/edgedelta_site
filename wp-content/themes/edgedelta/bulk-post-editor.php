<?php
/**
 * Bulk Post Editor
 * 
 * This file adds a bulk post editor page to WordPress admin.
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Add the admin menu item
function add_bulk_post_editor_menu() {
    add_menu_page(
        'Bulk Post Editor',
        'Bulk Post Editor',
        'edit_posts',
        'bulk-post-editor',
        'display_bulk_post_editor',
        'dashicons-edit',
        30
    );
}
add_action('admin_menu', 'add_bulk_post_editor_menu');

// Enqueue necessary scripts and styles
function bulk_post_editor_scripts() {
    // Only load on our admin page
    $screen = get_current_screen();
    if ($screen->id !== 'toplevel_page_bulk-post-editor') {
        return;
    }

    // jQuery UI datepicker
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_style('jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
    
    // Custom styles
    wp_enqueue_style('bulk-post-editor-styles', get_template_directory_uri() . '/assets/css/bulk-post-editor.css', array(), '1.0.0');
    
    // Custom script
    wp_enqueue_script('bulk-post-editor-script', get_template_directory_uri() . '/assets/js/bulk-post-editor.js', array('jquery', 'jquery-ui-datepicker'), '1.0.0', true);
    
    // Pass data to script
    wp_localize_script('bulk-post-editor-script', 'bulk_post_editor', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('bulk_post_editor_nonce')
    ));
}
add_action('admin_enqueue_scripts', 'bulk_post_editor_scripts');

// Display the bulk post editor page
function display_bulk_post_editor() {
    // Check user capabilities
    if (!current_user_can('edit_posts')) {
        wp_die(__('You do not have permission to access this page.'));
    }
    
    // Process form submission
    if (isset($_POST['bulk_edit_posts']) && isset($_POST['post_ids']) && check_admin_referer('bulk_edit_posts', 'bulk_edit_nonce')) {
        process_bulk_edit();
    }
    
    // Get all posts with pagination
    $paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $posts_per_page = 20;
    
    $args = array(
        'post_type' => 'post',
        'post_status' => 'any',
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    // Apply filters if set
    if (isset($_GET['category_filter']) && !empty($_GET['category_filter'])) {
        $args['cat'] = intval($_GET['category_filter']);
    }
    
    if (isset($_GET['search_term']) && !empty($_GET['search_term'])) {
        $args['s'] = sanitize_text_field($_GET['search_term']);
    }
    
    $query = new WP_Query($args);
    
    // Get all categories for filtering
    $categories = get_categories(array('hide_empty' => false));
    
    // Get all subcategories for dropdown
    $subcategories = get_terms(array(
        'taxonomy' => 'subcategory',
        'hide_empty' => false,
    ));
    
    // Get all authors for dropdown
    $authors = get_users(array(
        'who' => 'authors',
        'orderby' => 'display_name'
    ));
    
    ?>
    <div class="wrap">
        <h1>Bulk Post Editor</h1>
        
        <!-- Filters -->
        <form method="get">
            <input type="hidden" name="page" value="bulk-post-editor">
            <div class="tablenav top">
                <div class="alignleft actions">
                    <select name="category_filter">
                        <option value="">All Categories</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo esc_attr($category->term_id); ?>" <?php selected(isset($_GET['category_filter']) ? $_GET['category_filter'] : '', $category->term_id); ?>>
                                <?php echo esc_html($category->name); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    
                    <input type="text" name="search_term" placeholder="Search posts..." value="<?php echo isset($_GET['search_term']) ? esc_attr($_GET['search_term']) : ''; ?>">
                    
                    <input type="submit" class="button" value="Filter">
                </div>
            </div>
        </form>
        
        <!-- Bulk Edit Form -->
        <form method="post" id="bulk-edit-form">
            <?php wp_nonce_field('bulk_edit_posts', 'bulk_edit_nonce'); ?>
            
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th scope="col" class="check-column">
                            <input type="checkbox" id="cb-select-all-1">
                        </th>
                        <th scope="col">Title</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Subcategory</th>
                        <th scope="col">Published Date</th>
                        <th scope="col">Excerpt</th>
                        <th scope="col">Author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <?php
                            $post_id = get_the_ID();
                            $categories = get_the_category();
                            $subcategory_terms = wp_get_object_terms($post_id, 'subcategory');
                            $subcategory_id = !empty($subcategory_terms) ? $subcategory_terms[0]->term_id : 0;
                            $post_date = get_the_date('Y-m-d');
                            $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 55, '...');
                            $author_id = get_post_field('post_author', $post_id);
                            ?>
                            <tr>
                                <th scope="row" class="check-column">
                                    <input type="checkbox" name="post_ids[]" value="<?php echo esc_attr($post_id); ?>">
                                </th>
                                <td>
                                    <strong><a href="<?php echo get_edit_post_link($post_id); ?>" target="_blank"><?php the_title(); ?></a></strong>
                                </td>
                                <td>
                                    <?php 
                                    $cat_names = array();
                                    foreach ($categories as $category) {
                                        $cat_names[] = $category->name;
                                    }
                                    echo esc_html(implode(', ', $cat_names));
                                    ?>
                                </td>
                                <td>
                                    <select name="subcategory[<?php echo esc_attr($post_id); ?>]">
                                        <option value="">-- Select Subcategory --</option>
                                        <?php foreach ($subcategories as $subcategory) : ?>
                                            <option value="<?php echo esc_attr($subcategory->term_id); ?>" <?php selected($subcategory_id, $subcategory->term_id); ?>>
                                                <?php echo esc_html($subcategory->name); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="post_date[<?php echo esc_attr($post_id); ?>]" value="<?php echo esc_attr($post_date); ?>" class="datepicker">
                                </td>
                                <td>
                                    <textarea name="post_excerpt[<?php echo esc_attr($post_id); ?>]" rows="3"><?php echo esc_textarea($excerpt); ?></textarea>
                                </td>
                                <td>
                                    <select name="post_author[<?php echo esc_attr($post_id); ?>]">
                                        <?php foreach ($authors as $author) : ?>
                                            <option value="<?php echo esc_attr($author->ID); ?>" <?php selected($author_id, $author->ID); ?>>
                                                <?php echo esc_html($author->display_name); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="7">No posts found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col" class="check-column">
                            <input type="checkbox" id="cb-select-all-2">
                        </th>
                        <th scope="col">Title</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Subcategory</th>
                        <th scope="col">Published Date</th>
                        <th scope="col">Excerpt</th>
                        <th scope="col">Author</th>
                    </tr>
                </tfoot>
            </table>
            
            <div class="tablenav bottom">
                <div class="alignleft actions">
                    <input type="submit" name="bulk_edit_posts" id="bulk-edit-button" class="button button-primary" value="Update Selected Posts">
                </div>
                <div class="tablenav-pages">
                    <?php
                    $total_pages = $query->max_num_pages;
                    if ($total_pages > 1) {
                        $current_page = max(1, $paged);
                        echo '<span class="displaying-num">' . sprintf(_n('%s item', '%s items', $query->found_posts), number_format_i18n($query->found_posts)) . '</span>';
                        
                        $pagination_args = array(
                            'base' => add_query_arg('paged', '%#%'),
                            'format' => '',
                            'prev_text' => __('&laquo;'),
                            'next_text' => __('&raquo;'),
                            'total' => $total_pages,
                            'current' => $current_page
                        );
                        
                        echo "\n" . paginate_links($pagination_args);
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
    <?php
    wp_reset_postdata();
}

// Process the bulk edit form submission
function process_bulk_edit() {
    // Check if post IDs were passed
    if (empty($_POST['post_ids']) || !is_array($_POST['post_ids'])) {
        return;
    }
    
    $post_ids = array_map('intval', $_POST['post_ids']);
    
    foreach ($post_ids as $post_id) {
        // Update subcategory if set
        if (isset($_POST['subcategory'][$post_id]) && !empty($_POST['subcategory'][$post_id])) {
            $subcategory_id = intval($_POST['subcategory'][$post_id]);
            wp_set_object_terms($post_id, $subcategory_id, 'subcategory');
        }
        
        // Update post date if set
        if (isset($_POST['post_date'][$post_id]) && !empty($_POST['post_date'][$post_id])) {
            $post_date = sanitize_text_field($_POST['post_date'][$post_id]);
            
            // Ensure it's a valid date format (YYYY-MM-DD)
            if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $post_date)) {
                wp_update_post(array(
                    'ID' => $post_id,
                    'post_date' => $post_date . ' ' . get_the_time('H:i:s', $post_id),
                    'post_date_gmt' => get_gmt_from_date($post_date . ' ' . get_the_time('H:i:s', $post_id))
                ));
            }
        }
        
        // Update excerpt if set
        if (isset($_POST['post_excerpt'][$post_id])) {
            $excerpt = sanitize_textarea_field($_POST['post_excerpt'][$post_id]);
            wp_update_post(array(
                'ID' => $post_id,
                'post_excerpt' => $excerpt
            ));
        }
        
        // Update author if set
        if (isset($_POST['post_author'][$post_id]) && !empty($_POST['post_author'][$post_id])) {
            $author_id = intval($_POST['post_author'][$post_id]);
            wp_update_post(array(
                'ID' => $post_id,
                'post_author' => $author_id
            ));
        }
    }
    
    // Add an admin notice for success
    add_action('admin_notices', function() {
        ?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e('Posts updated successfully!'); ?></p>
        </div>
        <?php
    });
}
