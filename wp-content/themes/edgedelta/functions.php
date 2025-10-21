<?php
/*
* Remove the excess from the header
*/
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
//  Disable Emojii
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
add_filter('tiny_mce_plugins', 'disable_wp_emojis_in_tinymce');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

function disable_wp_emojis_in_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}
// End Disable Emojii

function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    // wp_dequeue_style('wc-blocks-style');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

// Include consent mode functionality
require_once(trailingslashit(get_template_directory()) . 'inc/consent-mode.php');

// ==========================================
// ANTI-SPAM PROTECTION
// ==========================================

// Disable comments completely
function disable_comments_completely()
{
    // Close comments on the front-end
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);

    // Hide existing comments
    add_filter('comments_array', '__return_empty_array', 10, 2);

    // Remove comments page from admin menu
    add_action('admin_menu', function () {
        remove_menu_page('edit-comments.php');
    });

    // Redirect any comment attempts
    add_action('admin_init', function () {
        global $pagenow;
        if ($pagenow === 'edit-comments.php') {
            wp_redirect(admin_url());
            exit;
        }
    });

    // Remove comments from admin bar
    add_action('wp_before_admin_bar_render', function () {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
    });
}
add_action('init', 'disable_comments_completely');

// Block comment spam
function block_comment_spam()
{
    // Block if accessing wp-comments-post.php directly
    if (basename($_SERVER['REQUEST_URI']) === 'wp-comments-post.php') {
        wp_die('Comments are disabled on this site.', 'Comments Disabled', array('response' => 403));
    }
}
add_action('init', 'block_comment_spam');

// Additional security measures for forms
function add_anti_spam_security()
{
    // Block bots by user agent
    $bad_user_agents = array(
        'bot', 'crawler', 'spider', 'scraper', 'harvest', 'extract',
        'curl', 'wget', 'libwww', 'python', 'perl', 'java'
    );

    $user_agent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
    foreach ($bad_user_agents as $bad_agent) {
        if (strpos($user_agent, $bad_agent) !== false) {
            // Only block if they're trying to post data
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !is_admin()) {
                wp_die('Access denied.', 'Security Error', array('response' => 403));
            }
        }
    }

    // Block rapid submissions (rate limiting) - Only for non-logged-in users
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !is_admin() && !is_user_logged_in()) {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';
        $rate_limit_key = 'rate_limit_' . md5($ip);
        $submissions = get_transient($rate_limit_key) ?: 0;

        // Only rate limit obvious spam (very high number)
        if ($submissions > 50) { // Max 50 submissions per hour for non-logged users
            wp_die('Too many submissions. Please try again later.', 'Rate Limited', array('response' => 429));
        }

        set_transient($rate_limit_key, $submissions + 1, HOUR_IN_SECONDS);
    }
}
add_action('init', 'add_anti_spam_security');

// Remove comment-related features from WordPress
function remove_comment_features()
{
    // Remove comment feeds
    remove_action('wp_head', 'feed_links_extra', 3);

    // Remove comment rewrite rules
    add_filter('rewrite_rules_array', function ($rules) {
        unset($rules['comments/feed/(feed|rdf|rss|rss2|atom)/?$']);
        unset($rules['comments/(feed|rdf|rss|rss2|atom)/?$']);
        return $rules;
    });

    // Remove comment support from post types
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        remove_post_type_support($post_type, 'comments');
        remove_post_type_support($post_type, 'trackbacks');
    }
}
add_action('init', 'remove_comment_features');

// Block XML-RPC completely (often used for spam)
add_filter('xmlrpc_enabled', '__return_false');

// Remove XML-RPC from header
remove_action('wp_head', 'rsd_link');

