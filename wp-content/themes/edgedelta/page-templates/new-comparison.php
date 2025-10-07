<?php

/**
 * Template Name: New Comparison
 */

get_header();
?>

<!-- Hero Section -->
<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-xlarge z-index-2">
                <div class="padding-top padding-medium">
                    <div class="max-width-large align-center text-align-center z-index-2">
                        <?php
                        // Get post ID for ACF fields
                        $post_id = get_the_ID();
                        $compare_hero = get_field('compare_hero', $post_id);
                        $company_logo_url = isset($compare_hero['compare_competitor_logo']) ? $compare_hero['compare_competitor_logo']['url'] : '';
                        ?>
                        <div class="comparison-subtitle">
                            <div class="text-size-medium text-color-neutral-lighter">
                                <?php
                                if (is_array($compare_hero) && isset($compare_hero['compare_top_headline'])) {
                                    echo $compare_hero['compare_top_headline'];
                                } else {
                                    echo 'A DETAILED COMPARISON';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="padding-bottom padding-custom1">
                            <h1 class="heading-style-h1 no-graident">
                                <?php
                                if (is_array($compare_hero) && isset($compare_hero['compare_headline_title'])) {
                                    echo $compare_hero['compare_headline_title'];
                                } else {
                                    echo 'Edge Delta vs Cribl <span class="year-text">(2025)</span>';
                                }
                                ?>
                            </h1>
                        </div>
                        <div class="padding-bottom padding-large">
                            <div class="text-size-large text-color-neutral-lighter">
                                <?php
                                if (is_array($compare_hero) && isset($compare_hero['compare_head_description'])) {
                                    echo $compare_hero['compare_head_description'];
                                } else {
                                    echo 'A detailed comparison of telemetry pipeline solutions – architecture, intelligence, scalability, and more.';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="comparison-logos">
                            <div class="comparison-logo-wrapper">
                                <?php
                                // Edge Delta logo with default fallback
                                if (is_array($compare_hero) && isset($compare_hero['Compare_edgedelta_logo']) && is_array($compare_hero['Compare_edgedelta_logo']) && isset($compare_hero['Compare_edgedelta_logo']['url'])) {
                                    echo '<img src="' . $compare_hero['Compare_edgedelta_logo']['url'] . '" alt="Edge Delta" class="comparison-logo" width="120" height="30">';
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/edgedeltanavlogo.svg" alt="Edge Delta" class="comparison-logo" width="120" height="30">';
                                }
                                ?>
                            </div>
                            <div class="comparison-logo-vs-hexagon">
                                <div class="vs-text">VS</div>
                            </div>
                            <div class="comparison-logo-wrapper cribl-wrapper">
                                <?php
                                // Competitor logo - no fallback for testing
                                if (is_array($compare_hero) && isset($compare_hero['compare_competitor_logo']) && is_array($compare_hero['compare_competitor_logo']) && isset($compare_hero['compare_competitor_logo']['url'])) {
                                    echo '<img src="' . $compare_hero['compare_competitor_logo']['url'] . '" alt="Competitor" class="comparison-logo" width="120" height="25">';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_hero-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
            </div>
        </div>
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

<?php
/*
<!-- Sticky Header (appears on scroll) -->
<div class="sticky-header">
    <div class="sticky-header-container">
        <div class="sticky-header-logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/edgedeltanavlogo.svg" alt="Edge Delta" class="sticky-logo">
        </div>
        <div class="sticky-header-title">Edge Delta vs <?php the_field('competitor_name') ?></div>
        <div class="sticky-header-ctas">
            <a href="<?php the_field('primary_cta_link') ?>" class="sticky-cta-button"><?php the_field('primary_cta_text') ?></a>
        </div>
    </div>
</div>
*/
?>

<!-- Main Content Container -->

<div class="section_product_resources is-relative">
    <div class="padding-global">
        <div class="container-large is-lines lines-vertical h-cs">
            <div class="dots_wrapper">
                <div class="dot is-top-right"></div>
                <div class="dot is-top-left"></div>
            </div>
        </div>
    </div>

    <div class="padding-global">
        <div class="container-large is-lines lines-vertical">

            <!-- Sidebar Categories/TOC -->
            <div class="sidebar-inner">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="sidebar-categories">
                    <?php
                    // Get the compare_content field with the correct nested structure
                    $compare_content = get_field('compare_content');

                    // Access the nested compare_cat array
                    $compare_categories = isset($compare_content['compare_cat']) ? $compare_content['compare_cat'] : [];

                    // Check if we have categories
                    if (is_array($compare_categories) && !empty($compare_categories)) :
                        $first = true;
                        $counter = 0;
                        // Loop through the categories
                        foreach ($compare_categories as $item) :
                            // Get the category name and create a slug for the ID
                            $category_name = isset($item['compare_category_name']) ? $item['compare_category_name'] : '';
                            $category_slug = sanitize_title($category_name);
                            $active_class = '';
                            $first = false;
                            $counter++;
                    ?>
                            <li class="sidebar-category <?php echo $active_class; ?>" data-category="<?php echo $category_slug; ?>">
                                <a href="#<?php echo $category_slug; ?>" class="sidebar-link">
                                    <span class="sidebar-icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-s.svg" alt="arrow"></span>
                                    <span><?php echo $category_name; ?></span>
                                </a>
                            </li>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>

            <!-- Main Content Area -->
            <div class="comparison-content">
                <?php
                // Get the compare_content field with the correct nested structure
                $compare_content = get_field('compare_content');

                // Access the nested compare_cat array
                $compare_categories = isset($compare_content['compare_cat']) ? $compare_content['compare_cat'] : [];

                // Check if we have categories
                if (is_array($compare_categories) && !empty($compare_categories)) :
                    $first = true;
                    $counter = 0;
                    // Loop through the categories
                    foreach ($compare_categories as $item) :
                        // Get the category data
                        $category_name = isset($item['compare_category_name']) ? $item['compare_category_name'] : '';
                        $category_title = isset($item['compare_category_title']) ? $item['compare_category_title'] : '';
                        $category_summary = isset($item['compare_category_summary']) ? $item['compare_category_summary'] : '';
                        $category_slug = sanitize_title($category_name);
                        $counter++;
                ?>
                        <!-- <?php echo $category_name; ?> Section -->

                        <section id="<?php echo $category_slug; ?>" class="comparison-section">

                            <div class="section-category"><?php echo $category_name; ?></div>

                            <div class="dots_wrapper">
                                <div class="dot is-top-right"></div>
                                <div class="dot is-top-left"></div>
                            </div>

                            <div class="section-header">
                                <h2 class="section-title"><?php echo $category_title; ?></h2>
                            </div>

                            <div class="comparison-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="feature-cell">
                                                <?php if ($item['compare_category_icon']) : ?>
                                                    <div class="cat-icon" style="--icon-url: url('<?php echo esc_url($item['compare_category_icon']['url']); ?>');"></div>
                                                <?php endif ?>
                                            </th>
                                            <th class="vendor-cell">
                                                <?php
                                                $post_id = get_the_ID();
                                                // Get the parent field if not already defined
                                                if (!isset($compare_hero)) {
                                                    $compare_hero = get_field('compare_hero', $post_id);
                                                }

                                                if (is_array($compare_hero) && isset($compare_hero['Compare_edgedelta_logo']) && is_array($compare_hero['Compare_edgedelta_logo']) && isset($compare_hero['Compare_edgedelta_logo']['url'])) {
                                                    echo '<img src="' . $compare_hero['Compare_edgedelta_logo']['url'] . '" alt="Edge Delta" class="vendor-logo edge-delta-logo">';
                                                } else {
                                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/edgedeltanavlogo.svg" alt="Edge Delta" class="vendor-logo edge-delta-logo">';
                                                }
                                                ?>
                                            </th>
                                            <th class="vendor-cell">
                                                <?php
                                                // Competitor logo - no fallback for flexibility
                                                if (is_array($compare_hero) && isset($compare_hero['compare_competitor_logo']) && is_array($compare_hero['compare_competitor_logo']) && isset($compare_hero['compare_competitor_logo']['url'])) {
                                                    echo '<img src="' . $compare_hero['compare_competitor_logo']['url'] . '" alt="Competitor" class="vendor-logo competitor-logo">';
                                                }
                                                ?>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        // Access the table rows directly from the item array
                                        $table_rows = isset($item['compare_category_table']) ? $item['compare_category_table'] : [];

                                        if (is_array($table_rows) && !empty($table_rows)) :
                                            // Loop through each table row
                                            foreach ($table_rows as $row) :
                                                // Get the row data
                                                $feature_type = isset($row['compare_category_table_type']) ? $row['compare_category_table_type'] : '';
                                                $edge_delta_text = isset($row['edgedelta_in_compare_table']) ? $row['edgedelta_in_compare_table'] : '';
                                                $competitor_text = isset($row['competitor_in_compare_table']) ? $row['competitor_in_compare_table'] : '';
                                        ?>
                                                <tr>
                                                    <td class="feature-cell"><?php echo $feature_type; ?></td>
                                                    <td class="vendor-cell">
                                                        <div class="comparison-item <?php if (!$edge_delta_text) : echo 'jc-center'; endif ?>">
                                                            <?php echo get_icon_type($row['icon_one']) ?>
                                                            <?php if ($edge_delta_text) : ?>
                                                                <span class="comparison-text"><?php echo nl2br($edge_delta_text); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                    <td class="vendor-cell" style="--company-logo-url: url('<?php echo esc_url($company_logo_url); ?>');">
                                                        <div class="comparison-item <?php if (!$competitor_text) : echo 'jc-center'; endif ?>">
                                                            <?php echo get_icon_type($row['icon_two']) ?>
                                                            <?php if ($competitor_text) : ?>
                                                                <span class="comparison-text"><?php echo nl2br($competitor_text); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </tbody>

                                </table>
                            </div>

                            <div class="section-description">
                                <?php echo $category_summary; ?>
                            </div>

                        </section>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>

    <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
</div>


<?php if (get_field('cta_bottom') == false) : ?>
    <!-- CTA Option-->
    <?php get_template_part('templates/cta/cta') ?>
    <!-- CTA Option-->
<?php else : ?>
    <!-- CTA -->
    <?php get_template_part('templates/solutions-product/cta') ?>
    <!-- CTA -->
<?php endif ?>

<?php get_footer(); ?>

<!-- JavaScript for interactive elements -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sidebar = document.querySelector(".sidebar-inner");
        const comparison = document.querySelector(".comparison-content");

        if (sidebar && comparison) {
            const height = sidebar.offsetHeight;
            const mTop = height - 20;
            comparison.style.marginTop = `-${mTop}px`;
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Sticky header behavior
        // const stickyHeader = document.querySelector('.sticky-header');
        // const heroSection = document.querySelector('.section_product_hero');

        // window.addEventListener('scroll', function() {
        //     if (window.scrollY > heroSection.offsetHeight) {
        //         stickyHeader.classList.add('visible');
        //     } else {
        //         stickyHeader.classList.remove('visible');
        //     }
        // });

        // Sidebar navigation functionality
        const sidebarCategories = document.querySelectorAll('.sidebar-category');
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        const sections = document.querySelectorAll('.comparison-section');
        const sidebar = document.querySelector(".sidebar-inner");
        const sidebarHeight = sidebar.offsetHeight;
        const header = document.querySelector(".navbar_component");
        const edBanner = document.querySelector(".ed-banner");

        // Initial setup - no active classes by default
        sidebarCategories.forEach(item => {
            item.classList.remove('active');
        });

        // Function to set active sidebar item
        function setActiveSidebarItem(id) {
            if (!id) return;

            // First, remove active class and reset all items
            document.querySelectorAll('.sidebar-category').forEach(item => {
                item.classList.remove('active');
                const link = item.querySelector('.sidebar-link');
                if (link) {
                    link.style.color = 'rgba(255, 255, 255, 0.7)';
                    link.style.fontWeight = 'normal';
                    link.style.display = 'flex';
                    link.style.justifyContent = 'flex-start';
                    link.style.alignItems = 'center';
                    link.style.gap = '0';
                }
                const icon = item.querySelector('.sidebar-icon');
                if (icon) {
                    icon.style.display = 'none';
                }
            });

            // Try to find the matching item
            let activeItem = document.querySelector(`.sidebar-category[data-category="${id}"]`);

            // If not found by data attribute, try by href
            if (!activeItem) {
                const activeLink = document.querySelector(`.sidebar-link[href="#${id}"]`);
                if (activeLink) {
                    activeItem = activeLink.closest('.sidebar-category');
                }
            }

            // If still not found, try partial matching
            if (!activeItem) {
                document.querySelectorAll('.sidebar-category').forEach(item => {
                    const categoryId = item.getAttribute('data-category');
                    if (categoryId && (id.includes(categoryId) || categoryId.includes(id))) {
                        activeItem = item;
                    }
                });
            }

            // Apply active class and styling if we found a match
            if (activeItem) {
                activeItem.classList.add('active');

                // Apply direct styling to the link
                const activeLink = activeItem.querySelector('.sidebar-link');
                if (activeLink) {
                    activeLink.style.color = '#62D37D';
                    activeLink.style.fontWeight = 'bold';
                    activeLink.style.display = 'flex';
                    activeLink.style.justifyContent = 'flex-start';
                    activeLink.style.alignItems = 'center';
                    activeLink.style.gap = '8px';
                }

                // Show the icon
                const icon = activeItem.querySelector('.sidebar-icon');
                if (icon) {
                    icon.style.display = 'inline-block';
                    icon.style.color = '#62D37D';
                }

                // Add background color to the category - using the 5% opacity from Figma
                // activeItem.style.backgroundColor = 'rgba(98, 211, 125, 0.05)';
            }
        }


        // Smooth scroll to section when clicking sidebar links
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                const targetId = this.getAttribute('href').substring(1); // Remove the # from the href
                const targetSection = document.getElementById(targetId);

                if (targetSection) {
                    // Calculate position accounting for sticky header
                    // const stickyheaderHeight = stickyHeader ? stickyHeader.offsetHeight : 0;
                    const hHeader = header ? header.offsetHeight : 0;
                    const hEdBanner = edBanner ? edBanner.offsetHeight : 0;

                    const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset - hHeader - hEdBanner - 50;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });

                    // Update active class
                    setActiveSidebarItem(targetId);
                }
            });
        });


        // Function to get the current visible section
        function getCurrentSection() {
            // Get current scroll position with offset for header

            const scrollPosition = window.scrollY + sidebarHeight;

            let currentSection = null;

            // Loop through all sections to find the one we're currently viewing
            sections.forEach(section => {
                // Get the section's position data
                const sectionTop = section.getBoundingClientRect().top + window.scrollY;

                const sectionBottom = sectionTop + section.offsetHeight;

                // If our current scroll position is within this section
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    currentSection = section;
                }
            });

            // If we're at the very top of the page, use the first section
            if (window.scrollY < 200) {
                currentSection = sections[0];
            }

            // If we're at the bottom of the page, use the last section
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 200) {
                currentSection = sections[sections.length - 1];
            }

            // If no section was found in the viewport, use the first one as default
            if (!currentSection && sections.length > 0) {
                currentSection = sections[0];
            }

            return currentSection;
        }

        // Update active sidebar link on scroll
        function updateActiveSection() {
            const currentSection = getCurrentSection();

            if (currentSection) {
                const sectionId = currentSection.id;
                // Only update if we have a valid section ID
                if (sectionId) {
                    setActiveSidebarItem(sectionId);
                }
            }
        }

        // Make sure the first item is active on page load if no hash is present
        setTimeout(function() {
            const hash = window.location.hash.substring(1);
            if (hash) {
                setActiveSidebarItem(hash);
            } else {
                updateActiveSection();
                // If no section is active yet, activate the first one
                if (!document.querySelector('.sidebar-category.active') && sidebarCategories.length > 0) {
                    sidebarCategories[0].classList.add('active');
                }
            }
        }, 100);

        // Additional checks to ensure active state is set
        setTimeout(updateActiveSection, 500);
        // setTimeout(updateActiveSection, 1000);

        // Add debouncing to scroll event for better performance
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(function() {
                updateActiveSection();
            }, 50); // Small delay for better performance
        });

        // Also update on window resize as section positions may change
        window.addEventListener('resize', function() {
            updateActiveSection();
        });
    });

    // Mobile sidebar toggle
    const mobileToggle = document.createElement('button');
    mobileToggle.classList.add('mobile-sidebar-toggle');
    mobileToggle.innerHTML = 'Categories <span>▼</span>';

    const comparisonContainer = document.querySelector('.comparison-content');
    comparisonContainer.insertBefore(mobileToggle, comparisonContainer.firstChild);

    // comparison-sidebar
    mobileToggle.addEventListener('click', function() {
        const sidebar = document.querySelector('.sidebar-inner');
        sidebar.classList.toggle('mobile-visible');
        this.classList.toggle('active');

        if (this.classList.contains('active')) {
            this.innerHTML = 'Categories <span>▲</span>';
        } else {
            this.innerHTML = 'Categories <span>▼</span>';
        }
    });
</script>