<?php get_header() ?>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-blog-section text-align-center">
                <div class="max-width-large align-center">
                    <div class="padding-bottom padding-custom1">
                        <h1 class="heading-style-h1-s"><?php echo single_cat_title('', false); ?></h1>
                    </div>
                    <?php if (category_description()) : ?>
                        <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php echo category_description(); ?></div>
                    <?php endif; ?>
                </div>
                <?php $category = get_queried_object();  ?>
                <?php if ($category && $category->slug === 'case-studies') : ?>
                    <div class="display-inline padding-top padding-medium">
                        <a href="/request-demo" class="button w-inline-block">
                            <div class="button-text">Become a Success Story</div>
                            <div class="overlay-gradient-1"></div>
                            <div class="overlay-gradient-2"></div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($category && $category->slug === 'videos') : ?>
                    <div class="padding-top padding-medium">
                        <div class="videos_find videos">
                            <a data-w-id="979c866d-5a3c-f997-7bda-bd53a24d68d4" href="https://vimeo.com/edgedelta" target="_blank" class="button is-secondary is-small w-inline-block">
                                <div class="icon w-embed">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 0H17C18.6569 0 20 1.34315 20 3V17C20 18.6569 18.6569 20 17 20H3C1.34315 20 0 18.6569 0 17V3C0 1.34315 1.34315 0 3 0ZM10.0391 15.9375C11.3281 15.1172 15.5859 11.4844 16.3281 7.22656C17.0703 2.96875 11.25 3.86719 10.5859 7.57812C12.1484 6.64062 13.0078 7.96875 12.1875 9.41406C11.4062 10.9375 10.6641 11.875 10.2734 11.875C9.92188 11.875 9.64844 10.8984 9.21875 9.14062C9.11214 8.74085 9.02978 8.26429 8.94455 7.77115C8.65504 6.09598 8.33245 4.22946 6.91406 4.53125C5.15625 4.84375 2.85156 7.61719 2.85156 7.61719L3.35938 8.35938C3.35938 8.35938 4.53125 7.42187 4.88281 7.89062C5.09967 8.15085 5.64156 9.92791 6.16096 11.6313C6.57719 12.9962 6.97897 14.3138 7.1875 14.7656C7.61719 15.5859 8.78906 16.7578 10.0391 15.9375Z" fill="#818582"></path>
                                    </svg>
                                </div>
                                <div class="text-size-medium">Vimeo</div>
                            </a>
                            <a data-w-id="979c866d-5a3c-f997-7bda-bd53a24d68d8" href="https://www.youtube.com/@EdgeDelta" target="_blank" class="button is-secondary is-small w-inline-block">
                                <div class="icon w-embed">
                                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.7868 0.954312C18.842 1.2365 19.665 2.06274 19.9504 3.11785C20.6968 6.12802 20.6481 11.8191 19.9661 14.8763C19.6839 15.9313 18.8576 16.7545 17.8026 17.0399C14.8237 17.7766 5.4817 17.6858 2.67534 17.0399C1.62021 16.7577 0.79711 15.9313 0.511768 14.8763C-0.192177 12.0072 -0.143575 5.93988 0.496091 3.13353C0.778284 2.07841 1.60453 1.25533 2.65966 0.969988C6.64188 0.139051 16.3695 0.407142 17.7868 0.954312ZM7.87171 5.32712V12.6643L14.2684 8.99574L7.87171 5.32712Z" fill="#818582"></path>
                                    </svg>
                                </div>
                                <div class="text-size-medium">YouTube</div>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="section_hero-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
            </div>
        </div>
        <?php if ($category && $category->slug === 'careers') : ?>
            <div class="container-large is-lines background-color-primary">
                <div class="dots_wrapper">
                    <div class="dot is-bot-left"></div>
                    <div class="dot is-bot-right"></div>
                    <div class="dot is-top-right"></div>
                    <div class="dot is-top-left"></div>
                </div>
                <div class="careers_hero_slider">
                    <div id="w-node-cc92d018-6254-433d-89d9-d79d5831e7c5-c812b6ae">
                        <div class="padding-bottom padding-small">
                            <h3 class="heading-style-h6">Working at Edge Delta</h3>
                        </div>
                        <div class="text-size-large text-color-neutral-lighter">We’re passionate about developing technology and solutions that our customers love. We promote a healthy work-life balance combined with career growth opportunities and an inclusive, collaborative culture.<br><br>We’re proud to be an equal opportunity workplace. Whatever your age, race, religion, nationality, gender identity, or sexual orientation, we’re happy to have you.</div>
                    </div>
                    <div id="w-node-e4f288ac-95fd-d3ea-3a92-9de0d1a476d5-c812b6ae">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/edge-delta-icon-gray.svg" alt="">
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="trapeze-divider-wrapper">
        <div class="trapeze-bg">
            <div class="trapeze-bg-inside">
                <div class="trapeze-triangle is-bot-left">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/frame-62777.svg" alt="">
                </div>
                <div class="trapeze-triangle is-bot-right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/frame-62777.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section_cta">
    <div class="padding-global">

        <?php
        if ($category && $category->slug === 'case-studies') {
            $case_studies = 'is-lines line-bottom-0';
        } else {
            $case_studies = '';
        }
        ?>

        <div class="container-large <?php echo $case_studies ?>">
            <div class="padding-section-medium z-index-2">
                <div class="z-index-2" style="margin: 0 0 15px;">
                    <?php if ($category && $category->slug === 'blog' || $category && $category->slug === 'videos') : ?>
                        <!-- Last Post-->
                        <?php get_template_part('templates/blog/last-post') ?>
                        <!-- Last Post-->
                    <?php endif; ?>

                    <?php if ($category && $category->slug === 'blog' || $category && $category->slug === 'knowledge-center' || $category && $category->slug === 'videos') : ?>
                        <!-- Filter-->
                        <?php get_template_part('templates/blog/filter-blog') ?>
                        <!-- Filter-->
                    <?php endif; ?>

                    <?php if (have_posts()) : ?>
                        <div class="blog1_component">
                            <div class="blog1_list-wrapper w-dyn-list <?php if ($category && $category->slug === 'careers') : echo 'careers-wrap';
                                                                        endif;  ?>">

                                <?php
                                if ($category && $category->slug === 'events') {
                                    $blog_list = 'events_list';
                                } elseif ($category && $category->slug === 'careers') {
                                    $blog_list = 'careers_list';
                                } else {
                                    $blog_list = 'blog1_list';
                                }
                                ?>
                                <div class="<?php echo $blog_list ?> w-dyn-items post-list">
                                    <!-- Posts--> 
                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php if ($category && $category->slug === 'case-studies') : ?>
                                            <?php get_template_part('templates/blog/categories/case-studies') ?>
                                        <?php elseif ($category && $category->slug === 'resources') : ?>
                                            <?php get_template_part('templates/blog/categories/resources') ?>
                                        <?php elseif ($category && $category->slug === 'events') : ?>
                                            <?php get_template_part('templates/blog/categories/events') ?>
                                        <?php elseif ($category && $category->slug === 'careers') : ?>
                                            <?php get_template_part('templates/blog/categories/careers') ?>
                                        <?php elseif ($category && $category->slug === 'news') : ?>
                                            <?php get_template_part('templates/blog/categories/news') ?>
                                        <?php else : ?>
                                            <?php get_template_part('templates/blog/post') ?>
                                        <?php endif ?>
                                    <?php endwhile; ?>
                                    <!-- Posts-->
                                </div>
                                <!-- Pagination -->
                                <?php custom_pagination(); ?>
                                <!-- Pagination -->
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="no-posts">
                            <div class="integrations_empty">
                                <div class="text-size-xlarge text-weight-medium"><?php esc_html_e('No posts found.', 'edgedelta'); ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
            </div>
        </div>
    </div>
