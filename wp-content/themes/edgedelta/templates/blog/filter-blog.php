<div class="blog_filters">
    <div class="blog_filters_categories">

        <div class="filters_item z-index-2">
            <div class="text-size-medium text-color-neutral-lighter">Categories</div>
            <div data-delay="0" data-hover="false" fs-selectcustom-element="dropdown" class="fs-select-1 w-dropdown">
                <div class="fs-select_toggle-1 w-dropdown-toggle" aria-haspopup="listbox" aria-expanded="false" role="button" tabindex="0">
                    <div class="fs-select_icon-1 w-icon-dropdown-toggle" aria-hidden="true"></div>
                    <div class="fs-select_text-1">All</div>
                </div>
                <nav class="fs-select_list-1 w-dropdown-list" role="listbox" aria-multiselectable="false">
                    <select id="select-field" name="select-field" fs-cmsfilter-field="category" fs-cmsselect-element="select" class="fs-select_field-1 w-select">
                        <option value="">All</option>
                        <?php
                        $current_category = get_queried_object();
                        if ($current_category && $current_category->taxonomy === 'category') {
                            $args = [
                                'post_type'      => 'post',
                                'posts_per_page' => -1,
                                'tax_query'      => [
                                    [
                                        'taxonomy' => 'category',
                                        'field'    => 'slug',
                                        'terms'    => $current_category->slug,
                                    ],
                                ],
                                'fields'         => 'ids',
                            ];
                            $post_ids = get_posts($args);
                            if (!empty($post_ids)) {
                                $terms = wp_get_object_terms($post_ids, 'subcategory', ['orderby' => 'name', 'order' => 'ASC']);
                                if (!empty($terms) && !is_wp_error($terms)) {
                                    // Видаляємо дублі
                                    $unique_terms = [];
                                    foreach ($terms as $term) {
                                        if (!in_array($term->slug, $unique_terms)) {
                                            $unique_terms[] = $term->slug;
                                            echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                        }
                                    }
                                }
                            }
                        }
                        ?>
                    </select>
                    <a href="#" class="fs-select_link-1 w-dropdown-link w--current" tabindex="0" role="option" aria-selected="true">All</a>
                    <?php if (!empty($unique_terms)) : ?>
                        <?php foreach ($terms as $term) : ?>
                            <a href="#" class="fs-select_link-1 w-dropdown-link" tabindex="-1" role="option" aria-selected="false" data-value="<?php echo esc_attr($term->slug); ?>">
                                <?php echo esc_html($term->name); ?>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </nav>
            </div>
        </div>

    </div>

    <div class="filters_item">
        <div class="text-size-medium text-color-neutral-lighter">Search</div>
        <input class="filters_search-field w-input" maxlength="256" name="search" placeholder="Search" type="text" id="search" data-category="<?php echo $current_category->slug ?>">
    </div>

</div>