<?php
/**
The searchform.php template.
*/

$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );
$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<div class="row justify-content-center text-left">
    <div class="col-lg-12">
        <div class="block-98723 style-43">
            <div class="block-98723__title h3 fw-bold sp-mb-20"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-014.png" alt="icon"></span><h2 class="in-text"><?php the_field('search_title', 'option'); ?></h2></div>
            <form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field input sp-mb-20" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php the_field('search_placeholder', 'option'); ?>" />
                <input type="submit" class="btn btn-primary search-submit" value="<?php the_field('search_text-of-button', 'option'); ?>" />
            </form>
        </div>
    </div>
</div>
