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
                        <?php the_field('home_title_of__banner'); ?>
					</div>

				</div>
			</div>
		</div>

		<a href="#first-section" class="btn btn-scrolling on-scroll"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mouse.svg" alt=""></span></a>
	</div>
</div>

<div class="container-cs">
    <div class="sp-pt-100 sp-pt-lg-40" id="first-section">
        <div class="block-98723">
            <div class="block-98723__title h3 fw-bold sp-mb-20"><span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-012.png" alt="icon"></span><span><?php the_field('home_title_of_catalog'); ?></span></div>
            <ul class="block-98723__list">
                <?php while( have_rows('home_catalog', ) ): the_row(); ?>
                    <li><a href="/category/<?php get_category_link( the_sub_field('url') ); ?>"><?php the_sub_field('name'); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="sp-pt-60 sp-pb-60 sp-pt-lg-40 sp-pb-lg-40">
        <div class="h2 sp-mb-20 sp-mb-lg-15"><?php the_field('home_title'); ?></div>
        <div class="text">
            <?php the_field('home_content'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
