<?php
/**
 * The template for displaying search results pages
*/
get_header();
?>
<div class="container-cs">
    <div class="sp-pt-60 sp-pb-60 sp-pt-lg-40 sp-pb-lg-40">
    <?php
        if ( have_posts() ) {
            ?>
            <div class="page-header">
                <h1 class="h1">
                    <?php
                    printf(
                        /* translators: %s: Search term. */
                        esc_html__( 'Results for "%s"', 'twentytwentyone' ),
                        '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
                    );
                    ?>
                </h1>
            </div>
            <div class="text sp-mb-20">
                <?php
                printf(
                    esc_html(
                        /* translators: %d: The number of search results. */
                        _n(
                            'We found %d result for your search.',
                            'We found %d results for your search.',
                            (int) $wp_query->found_posts,
                            'twentytwentyone'
                        )
                    ),
                    (int) $wp_query->found_posts
                );
                ?>
            </div>

            <div class="block-98723">
                <ul class="block-98723__list type2">
                    <?php while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
                    } ?>
                </ul>
            </div>

    <?php
        } else {
            get_template_part( 'template-parts/content/content-none' );
        }
    ?>
    </div>
</div>
<?php
get_footer();
