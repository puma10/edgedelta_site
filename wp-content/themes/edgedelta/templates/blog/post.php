<div role="listitem" class="blog1_item w-dyn-item">

    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="blog1_image-link w-inline-block">
            <div class="blog1_image-wrapper">
                <?php the_post_thumbnail(array(500, 500), array('class' => 'blog1_image')); ?>
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
        <?php
        $post_date = get_the_date('M j, Y');
        $reading_time = get_reading_time(get_the_ID());
        ?>
        <div><?php echo esc_html($post_date); ?></div>

        <?php $cat = get_queried_object(); ?>

        <?php if ($cat && $cat->slug === 'videos') : ?>
            <?php if (get_field('videos_duration')) : ?>
                <div class="blog1_text-divider">•</div>
                <div class="videos_duration">
                    <div class="icon-1x1-small w-embed"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6666 8.49992C14.6666 12.1799 11.68 15.1666 7.99998 15.1666C4.31998 15.1666 1.33332 12.1799 1.33332 8.49992C1.33332 4.81992 4.31998 1.83325 7.99998 1.83325C11.68 1.83325 14.6666 4.81992 14.6666 8.49992Z" stroke="#C0C3C1" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M10.4733 10.6198L8.40664 9.38647C8.04664 9.17314 7.7533 8.6598 7.7533 8.2398V5.50647" stroke="#C0C3C1" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div>
                    <div><?php the_field('videos_duration') ?></div>
                </div>
            <?php endif ?>
        <?php else : ?>
            <div class="blog1_text-divider">•</div>
            <div><?php echo esc_html($reading_time); ?> minutes</div>
        <?php endif ?>

    </div>
</div>