<?php get_header(); ?>
<main>
    <div class="articles">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- WP sucht nach "content-single.php" mit automatischer Fallback lösung auf content.php -->
        <?php get_template_part('template_parts/content', 'single'); ?>
        <?php endwhile; else : ?>
        <!-- WP sucht nach "content-error.php" mit automatischer Fallback lösung auf content.php -->
        <?php get_template_part('template_parts/content', 'error'); ?>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
