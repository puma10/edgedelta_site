<?php
// ======= Rippling Jobs Integration =======

// Schedule job data fetching
if (!wp_next_scheduled('rippling_jobs_sync')) {
    wp_schedule_event(time(), 'daily', 'rippling_jobs_sync');
}
add_action('rippling_jobs_sync', 'fetch_rippling_jobs');

// Add manual sync option
function add_sync_jobs_button()
{
    if (current_user_can('edit_posts')) {
        add_management_page(
            'Sync Rippling Jobs',
            'Sync Rippling Jobs',
            'edit_posts',
            'sync-rippling-jobs',
            'sync_rippling_jobs_page'
        );
    }
}
add_action('admin_menu', 'add_sync_jobs_button');

// Create the sync page
function sync_rippling_jobs_page()
{
    echo '<div class="wrap">';
    echo '<h1>Sync Rippling Jobs</h1>';

    if (isset($_POST['sync_jobs']) && check_admin_referer('sync_rippling_jobs_nonce')) {
        // Show processing message
        echo '<div class="notice notice-info"><p>Syncing jobs from Rippling API, please wait...</p></div>';

        // Trigger the sync function
        $results = fetch_rippling_jobs(true);

        if (is_wp_error($results)) {
            echo '<div class="notice notice-error"><p>' . $results->get_error_message() . '</p></div>';
        } else {
            echo '<div class="notice notice-success"><p>' . $results . '</p></div>';

            // Update last sync time
            update_option('rippling_jobs_last_sync', time());
        }
    }

    // Get current job count
    $careers_category = get_category_by_slug('careers');
    $careers_count = 0;

    if ($careers_category) {
        $args = array(
            'cat' => $careers_category->term_id,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);
        $careers_count = $query->found_posts;
    }

    echo '<div class="card" style="max-width: 800px; margin-bottom: 20px; padding: 15px;">';
    echo '<h2>Jobs Status</h2>';
    echo '<p>Current Rippling jobs in system: <strong>' . $careers_count . '</strong></p>';

    $last_sync = get_option('rippling_jobs_last_sync', false);
    if ($last_sync) {
        echo '<p>Last sync time: <strong>' . date('F j, Y, g:i a', $last_sync) . '</strong></p>';
    } else {
        echo '<p>Last sync time: <strong>Never</strong></p>';
    }
    echo '</div>';

    echo '<form method="post">';
    wp_nonce_field('sync_rippling_jobs_nonce');
    echo '<p>Click the button below to manually sync jobs from Rippling API.</p>';
    echo '<input type="submit" name="sync_jobs" class="button button-primary" value="Sync Jobs Now">';
    echo '</form>';

    echo '<h3 style="margin-top: 30px;">Troubleshooting</h3>';
    echo '<p>If you encounter issues with the job sync:</p>';
    echo '<ol>';
    echo '<li>Check that the Rippling API endpoint is accessible</li>';
    echo '<li>Verify that the "careers" category exists in WordPress</li>';
    echo '<li>Check server error logs for any API connection issues</li>';
    echo '</ol>';

    echo '</div>';
}

