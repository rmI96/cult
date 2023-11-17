<?php
/*
 * The template for displaying all single posts
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
    	<div class="sp-mb-30">
    		<?php get_template_part( 'template-parts/content/content-single' ); ?>
    	</div>
        <?php if( get_field('show_text_1') ) {?>
        	<div class="text sp-mb-20">
        		<?php the_field('post_text_1'); ?>
        	</div>
	    <?php } ?>
		<?php if( get_field('show_snippet_code') ) {?>
			<div>
				<?php the_field('post_snippet_code'); ?>
			</div>
	    <?php } ?>
	    <?php if( get_field('show_text_2') ) {?>
        	<div class="text sp-mt-30">
        		<?php the_field('post_text_2'); ?>
        	</div>
	    <?php } ?>
    </div>

    <?php if( have_rows('post_see_also', 'option') ): ?>
    	<div class="sp-pb-60 sp-pb-lg-40">
	    	<div class="block-98723">
	    		<div class="block-98723__title h3 fw-bold sp-mb-20"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-009.png" alt="icon"></span><span>See also</span></div>
	    		<ul class="block-98723__list">
	    			<?php while( have_rows('post_see_also', 'option') ): the_row(); ?>
		                <li><a href="<?php the_sub_field('post'); ?>"><?php the_sub_field('name'); ?></a></li>
		            <?php endwhile; ?>
	    		</ul>

	    	</div>
	    </div>
    <?php endif; ?>

    

	<?php if ( comments_open() || get_comments_number() ) { ?>
		<!-- COMMENTS -->
		<div class="comments-container__wpDiscuz">
        	<?php comments_template() ?>
    	</div>
 	<?php } ?>
	<?php endwhile; ?>
    
</div>

<?php get_footer(); ?>