// Disable pingbacks
function disable_pingbacks()
{
    add_filter('wp_headers', function ($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
}
add_action('init', 'disable_pingbacks');

add_action('wp_enqueue_scripts', 'enqueue_script_style');
function enqueue_script_style()
{
    // styles //
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), time(), 'all');
    wp_enqueue_style('edge-delta', get_stylesheet_directory_uri() . '/assets/css/edge-delta.css', array(), time(), 'all');


    if (is_page_template('page-templates/new-comparison.php')) {
        wp_enqueue_style('new-comparison', get_stylesheet_directory_uri() . '/assets/css/new-comparison.css', array(), time(), 'all');
    }

    if (is_page_template('page-templates/landing-page.php')) {
        wp_enqueue_style('landing-page', get_stylesheet_directory_uri() . '/assets/css/landing-page.css', array(), time(), 'all');
    }


    // scripts //
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js', array(), null, true);
    wp_enqueue_script('edge-delta', get_stylesheet_directory_uri() . '/assets/js/edge-delta.js',  array(), null, true);

    if (is_page_template('page-templates/front-page.php') || is_page_template('page-templates/product.php') || is_page_template('page-templates/landing-page.php') || is_page_template('page-templates/ai-teammates-typing.php') || is_singular('solutions')) {
        wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',  array('jquery'), null, true);
    }

    // Add Rippling apply button tracking (for career pages only)
    // Check if we're on a career page more safely
    if (is_singular('post')) {
        $categories = get_the_category();
        $is_career = false;

        if (!empty($categories)) {
            foreach ($categories as $category) {
                if ($category->slug === 'careers') {
                    $is_career = true;
                    break;
                }
            }
        }

        if ($is_career) {
            // Make sure the JS file exists before enqueueing
            $js_path = get_stylesheet_directory() . '/assets/js/rippling-apply.js';
            if (file_exists($js_path)) {
                wp_enqueue_script('rippling-apply', get_stylesheet_directory_uri() . '/assets/js/rippling-apply.js', array('jquery'), time(), true);

                // Add job ID to JS
                $job_id = get_post_meta(get_the_ID(), '_rippling_job_id', true);
                if (!empty($job_id)) {
                    wp_localize_script('rippling-apply', 'ripplingJobData', array(
                        'jobId' => $job_id,
                        'applyUrl' => 'https://ats.rippling.com/edgedelta/jobs/' . $job_id . '/apply?step=application'
                    ));
                }
            }
        }
    }
}


add_filter('script_loader_tag', function ($tag, $handle, $src) {
    $defer_scripts = ['edge-delta', 'jquery', 'swiper'];

    if (in_array($handle, $defer_scripts)) {
        return '<script src="' . esc_url($src) . '" defer></script>';
    }

    return $tag;
}, 10, 3);




function add_favicon()
{
    echo '<link rel="icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" type="image/x-icon">';
    echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" type="image/x-icon">';
}
add_action('wp_head', 'add_favicon');


// // add menu
add_theme_support('menus');
register_nav_menus(
    array(
        'primary' => 'Primary Menu',
        'footmenu_one' => 'Footer Menu (Product)',
        'footmenu_two' => 'Footer Menu (Solutions)',
        'footmenu_three' => 'Footer Menu (Company)',
        'footmenu_four' => 'Footer Menu (Legal)',
    )
);


// // add image size
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}


require_once(trailingslashit(get_template_directory()) . 'inc/cpt.php');
require_once(trailingslashit(get_template_directory()) . 'inc/permalinks.php');
require_once(trailingslashit(get_template_directory()) . 'inc/pagination.php');
require_once(trailingslashit(get_template_directory()) . 'inc/walker.php');
require_once(trailingslashit(get_template_directory()) . 'inc/Kama_Contents.php');
require_once(trailingslashit(get_template_directory()) . 'inc/jobs-ntegration.php');


add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
    return '<nav class="pg" role="navigation">%3$s</nav>';
}


if (function_exists('acf_add_options_page')) {
    //  Options
    acf_add_options_page(
        array(
            'page_title' => 'General Options',
            'menu_title' => 'General Options',
            'menu_slug' => 'general-options',
            'capability' => 'edit_posts',
            'position' => '9',
            'icon_url' => 'dashicons-admin-generic',
            'redirect' => false
        ),
    );
    //  Options
}



