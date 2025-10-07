<div role="listitem" class="blog1_item w-dyn-item">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="blog1_image-link w-inline-block">
            <div class="resrources_item">
                <?php the_post_thumbnail(array(500, 500), array('class' => 'resources_image')); ?>
            </div>
        </a>
    <?php endif ?>

    <?php
    $taxonomy = 'subcategory';
    $terms = get_the_terms(get_the_ID(), $taxonomy);
    ?>
    <?php if ($terms) : ?>
        <div class="blog1_category-link">
            <div class="text-size-medium">
                <?php foreach ($terms as $term) {
                    echo esc_html($term->name);
                } ?>

            </div>
        </div>
    <?php endif ?>

    <a href="<?php the_permalink(); ?>" class="blog1_title-link w-inline-block">
        <h3 fs-cmsfilter-field="name" class="heading-style-h6-s"><?php the_title(); ?></h3>
    </a>
    <div class="blog1_date-wrapper text-color-neutral-lighter">
        <div><?php echo custom_excerpt(); ?></div>
    </div>
</div>