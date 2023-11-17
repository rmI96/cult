<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>

<div class="banner">
	<div class="banner-inner">

		<div class="wr-hd">
			<div class='move-objects' data-scalar-x="4" data-scalar-y="3">
				<div class="layer bg style-2" data-depth="0.8" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-08.jpg')"></div>
			</div>
		</div>

		<div class="container-cs">
			<div class="text-center banner-text small">
				<div class="width-limited">

					<div class="h1 color-white">
						<span class="fw-bold">ONLINE</span><br> <span class="fw-light">CALCULATOR</span>
					</div>

				</div>
			</div>
		</div>

		<a href="#first-section" class="btn btn-scrolling on-scroll"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mouse.svg" alt=""></span></a>
	</div>
</div>

<div class="container-cs">
    <div class="sp-pt-60 sp-pb-60 sp-pt-lg-40 sp-pb-lg-40" id="first-section">
        <div class="h2 sp-mb-20 sp-mb-lg-15"><?php the_field('home_title'); ?></div>
        <div class="text">
            <?php the_field('home_content'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