function get_reading_time($post_id)
{
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 500);
    return $reading_time;
}


// custom excerpt
function custom_excerpt($post_id = null)
{
    $post = get_post($post_id);

    if (!$post) {
        return '';
    }

    $content = wp_strip_all_tags($post->post_content);
    $content = trim(preg_replace('/\s+/', ' ', $content));

    preg_match('/(.*?[.?!])\s/', $content, $matches);

    return $matches[1] ?? $content;
}


// Register Taxonomy
function register_subcategory_taxonomy()
{
    register_taxonomy('subcategory', ['post'], [
        'label'             => 'Subcategory',
        'rewrite'           => false,
        'public'            => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_quick_edit' => true,
        'hierarchical'      => true,
        'show_in_rest'      => true,
    ]);
}
add_action('init', 'register_subcategory_taxonomy');

function add_subcategory_to_post()
{
    register_taxonomy_for_object_type('subcategory', 'post');
}
add_action('admin_init', 'add_subcategory_to_post');



//  Social Sharing
if (!function_exists('social_sharing_buttons')) {
    function social_sharing_buttons()
    {
        global $post;
        if (is_single() || is_page()) {
            $bloginfo = get_bloginfo();
            $url = urlencode(get_permalink());
            $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
            $xURL = 'https://x.com/share?text=' . get_the_title() . '&url=' . $url;
            $facebookURL = 'https://www.facebook.com/sharer.php?u=' . $url . '&t=' . $title;
            $linkedInURL = 'http://www.linkedin.com/shareArticle?mini=true&url=' . get_permalink() . '&title=' . $title . '&summary=&source=' . $bloginfo;

            $content = '';

            $content .= '<a href="' . $linkedInURL . '" target="_blank" rel="noreferrer" aria-label="Linkedin" class="socialshare_link w-inline-block">';
            $content .= '<div class="socialshare_icon w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_15316_43654)"><path d="M21.829 0H2.17099C0.972 0 0 0.972 0 2.17099V21.8289C0 23.028 0.972 24 2.17099 24H21.8289C23.028 24 24 23.028 24 21.8289V2.17099C24 0.972 23.028 0 21.829 0ZM7.42662 20.7232C7.42662 21.0721 7.14377 21.355 6.79483 21.355H4.10544C3.7565 21.355 3.47365 21.0721 3.47365 20.7232V9.4494C3.47365 9.10046 3.7565 8.81761 4.10544 8.81761H6.79483C7.14377 8.81761 7.42662 9.10046 7.42662 9.4494V20.7232ZM5.45014 7.75489C4.0391 7.75489 2.8952 6.61099 2.8952 5.19996C2.8952 3.78892 4.0391 2.64503 5.45014 2.64503C6.86117 2.64503 8.00507 3.78892 8.00507 5.19996C8.00507 6.61099 6.86124 7.75489 5.45014 7.75489ZM21.4813 20.7741C21.4813 21.0949 21.2212 21.355 20.9004 21.355H18.0145C17.6937 21.355 17.4335 21.0949 17.4335 20.7741V15.486C17.4335 14.6972 17.6649 12.0292 15.372 12.0292C13.5934 12.0292 13.2327 13.8553 13.1602 14.6749V20.7741C13.1602 21.0949 12.9002 21.355 12.5793 21.355H9.78817C9.46737 21.355 9.20727 21.0949 9.20727 20.7741V9.39851C9.20727 9.07772 9.46737 8.81761 9.78817 8.81761H12.5793C12.9001 8.81761 13.1602 9.07772 13.1602 9.39851V10.3821C13.8197 9.39236 14.7998 8.62844 16.8866 8.62844C21.5077 8.62844 21.4813 12.9457 21.4813 15.3178V20.7741Z" fill="currentColor"></path></g><defs><clipPath id="clip0_15316_43654"><rect width="24" height="24" fill="currentColor"></rect></clipPath></defs></svg></div>';
            $content .= '</a>';

            $content .= '<a href="' . $facebookURL . '" target="_blank" rel="noreferrer" aria-label="Facebook" class="socialshare_link w-inline-block">';
            $content .= '<div class="socialshare_icon w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_15316_43663)"><path d="M12 24.0001C18.6274 24.0001 24 18.6275 24 12.0001C24 5.37264 18.6274 6.10352e-05 12 6.10352e-05C5.37261 6.10352e-05 3.05176e-05 5.37264 3.05176e-05 12.0001C3.05176e-05 18.6275 5.37261 24.0001 12 24.0001Z" fill="currentColor"></path><path d="M15.9019 3.68347H13.2436C11.6661 3.68347 9.91145 4.34696 9.91145 6.63364C9.91915 7.4304 9.91145 8.19347 9.91145 9.05226H8.08647V11.9563H9.96793V20.3167H13.4252V11.9012H15.7071L15.9136 9.04411H13.3656C13.3656 9.04411 13.3713 7.77317 13.3656 7.40408C13.3656 6.50044 14.3059 6.55218 14.3625 6.55218C14.8099 6.55218 15.6799 6.55349 15.9032 6.55218V3.68347H15.9019Z" fill="#111712"></path></g><defs><clipPath id="clip0_15316_43663"><rect width="24" height="24" fill="currentColor"></rect></clipPath></defs></svg></div>';
            $content .= '</a>';

            $content .= '<a href="' . $xURL . '" target="_blank" rel="noreferrer" aria-label="X" class="socialshare_link w-inline-block">';
            $content .= '<div class="socialshare_icon w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.9762 10.1621L22.7184 0H20.6467L13.056 8.82384L6.99312 0H0L9.168 13.343L0 24H2.07168L10.0877 14.6813L16.4909 24H23.484L13.9752 10.1621H13.9762ZM11.1384 13.4606L10.2096 12.132L2.81808 1.55952H6.00048L11.9654 10.0915L12.8942 11.4202L20.6477 22.511H17.4653L11.1384 13.4606Z" fill="currentColor"></path></svg></div>';
            $content .= '</a>';

            return $content;
        }
    }
}
//  Social Sharing