// Main function to fetch jobs from Rippling API
function fetch_rippling_jobs($manual = false)
{
    // API URL
    $api_url = 'https://api.rippling.com/platform/api/ats/v1/board/edgedelta/jobs/';

    // Fetch jobs from API
    $response = wp_remote_get($api_url, array(
        'timeout' => 15,  // Increase timeout for potentially slow API
        'sslverify' => true,
        'headers' => array(
            'Accept' => 'application/json',
            'User-Agent' => 'WordPress/' . get_bloginfo('version')
        )
    ));

    if (is_wp_error($response)) {
        error_log('Rippling API Error: ' . $response->get_error_message());
        if ($manual) {
            return new WP_Error('api_error', 'Failed to connect to Rippling API: ' . $response->get_error_message());
        }
        return false;
    }

    // Check HTTP response code
    $http_code = wp_remote_retrieve_response_code($response);
    if ($http_code !== 200) {
        $error_message = 'Rippling API returned HTTP code: ' . $http_code;
        error_log($error_message);
        if ($manual) {
            return new WP_Error('api_error', $error_message);
        }
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $jobs = json_decode($body, true);

    if (empty($jobs) || !is_array($jobs)) {
        $error_message = 'No jobs found or invalid response from Rippling API';
        error_log($error_message);
        if ($manual) {
            return new WP_Error('api_error', $error_message);
        }
        return false;
    }

    // Ensure the 'careers' category exists
    $careers_cat_id = get_cat_ID('careers');
    if (!$careers_cat_id) {
        // Category doesn't exist, create it
        $careers_cat_id = wp_create_category('Careers');
        if (is_wp_error($careers_cat_id)) {
            error_log('Failed to create Careers category: ' . $careers_cat_id->get_error_message());
            if ($manual) {
                return new WP_Error('category_error', 'Failed to create Careers category');
            }
            return false;
        }
    }

    $created = 0;
    $updated = 0;
    $deleted = 0;

    // Store all job IDs from API for comparison
    $api_job_ids = array_map(function ($job) {
        return $job['uuid'];
    }, $jobs);

    // Get all existing job posts
    $existing_jobs = get_posts(array(
        'post_type' => 'post',
        'category_name' => 'careers',
        'posts_per_page' => -1,
        'meta_key' => '_rippling_job_id',
        'meta_query' => array(
            array(
                'key' => '_rippling_job_id',
                'compare' => 'EXISTS',
            ),
        ),
    ));

    // Check for jobs to remove (no longer in API)
    foreach ($existing_jobs as $existing_job) {
        $job_id = get_post_meta($existing_job->ID, '_rippling_job_id', true);

        if (!in_array($job_id, $api_job_ids)) {
            // Job is no longer in API, trash it
            wp_trash_post($existing_job->ID);
            $deleted++;
        }
    }

    // Process each job from API
    foreach ($jobs as $job) {
        $job_id = $job['uuid'];
        $job_title = !empty($job['name']) ? sanitize_text_field($job['name']) : 'Untitled Position';

        // Get detailed job info
        $job_response = wp_remote_get($api_url . $job_id, array(
            'timeout' => 15,
            'sslverify' => true,
            'headers' => array(
                'Accept' => 'application/json',
                'User-Agent' => 'WordPress/' . get_bloginfo('version')
            )
        ));

        if (is_wp_error($job_response)) {
            error_log('Error fetching job details for ' . $job_id . ': ' . $job_response->get_error_message());
            continue; // Skip this job if we can't get details
        }

        // Check HTTP response code
        $job_http_code = wp_remote_retrieve_response_code($job_response);
        if ($job_http_code !== 200) {
            error_log('Error fetching job details for ' . $job_id . ': HTTP code ' . $job_http_code);
            continue; // Skip this job if we can't get details
        }

        $job_body = wp_remote_retrieve_body($job_response);
        $job_details = json_decode($job_body, true);

        if (empty($job_details)) {
            error_log('Empty or invalid job details for ' . $job_id);
            continue; // Skip if no details found
        }

        // Parse job description
        $job_description = '';

        // Add job summary/intro if available
        if (!empty($job_details['summary'])) {
            $job_description .= '<div class="job-summary">' . wp_kses_post($job_details['summary']) . '</div>';
        }

        // Process main description
        if (!empty($job_details['description'])) {
            if (is_string($job_details['description'])) {
                // Clean up HTML if needed
                $description = $job_details['description'];

                // Replace any double line breaks with paragraph tags if not already formatted
                if (strpos($description, '<p>') === false) {
                    $description = '<p>' . str_replace("\n\n", '</p><p>', $description) . '</p>';
                    $description = str_replace("\n", '<br>', $description);
                }

                $job_description .= wp_kses_post($description);
            } elseif (is_array($job_details['description'])) {
                foreach ($job_details['description'] as $key => $value) {
                    $section_title = sanitize_text_field($key);
                    $section_title = str_replace('_', ' ', $section_title);
                    $section_title = ucwords($section_title);

                    $job_description .= '<h3>' . $section_title . '</h3>';
                    $job_description .= '<div class="job-section job-' . sanitize_title($key) . '">' . wp_kses_post($value) . '</div>';
                }
            }
        }

        // Add requirements if available separately
        if (!empty($job_details['requirements']) && is_array($job_details['requirements'])) {
            $job_description .= '<h3>Requirements</h3><ul class="job-requirements">';
            foreach ($job_details['requirements'] as $requirement) {
                $job_description .= '<li>' . wp_kses_post($requirement) . '</li>';
            }
            $job_description .= '</ul>';
        }

        // Check if job already exists
        $existing_job = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'meta_key' => '_rippling_job_id',
            'meta_value' => $job_id,
        ));

        // Job data
        $job_data = array(
            'post_title' => $job_title,
            'post_content' => $job_description,
            'post_status' => 'publish',
            'post_type' => 'post',
            'meta_input' => array(
                '_rippling_job_id' => $job_id,
                '_rippling_job_url' => 'https://ats.rippling.com/edgedelta/jobs/' . $job_id . '/apply?step=application',
            ),
        );

        // Set job category
        $job_data['post_category'] = array(get_cat_ID('careers'));

        if (!empty($existing_job)) {
            // Update existing job
            $job_data['ID'] = $existing_job[0]->ID;
            wp_update_post($job_data);
            $updated++;
        } else {
            // Create new job
            $post_id = wp_insert_post($job_data);
            $created++;
        }

        // Determine the post ID
        $post_id = !empty($existing_job) ? $existing_job[0]->ID : $post_id;

        // Update ACF fields
        if (function_exists('update_field')) {
            // Position
            if (!empty($job_title)) {
                update_field('position', $job_title, $post_id);
            }

            // Department field mapping - using department name instead of label
            $department_value = '';

            if (!empty($job_details['department']['name'])) {
                $department_value = $job_details['department']['name'];
            } elseif (!empty($job_details['department']['label'])) {
                $department_value = $job_details['department']['label'];
            } elseif (!empty($job_details['department']['id'])) {
                $department_value = $job_details['department']['id'];
            }

            // Clean up department name if needed (e.g., "80 - Sales" -> "SALES")
            if (!empty($department_value)) {
                // Check if the format is like "80 - Sales"
                if (preg_match('/^\d+\s*-\s*(.+)$/', $department_value, $matches)) {
                    // Extract just the department name part after the dash
                    $department_value = trim($matches[1]);
                }

                // Update the department field
                update_field('department', sanitize_text_field($department_value), $post_id);
            }

            // Number of vacancies - Set a default value of 1 if not specified
            update_field('number_of_vacancies', 1, $post_id);

            // Location field mapping - extremely simplified to avoid formatting issues
            $location_value = '';

            // Just use the first workLocation if available
            if (!empty($job_details['workLocations']) && is_array($job_details['workLocations']) && !empty($job_details['workLocations'][0])) {
                $location_value = sanitize_text_field($job_details['workLocations'][0]);
            }

            // Update the location field with the exact field name from ACF
            if (!empty($location_value)) {
                update_field('location', $location_value, $post_id);
            }

            // Set default working condition to Remote
            update_field('working_conditions', 'Remote', $post_id);
        }
    }

    if ($manual) {
        return "Job synchronization complete: {$created} jobs created, {$updated} jobs updated, {$deleted} jobs removed.";
    }

    return true;
}

