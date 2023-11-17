<?php
/**
 * Template part for displaying post archives and search results
 */
?>

<li class="item-<?php the_ID(); ?>">
    <?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>

    <div class="block-98723__list__content">
        <?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
    </div>

</li>