// Closing posts from the 'news' category
add_action('template_redirect', function () {
    if (is_single() && has_category('news')) {
        wp_redirect(home_url('/404'));
        exit;
    }
});

add_filter('post_row_actions', function ($actions, $post) {
    if (has_category('news', $post)) {
        unset($actions['view']);
    }
    return $actions;
}, 10, 2);

// Сlose for indexing cpt "thanks"
add_action('wp_head', function () {
    if (is_singular('thanks')) {
        echo '<meta name="robots" content="noindex, nofollow">';
    }
});



// Allow SVG loading
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Add safe SVG processing
function sanitize_svg_file($data, $file, $filename, $mimes)
{
    $filetype = wp_check_filetype($filename, $mimes);
    if ($filetype['ext'] === 'svg') {
        $data['ext'] = 'svg';
        $data['type'] = 'image/svg+xml';
        $data['proper_filename'] = $data['file'];
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'sanitize_svg_file', 10, 4);

// Filter SVG content for security
function sanitize_svg_content($content)
{
    if (class_exists('DOMDocument')) {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadXML($content, LIBXML_NOERROR);
        libxml_clear_errors();
        $svg = $dom->getElementsByTagName('svg');
        if ($svg->length) {
            return $dom->saveXML($svg->item(0));
        }
    }
    return $content;
}
add_filter('wp_upload_svg_data', 'sanitize_svg_content');

// Add SVG preview in media library
function svg_preview_in_media_library($response, $attachment, $meta)
{
    if ($response['type'] === 'image' && $response['subtype'] === 'svg+xml') {
        $response['image'] = [
            'src' => $response['url'],
        ];
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'svg_preview_in_media_library', 10, 3);



// Table of Contents
function get_kama_contents(&$post = false)
{

    if (!$post) $post = $GLOBALS['post'];

    if (is_string($post)) {
        $post_content = &$post;
    } else {
        $post_content = &$post->post_content;
    }

    $toc = new \Kama\WP\Kama_Contents([
        'selectors' => ['h2', 'h3'],
        'min_found' => 1,
        'margin'    => 0,
        'title'     => 'Table of Contents',
        'markup'    => false,
        'to_menu'   => false,
    ]);

    $contents = $toc->make_contents($post_content);

    global $pages;
    if ($pages && count($pages) == 1) {
        $pages[0] = $post_content;
    }

    return $contents;
}



// AJAX search for posts
function ajax_search_posts()
{
    $search      = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $category    = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';
    $subcategory = isset($_POST['subcategory']) ? sanitize_text_field($_POST['subcategory']) : '';
    $author = isset($_POST['author']) ? absint($_POST['author']) : 0;

    $args = [
        'post_type'      => 'post',
        'posts_per_page' => 12,
        'post_status'    => 'publish',
    ];

    $args = [
        'post_type'      => 'post',
        'posts_per_page' => 12,
        'post_status'    => 'publish',
    ];

    if ($search) {
        $args['s'] = $search;
    }

    if (!empty($category)) {
        $args['category_name'] = $category;
    }

    if ($author) {
        $args['author'] = $author;
    }

    $tax_query = [];

    if (!empty($subcategory)) {
        $tax_query[] = [
            'taxonomy' => 'subcategory',
            'field'    => 'slug',
            'terms'    => $subcategory,
        ];
    }

    if ($search || !empty($subcategory) || $author) {
        $tax_query[] = [
            'taxonomy' => 'subcategory',
            'field'    => 'slug',
            'terms'    => ['guides'],
            'operator' => 'NOT IN',
        ];
    }

    if (!empty($tax_query)) {
        $args['tax_query'] = count($tax_query) > 1
            ? array_merge(['relation' => 'AND'], $tax_query)
            : $tax_query;
    }

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('templates/blog/post');
        }
    } else {
        echo '<div class="integrations_empty"><div class="text-size-xlarge text-weight-medium">No results found. Please try again.</div></div>';
    }

    wp_reset_postdata();

    echo ob_get_clean();
    wp_die();
}

