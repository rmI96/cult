<?php
/**
 * The template for displaying archive pages
 */

get_header();

$description = get_the_archive_description();
$title = get_the_archive_title();
?>

<?php if ( have_posts() ) : ?>

<div class="container-cs">

    <div class="breadcrumbs">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
    </div>

    <!-- CONTENT -->
    <div class="sp-pt-40 sp-pb-60 sp-pb-lg-40">
        <?php if ( $title ) : ?>
            <h1 class="h2 sp-mb-20 sp-mb-lg-15"><?php echo wp_kses_post( wpautop( $title ) ); ?></h1>
        <?php endif; ?>
        <?php if ( $description ) : ?>
            <div class="text sp-mb-30"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
        <?php endif; ?>

        <div class="block-98723">
            <ul class="block-98723__list type2">
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
                <?php endwhile; ?>
            </ul>
        </div>


    </div>

</div>


<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