</div>

<!-- News Form-->
<?php get_template_part('templates/blog/news-form') ?>
<!-- News Form-->

<?php if ($category && $category->slug === 'blog' || $category && $category->slug === 'videos' || $category && $category->slug === 'knowledge-center') : ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('search');
            const categorySelect = document.getElementById('select-field');
            const resultsContainer = document.querySelector('.post-list');
            const paginationWrapper = document.querySelector('.w-pagination-wrapper');

            let typingTimer;
            const typingDelay = 300;

            function showLoading() {
                resultsContainer.innerHTML = '<div class="loading">Loading...</div>';
            }

            function updateResults(content) {
                if (content.trim() !== '') {
                    resultsContainer.innerHTML = content;
                } else {
                    resultsContainer.innerHTML = '<div class="integrations_empty"><div class="text-size-xlarge text-weight-medium">No results found. Please try again.</div></div>';
                }
            }

            function showError(message) {
                resultsContainer.innerHTML = `<div class="error">${message}</div>`;
            }

            function performSearch() {
                const searchTerm = searchInput.value.trim();
                const category = searchInput.getAttribute('data-category') || '';
                const subcategory = categorySelect.value;

                if (paginationWrapper) {
                    paginationWrapper.style.display = 'none';
                }

                showLoading();

                const xhr = new XMLHttpRequest();
                xhr.open('POST', `${window.location.origin}/wp-admin/admin-ajax.php`, true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        updateResults(xhr.responseText);
                    } else {
                        showError('Something went wrong. Please try again later.');
                    }
                };

                xhr.onerror = function() {
                    showError('Failed to connect to the server.');
                };

                xhr.send(`action=ajax_search&search=${encodeURIComponent(searchTerm)}&category=${encodeURIComponent(category)}&subcategory=${encodeURIComponent(subcategory)}`);
            }

            searchInput.addEventListener('input', () => {
                clearTimeout(typingTimer);

                const searchTerm = searchInput.value.trim();

                if (searchTerm.length >= 2) {
                    typingTimer = setTimeout(performSearch, typingDelay);
                } else if (searchTerm.length === 0) {
                    performSearch();
                    if (paginationWrapper) {
                        paginationWrapper.style.display = 'grid';
                    }
                }
                console.log(categorySelect.value);
            });

            const dropdownLinks = document.querySelectorAll('.fs-select_link-1');
            const selectField = document.getElementById('select-field');
            const selectText = document.querySelector('.fs-select_text-1');
            const allOption = document.querySelector('.fs-select_link-1.w--current');
            const dropdownToggle = document.querySelector('.fs-select_toggle-1');
            const dropdownList = document.querySelector('.fs-select_list-1');

            dropdownLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    dropdownLinks.forEach(function(link) {
                        link.classList.remove('w--current');
                    });

                    link.classList.add('w--current');

                    selectText.textContent = link.textContent;

                    const selectedValue = link.dataset.value || '';
                    selectField.value = selectedValue;
                    performSearch();

                    dropdownToggle.classList.remove('w--open');
                    dropdownList.classList.remove('w--open');
                    dropdownToggle.setAttribute('aria-expanded', 'false');
                });
            });

        });
    </script>

<?php endif; ?>
<?php get_footer(); ?>