add_action('wp_ajax_ajax_search', 'ajax_search_posts');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search_posts');



// Add Profile Image Field to User Profile
function add_profile_image_field($user)
{
?>
    <h3>Profile Image</h3>
    <table class="form-table">
        <tr>
            <th><label for="profile_image">Upload Profile Image</label></th>
            <td>
                <?php
                $image_id = get_user_meta($user->ID, 'profile_image_id', true);
                $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'thumbnail') : '';
                ?>
                <input type="file" name="profile_image" id="profile_image" accept="image/*">
                <?php if ($image_url) : ?>
                    <p class="description">Current profile image:</p>
                    <img src="<?php echo esc_url($image_url); ?>" style="max-width: 150px; height: auto;">
                <?php endif; ?>
            </td>
        </tr>
    </table>
<?php
}
add_action('show_user_profile', 'add_profile_image_field');
add_action('edit_user_profile', 'add_profile_image_field');

// Fix form enctype for file upload
function fix_profile_form_enctype()
{
    echo '<script type="text/javascript">
        jQuery(document).ready(function($) {
            $("form#your-profile").attr("enctype", "multipart/form-data");
        });
    </script>';
}
add_action('admin_footer', 'fix_profile_form_enctype');

// Save Profile Image
function save_profile_image($user_id)
{
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['size'] > 0) {
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/media.php');

        // Delete old image if it exists
        $old_image_id = get_user_meta($user_id, 'profile_image_id', true);
        if ($old_image_id) {
            wp_delete_attachment($old_image_id, true);
        }

        // Handle the upload
        $attachment_id = media_handle_upload('profile_image', 0);

        if (!is_wp_error($attachment_id)) {
            update_user_meta($user_id, 'profile_image_id', $attachment_id);
        }
    }
}
add_action('personal_options_update', 'save_profile_image');
add_action('edit_user_profile_update', 'save_profile_image');

