<?php
/**
 * Template Name: Code Analyzer
 */

get_header();

$subtitle = get_post_meta(get_the_ID(), 'subtitle', true);

?>

<div class="page-header">
    <h1><?php the_title(); ?></h1>
    <?php if ($subtitle): ?>
        <h2><?php echo esc_html($subtitle); ?></h2>
    <?php endif; ?>
</div>

<?php get_footer(); ?>