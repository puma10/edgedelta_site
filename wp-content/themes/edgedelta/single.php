<?php get_header(); ?>

<?php $category = get_the_category() ?>

<?php if ($category && $category[0]->slug === 'videos' || $category && $category[0]->slug === 'demos') : ?>

    <?php get_template_part('templates/blog/categories/posts/video') ?>

<?php elseif ($category && $category[0]->slug === 'events') : ?>

    <?php get_template_part('templates/blog/categories/posts/events') ?>

<?php elseif ($category && $category[0]->slug === 'resources') : ?>

    <?php get_template_part('templates/blog/categories/posts/resources') ?>

<?php elseif ($category && $category[0]->slug === 'case-studies') : ?>

    <?php get_template_part('templates/blog/categories/posts/case-studies') ?>    

<?php elseif ($category && $category[0]->slug === 'careers') : ?>

    <?php get_template_part('templates/blog/categories/posts/careers') ?>  

<?php else : ?>

    <?php get_template_part('templates/blog/categories/posts/blog') ?>

<?php endif ?>

<?php get_footer(); ?>