// Replace WordPress Default Avatar with Custom Profile Image
function custom_avatar($avatar, $id_or_email, $size, $default, $alt)
{
    $user_id = 0;

    if (is_numeric($id_or_email)) {
        $user_id = (int) $id_or_email;
    } elseif (is_object($id_or_email)) {
        if (!empty($id_or_email->user_id)) {
            $user_id = (int) $id_or_email->user_id;
        }
    } else {
        $user = get_user_by('email', $id_or_email);
        if ($user) {
            $user_id = $user->ID;
        }
    }

    if ($user_id) {
        $image_id = get_user_meta($user_id, 'profile_image_id', true);
        if ($image_id) {
            $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
            if ($image_url) {
                $avatar = sprintf(
                    '<img alt="%s" src="%s" class="avatar avatar-%d photo" height="%d" width="%d" loading="lazy"/>',
                    esc_attr($alt),
                    esc_url($image_url),
                    (int) $size,
                    (int) $size,
                    (int) $size
                );
            }
        }
    }

    return $avatar;
}
add_filter('get_avatar', 'custom_avatar', 10, 5);



// Exclude knowledge-center category from blog archive
function exclude_guides_from_blog_archive($query)
{
    // Get knowledge-center category ID
    $knowledge_center_term = get_term_by('slug', 'knowledge-center', 'category');

    if (!$knowledge_center_term) {
        return; // Exit if term doesn't exist
    }

    // For main query on frontend archives
    if (!is_admin() && $query->is_main_query() && $query->is_archive()) {
        // Get the current category
        $category = get_queried_object();

        // Only apply filter to the blog category archive
        if (isset($category->slug) && $category->slug === 'blog') {
            // Get current tax query
            $tax_query = $query->get('tax_query');
            if (!is_array($tax_query)) {
                $tax_query = array();
            }

            // Add exclusion for knowledge-center category
            $tax_query[] = array(
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $knowledge_center_term->term_id,
                'operator' => 'NOT IN',
            );

            $query->set('tax_query', $tax_query);
        }
    }
    // For custom queries (like featured posts)
    elseif (!is_admin() && !$query->is_main_query()) {
        // Check if this is a query in the blog category
        $category_name = $query->get('category_name');
        if ($category_name === 'blog') {
            // Get current tax query
            $tax_query = $query->get('tax_query');
            if (!is_array($tax_query)) {
                $tax_query = array();
            }

            // Add exclusion for knowledge-center category
            $tax_query[] = array(
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $knowledge_center_term->term_id,
                'operator' => 'NOT IN',
            );

            $query->set('tax_query', $tax_query);
        }
    }
}
add_action('pre_get_posts', 'exclude_guides_from_blog_archive');

// TEMPORARY: One-time script to update play.edgedelta.com links to HTTPS
add_action('admin_menu', 'add_update_links_menu');
function add_update_links_menu()
{
    add_menu_page(
        'Update Links',
        'Update Links',
        'manage_options',
        'update-links',
        'update_links_page',
        'dashicons-update',
        100
    );
}

function update_links_page()
{
    if (isset($_POST['update_links']) && check_admin_referer('update_links_action')) {
        global $wpdb;

        // Update post content
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE $wpdb->posts 
                SET post_content = REPLACE(post_content, %s, %s) 
                WHERE post_content LIKE %s",
                'http://play.edgedelta.com',
                'https://play.edgedelta.com',
                '%http://play.edgedelta.com%'
            )
        );

        // Update post meta
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE $wpdb->postmeta 
                SET meta_value = REPLACE(meta_value, %s, %s) 
                WHERE meta_value LIKE %s",
                'http://play.edgedelta.com',
                'https://play.edgedelta.com',
                '%http://play.edgedelta.com%'
            )
        );

        echo '<div class="notice notice-success"><p>Links have been updated successfully!</p></div>';
    }
