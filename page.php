<?php get_header(); ?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- WP sucht nach "content-page.php" mit automatischer Fallback lösung auf content.php -->
    <?php get_template_part('template_parts/content', 'page'); ?>
    <?php endwhile; else : ?>
    <!-- WP sucht nach "content-error.php" mit automatischer Fallback lösung auf content.php -->
    <?php get_template_part('template_parts/content', 'error'); ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
