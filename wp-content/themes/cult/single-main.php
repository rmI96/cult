<?php
/*
 * Template Name Posts: template main
 */
?>

<?php get_header(); ?>

<div class="container-cs">

	<?php
	while ( have_posts() ) :
	the_post();
	?>

	<!-- CONTENT -->
    <div class="sp-pt-60 sp-pb-60 sp-pt-lg-40 sp-pb-lg-40">
        <?php get_template_part( 'template-parts/content/content-single' ); ?>
    </div>

    <div class="sp-pb-60 sp-pb-lg-40">
    	<div class="block-98723">
    		<div class="block-98723__title h3 fw-bold sp-mb-20"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-009.png" alt="icon"></span><span>See also</span></div>
    		<ul class="block-98723__list">
    			<li><a href="#">Pixels to Cm</a></li>
    			<li><a href="#">Pixels to Mm</a></li>
    			<li><a href="#">Pixels to Inches</a></li>
    			<li><a href="#">Pixels to Twip</a></li>
    			<li><a href="#">Pixels to Cm</a></li>
    			<li><a href="#">Pixels to Cm</a></li>
    			<li><a href="#">Pixels to Cm</a></li>
    			<li><a href="#">Pixels to Cm</a></li>
    			<li><a href="#">Pixels to Cm</a></li>
    			<li><a href="#">Pixels to Cm</a></li>
    		</ul>

    	</div>
    </div>

	<?php if ( comments_open() || get_comments_number() ) { ?>
		<!-- COMMENTS -->
		<div class="comments-container__wpDiscuz">
        	<?php comments_template() ?>
    	</div>
 	<?php } ?>
	<?php endwhile; ?>
    
</div>

<?php get_footer(); ?>