?>
    <div class="wrap">
        <h1>Update Links to HTTPS</h1>
        <p>This will update all instances of <code>http://play.edgedelta.com</code> to <code>https://play.edgedelta.com</code> in your database.</p>
        <form method="post" action="">
            <?php wp_nonce_field('update_links_action'); ?>
            <input type="submit" name="update_links" class="button button-primary" value="Update Links Now" onclick="return confirm('Are you sure you want to update all links? This cannot be undone.');">
        </form>
    </div>
<?php
}



function get_icon_type($type)
{
    $base_uri = get_template_directory_uri() . '/assets/images/';

    $icons = [
        'check'   => 'check-icon.svg',
        'neutral' => 'neutral-icon.svg',
        'x'       => 'x-icon.svg',
    ];

    if (!isset($icons[$type])) {
        return '';
    }

    $src = esc_url($base_uri . $icons[$type]);
    $alt = esc_attr($type);

    return '<span class="' . esc_attr($type) . '-icon"><img src="' . $src . '" alt="' . $alt . '"></span>';
}

// ==========================================
// LAST EDITED BY COLUMN
// ==========================================

// Add "Last Edited By" column to posts list
function add_last_edited_by_column($columns)
{
    // Insert the new column after the 'author' column
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'author') {
            $new_columns['last_edited_by'] = 'Last Edited By';
        }
    }
    return $new_columns;
}

// Populate the "Last Edited By" column with data
function populate_last_edited_by_column($column, $post_id)
{
    if ($column === 'last_edited_by') {
        // Get the last user who modified the post
        $last_user_id = get_post_meta($post_id, '_edit_last', true);

        if ($last_user_id) {
            $user = get_userdata($last_user_id);
            if ($user) {
                // Get the modified date
                $modified = get_the_modified_date('M j, Y g:i A', $post_id);
                echo '<strong>' . esc_html($user->display_name) . '</strong><br>';
                echo '<small>' . esc_html($modified) . '</small>';
            } else {
                echo '—';
            }
        } else {
            // Fallback to post author if no last editor is recorded
            $post = get_post($post_id);
            $author = get_userdata($post->post_author);
            if ($author) {
                echo '<strong>' . esc_html($author->display_name) . '</strong><br>';
                echo '<small>Original author</small>';
            } else {
                echo '—';
            }
        }
    }
}

// Make the "Last Edited By" column sortable
function make_last_edited_by_sortable($columns)
{
    $columns['last_edited_by'] = 'last_edited_by';
    return $columns;
}

// Handle sorting for "Last Edited By" column
function sort_last_edited_by_column($query)
{
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    if ($query->get('orderby') === 'last_edited_by') {
        $query->set('meta_key', '_edit_last');
        $query->set('orderby', 'meta_value_num');
    }
}

// Track when a post is edited and by whom
function track_post_editor($post_id)
{
    // Don't track for auto-saves, post revisions, or bulk edits
    if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
        return;
    }

    // Get current user
    $current_user_id = get_current_user_id();

    // Only track if user is logged in
    if ($current_user_id) {
        update_post_meta($post_id, '_edit_last', $current_user_id);
    }
}

// Apply hooks for all post types
function init_last_edited_by_columns()
{
    $post_types = get_post_types(array('public' => true), 'names');

    foreach ($post_types as $post_type) {
        // Add column
        add_filter("manage_{$post_type}_posts_columns", 'add_last_edited_by_column');
        add_action("manage_{$post_type}_posts_custom_column", 'populate_last_edited_by_column', 10, 2);

        // Make sortable
        add_filter("manage_edit-{$post_type}_sortable_columns", 'make_last_edited_by_sortable');
    }

    // Add sorting functionality
    add_action('pre_get_posts', 'sort_last_edited_by_column');

    // Track edits
    add_action('save_post', 'track_post_editor');
}

