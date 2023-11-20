<?php
/**
The template for displaying 404 pages (not found)
*/
get_header();
?>
    <div class="container-cs">
        <!-- CONTENT -->
        <div class="sp-pt-60 sp-pb-60 sp-pt-lg-40 sp-pb-lg-40 text-center">
            <div class="h1 sp-mb-20 sp-mb-lg-15">404</div>
            <div class="h2 sp-mb-20 sp-mb-lg-15"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></div>
            <div class="text sp-mb-40 sp-mb-lg-20">
                <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?>
            </div>
            <?php get_search_form(); ?>
        </div>
    </div>
<?php get_footer();
