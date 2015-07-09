<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'kolumntheme' ); ?></h2>
	</article>
	<hr>

<?php endif; ?>