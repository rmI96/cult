<?php
/*
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header alignwide sp-mb-20">
		<?php the_title( '<h1 class="entry-title h2">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content text">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