// AJAX endpoint to get job details
function get_rippling_job_details()
{
    if (!isset($_GET['job_id'])) {
        wp_send_json_error('No job ID provided');
    }

    $job_id = sanitize_text_field($_GET['job_id']);
    $api_url = 'https://api.rippling.com/platform/api/ats/v1/board/edgedelta/jobs/';

    $response = wp_remote_get($api_url . $job_id);

    if (is_wp_error($response)) {
        wp_send_json_error('Failed to fetch job details');
    }

    $body = wp_remote_retrieve_body($response);
    $job = json_decode($body, true);

    if (empty($job)) {
        wp_send_json_error('No job details found');
    }

    wp_send_json_success($job);
}
add_action('wp_ajax_get_rippling_job_details', 'get_rippling_job_details');
add_action('wp_ajax_nopriv_get_rippling_job_details', 'get_rippling_job_details');

// Add Apply Now button to job posts
function add_apply_now_button($content)
{
    if (!is_singular('post')) {
        return $content;
    }

    // Check if post is in careers category
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

    if (!$is_career) {
        return $content;
    }

    $job_id = get_post_meta(get_the_ID(), '_rippling_job_id', true);

    if (empty($job_id)) {
        return $content;
    }

    $apply_url = 'https://ats.rippling.com/edgedelta/jobs/' . $job_id . '/apply?step=application';

    $apply_button = '<div class="apply-now-wrapper" style="margin-top: 30px;">';
    $apply_button .= '<a href="' . esc_url($apply_url) . '" target="_blank" class="button w-inline-block" style="display: inline-block; text-decoration: none;">';
    $apply_button .= '<div class="button-text">Apply Now</div>';
    $apply_button .= '<div class="overlay-gradient-1"></div>';
    $apply_button .= '<div class="overlay-gradient-2"></div>';
    $apply_button .= '</a>';
    $apply_button .= '</div>';

    return $content . $apply_button;
}
// Enable the apply now button at the end of job content
add_filter('the_content', 'add_apply_now_button', 20);

// Trigger initial job fetch on theme activation
function theme_activation_sync_jobs()
{
    fetch_rippling_jobs();
}
add_action('after_switch_theme', 'theme_activation_sync_jobs');

// Add dashboard widget for Rippling jobs
function add_rippling_jobs_dashboard_widget()
{
    wp_add_dashboard_widget(
        'rippling_jobs_dashboard_widget',
        'Rippling Jobs Status',
        'rippling_jobs_dashboard_widget_callback'
    );
}
add_action('wp_dashboard_setup', 'add_rippling_jobs_dashboard_widget');

// Dashboard widget callback
function rippling_jobs_dashboard_widget_callback()
{
    // Get current job count
    $careers_category = get_category_by_slug('careers');
    $careers_count = 0;

    if ($careers_category) {
        $args = array(
            'cat' => $careers_category->term_id,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);
        $careers_count = $query->found_posts;
    }

    echo '<div class="rippling-jobs-widget">';
    echo '<p><strong>Active Job Listings:</strong> ' . $careers_count . '</p>';

    $last_sync = get_option('rippling_jobs_last_sync', false);
    if ($last_sync) {
        echo '<p><strong>Last Sync:</strong> ' . human_time_diff($last_sync, time()) . ' ago</p>';
    } else {
        echo '<p><strong>Last Sync:</strong> Never</p>';
    }

    echo '<p><a href="' . admin_url('tools.php?page=sync-rippling-jobs') . '" class="button button-primary">Manage Jobs</a></p>';
    echo '</div>';
}