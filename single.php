<?php get_header(); ?>
<main>
    <div class="articles">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template_parts/content'); ?>
        <?php endwhile; else : ?>
        <!-- WP sucht nach "content-error.php" mit automatischer Fallback lösung auf content.php -->
        <?php get_template_part('template_parts/content', 'error'); ?>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
