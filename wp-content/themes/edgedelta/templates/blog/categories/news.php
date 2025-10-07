<div role="listitem" class="blog1_item w-dyn-item">
    <?php $news_link = get_field('news_link') ?>


    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php echo $news_link ?>" class="blog1_image-link w-inline-block" target="_blank">
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


    <a href="<?php echo $news_link ?>" class="blog1_title-link w-inline-block">
        <h3 fs-cmsfilter-field="name" class="heading-style-h6-s"><?php the_title(); ?></h3>
    </a>
    <div class="blog1_date-wrapper text-color-neutral-lighter">
        <?php
        $post_date = get_the_date('M j, Y');
        $reading_time = get_reading_time(get_the_ID());
        ?>
        <div><?php echo esc_html($post_date); ?></div>
    </div>
</div>