// Initialize the functionality
add_action('admin_init', 'init_last_edited_by_columns');

// Register ACF local field group for AI Teammates template: feature_image_5
add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_ai_teammates_feature_image_5',
        'title' => 'AI Teammates: Data Pipelines Media',
        'fields' => array(
            array(
                'key' => 'field_ai_teammates_feature_image_5',
                'label' => 'Feature Image 5',
                'name' => 'feature_image_5',
                'type' => 'image',
                'instructions' => 'Upload the image for the Data Pipelines section.',
                'required' => 0,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/ai-teammates-typing.php',
                ),
            ),
        ),
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'menu_order' => 0,
        'active' => true,
        'show_in_rest' => 0,
    ));
});





add_filter('acf/load_field/name=page_links', function ($field) {

    $field['type'] = 'select';
    $field['multiple'] = 1;
    $field['ui'] = 1;
    $field['ajax'] = 0;
    $field['choices'] = [];

    // --- Pages ---
    $pages = get_pages();
    if (!empty($pages)) {
        foreach ($pages as $page) {
            $url = get_permalink($page->ID);

            if ($page->post_name === 'about') {
                $url = home_url('/company/about');
            }
            if ($page->post_name === 'newsletter-signup' || $page->post_name === 'newsletter') {
                $url = home_url('/company/newsletter');
            }
            if ($page->post_name === 'integrations') {
                $url = home_url('/product/integrations');
            }

            $field['choices'][$url] = $page->post_title;
        }
    }

    // --- Categories ---
    $categories = get_categories(['hide_empty' => false]);
    if (!empty($categories)) {
        foreach ($categories as $cat) {
            $url = get_category_link($cat->term_id);
            $field['choices']['Categories'][$url] = $cat->name;
        }
    }

    // --- CPT ---
    $custom_post_types = ['product', 'solutions'];
    foreach ($custom_post_types as $cpt) {
        $post_type_obj = get_post_type_object($cpt);
        if ($post_type_obj && !empty($post_type_obj->has_archive)) {
            $archive_url = get_post_type_archive_link($cpt);
            if ($archive_url) {
                $label = isset($post_type_obj->labels->name) ? $post_type_obj->labels->name : ucfirst($cpt);
                $field['choices']['CPT Archives'][$archive_url] = $label . ' (Archive)';
            }
        }

        $posts = get_posts([
            'post_type' => $cpt,
            'post_status' => 'publish',
            'numberposts' => -1,
        ]);

        if (!empty($posts)) {
            $label = isset($post_type_obj->labels->name) ? $post_type_obj->labels->name : ucfirst($cpt);
            foreach ($posts as $p) {
                $field['choices'][$label][get_permalink($p->ID)] = $p->post_title;
            }
        }
    }

    // --- Posts ---
    $posts = get_posts([
        'post_type' => 'post',
        'post_status' => 'publish',
        'numberposts' => -1,
    ]);
    if (!empty($posts)) {
        foreach ($posts as $p) {
            $field['choices']['Posts'][get_permalink($p->ID)] = $p->post_title;
        }
    }

    return $field;
});



// Check if current URL matches any link from ACF option field 'button_head'

function check_current_url_in_button_head()
{
    $links = get_field('page_links', 'option');

    if (empty($links) || !is_array($links)) {
        return false;
    }

    $current_url = home_url(add_query_arg([], $GLOBALS['wp']->request));
    $current_url = rtrim($current_url, '/');

    foreach ($links as $link) {
        $link_url = is_array($link) && isset($link['url'])
            ? rtrim($link['url'], '/')
            : rtrim($link, '/');

        if (strpos($link_url, 'company/blog') !== false && strpos($current_url, $link_url) === 0) {
            return true;
        }

        if ($link_url === $current_url) {
            return true;
        }
    }

    return false;
}
