<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="inner">
			<?php get_template_part( 'content', get_post_format() ); ?>
		</div><!-- / inner -->

		<?php comments_template(); ?>

	<?php endwhile; else: ?>
		<div class="inner">
			<article class="post">
				<h1><?php _e( 'Sorry, nothing to display.', 'kolumntheme' ); ?></h1>
			</article>
		</div><!-- / inner -->
	<?php endif; ?>

<?php get_footer(); ?>
