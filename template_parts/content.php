<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>Von <?php the_author(); ?> am <?php the_time('d.m.Y'); ?> veröffentlicht.</p>
    <?php the_content(); ?>
</article>