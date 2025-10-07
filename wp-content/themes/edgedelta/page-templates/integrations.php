<?php

/**
 * Template Name: Integrations
 */

get_header();
?>
<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-xlarge z-index-2">
                <div class="padding-top padding-medium">
                    <div class="max-width-large align-center text-align-center z-index-2">
                        <?php if (get_field('title')) :  ?>
                            <div class="padding-bottom padding-custom1">
                                <h1 class="heading-style-h1 no-graident"><?php the_field('title') ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('description')) :  ?>
                            <div class="padding-bottom padding-large">
                                <div class="text-size-large text-color-neutral-lighter"><?php the_field('description') ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="integrations_hero_images">
                    <div class="integrations_hero-img-wrapper is-1">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Frame-13967.svg" alt="bg">
                    </div>
                    <div class="integrations_hero-img-wrapper is-3">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Frame-13969.svg" alt="bg">
                    </div>
                    <div class="integrations_hero-img-wrapper is-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Frame-13968.svg" alt="bg">
                    </div>
                    <div class="integrations_hero-img-wrapper is-4">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Frame-13971.svg" alt="bg">
                    </div>
                    <div class="integrations_hero-img-wrapper is-5">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Frame-13970.svg" alt="bg">
                    </div>
                    <div class="integrations_hero-img-wrapper is-6">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Frame-13972.svg" alt="bg">
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

<div class="section_integrations is-relative">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2">
                <div class="form-block w-form">
                    <div id="email-form" class="integrations_grid">
                        <div class="integrations_filters">
                            <div class="padding-bottom padding-small">
                                <input class="fs-search_field-1 w-input" maxlength="256" name="field" data-name="Field" aria-label="search bar" placeholder="Search..." type="text" id="integrations_search" required="">
                            </div>
                            <div class="text-size-medium text-color-neutral-lighter">Categories</div>
                            <div role="group" aria-label="categories" class="fs-checkbox_group w-dyn-list">
                                <div role="list" class="fs-checkbox_row w-dyn-items">
                                    <?php
                                    $filter_cat = acf_get_field('categories');
                                    if ($filter_cat) :
                                        $choices = $filter_cat['choices'];
                                        if (!empty($choices)) :
                                            foreach ($choices as $key => $value) : ?>
                                                <?php $key = strtolower(str_replace(' ', '_', $key)); ?>
                                                <div role="listitem" class="w-dyn-item">
                                                    <label class="w-checkbox fs-checkbox_field-10">
                                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom fs-checkbox_button-10"></div>
                                                        <input type="checkbox" name="Checkbox-10-B-2" id="<?php echo $key ?>" data-name="<?php echo $key ?>" style="opacity:0;position:absolute;z-index:-1">
                                                        <span class="fs-checkbox_label-10 w-form-label" for="<?php echo $key ?>"><?php echo $value ?></span>
                                                    </label>
                                                </div>
                                    <?php
                                            endforeach;
                                        endif;
                                    endif
                                    ?> 
                                </div>
                            </div>
                        </div>

                        <div class="w-dyn-list">
                            <?php if (have_rows('integrations')) : ?>
                                <div role="list" class="integrations_list w-dyn-items">
                                    <?php while (have_rows('integrations')) : the_row(); ?>
                                        <?php $cat_integrations = get_sub_field('categories') ?>
                                        <?php $cat_id = strtolower(str_replace(' ', '_', $cat_integrations['value'])); ?>

                                        <div role="listitem" class="integrations_item w-dyn-item" data_id="<?php echo $cat_id ?>">
                                            <?php $img_integrations = get_sub_field('img') ?>

                                            <?php if ($img_integrations) : ?>
                                                <img src="<?php echo $img_integrations['sizes']['thumbnail'] ?>" alt="<?php the_sub_field('title') ?>" class="integrations_item-logo">
                                            <?php endif ?>

                                            <div>
                                                <?php if (get_sub_field('title')) : ?>
                                                    <div class="padding-bottom padding-xxsmall">
                                                        <div fs-cmsfilter-field="name" class="text-size-xlarge text-weight-semibold"><?php the_sub_field('title') ?></div>
                                                    </div>
                                                <?php endif ?>
                                                <?php if (get_sub_field('desciption')) : ?>
                                                    <div class="text-size-medium text-color-neutral-lighter"><?php the_sub_field('desciption') ?></div>
                                                <?php endif ?>
                                                
                                                <div class="integration-buttons-wrapper">
                                                    <?php if (get_sub_field('link_to_blog')) : ?>
                                                        <a href="<?php the_sub_field('link_to_blog') ?>" class="integration-button-transparent" target="_blank" rel="noopener">Learn more</a>
                                                    <?php endif ?>
                                                    <?php if (get_sub_field('link_to_docs')) : ?>
                                                        <a href="<?php the_sub_field('link_to_docs') ?>" class="integration-docs-link" target="_blank" rel="noopener">Read blog <span class="arrow-icon">→</span></a>
                                                    <?php endif ?>
                                                </div>
                                            </div>

                                            <div class="integrations_category">
                                                <div><?php echo $cat_integrations['label'] ?></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <div class="integrations_empty" style="display: none;">
                                <div class="text-size-xlarge text-weight-medium">There are no items with this filter. Please try again.</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section_cta-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                <div class="section_cta-gradient"></div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('integrations_search');
        const checkboxes = document.querySelectorAll('.fs-checkbox_field-10 input[type="checkbox"]');
        const items = document.querySelectorAll('.integrations_item');
        const emptyBlock = document.querySelector('.integrations_empty');
        function filterItems() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedCategories = Array.from(checkboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.getAttribute('id'));
            let visibleCount = 0;
            items.forEach(item => {
                const itemCategory = item.getAttribute('data_id').toLowerCase();
                const itemText = item.textContent.toLowerCase();

                const matchesSearch = searchTerm === '' || itemText.includes(searchTerm);
                const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(itemCategory);

                if (matchesSearch && matchesCategory) {
                    item.style.display = 'flex';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            if (visibleCount === 0) {
                emptyBlock.style.display = 'block';
            } else {
                emptyBlock.style.display = 'none';
            }
        }
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', (e) => {
                const label = checkbox.closest('.fs-checkbox_field-10');
                const inputBox = label.querySelector('.w-checkbox-input');

                if (checkbox.checked) {
                    label.classList.add('fs-cmsfilter_active');
                    inputBox.classList.add('w--redirected-checked');
                } else {
                    label.classList.remove('fs-cmsfilter_active');
                    inputBox.classList.remove('w--redirected-checked');
                }

                filterItems();
            });
        });
        searchInput.addEventListener('input', filterItems);
        filterItems();
    });
</script>

<?php get_footer(); ?>