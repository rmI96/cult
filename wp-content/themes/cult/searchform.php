<?php
/**
The searchform.php template.
*/

$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );
$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<div class="row justify-content-center text-left">
    <div class="col-lg-12">
        <div class="block-98723">
            <div class="block-98723__title h3 fw-bold sp-mb-20"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-014.png" alt="icon"></span><span><?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?></span></div>
            <form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field input sp-mb-20" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e( 'Search&hellip;', 'twentytwentyone' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?>" />
                <input type="submit" class="btn btn-primary search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
            </form>
        </div>
    </div>
</div>
