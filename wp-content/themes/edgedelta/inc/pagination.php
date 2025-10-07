<?php

function custom_pagination($query = null)
{
    if (!$query) {
        global $wp_query;
        $query = $wp_query;
    }

    $big = 999999999;
    $current_page = max(1, get_query_var('paged'));

    $pagination_links = paginate_links([
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => $current_page,
        'total'     => $query->max_num_pages,
        'type'      => 'array',
        'prev_text' => '',
        'next_text' => '',
        'end_size'  => 1,
        'mid_size'  => 2,
    ]);

    if ($pagination_links) {
        echo '<div role="navigation" aria-label="List" class="w-pagination-wrapper news-pagination">';

        if ($current_page > 1) {
            echo '<a href="' . esc_url(get_pagenum_link($current_page - 1)) . '" aria-label="Previous Page" class="w-pagination-previous pagination_button">
                    <div class="icon w-embed">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0001 17.9995L9.00009 11.9995L15.0001 5.99951" stroke="#E6E7E7" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                  </a>';
        }

        echo '<div class="pagination_numbers">';
        foreach ($pagination_links as $link) {
            if (strpos($link, 'current') !== false) {
                $link = str_replace('current', 'w--current', $link);
            }
            echo str_replace('page-numbers', 'pagination_number w-inline-block', $link);
        }
        echo '</div>';

        if ($current_page < $query->max_num_pages) {
            echo '<a href="' . esc_url(get_pagenum_link($current_page + 1)) . '" aria-label="Next Page" class="w-pagination-next pagination_button">
                    <div class="icon w-embed">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99976 17.9995L14.9998 11.9995L8.99976 5.99951" stroke="#E6E7E7" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                  </a>';
        }

        echo '</div>';
    }
}
