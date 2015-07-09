<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="inner">
			<div class="page">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="post-body">
					<?php the_content(__('<span>&bull;&bull;&bull;</span>', 'kolumntheme')); ?>
				</div><!-- post-body -->
			</div><!-- / page -->
		</div><!-- / inner -->
		<?php comments_template(); ?>

	<?php endwhile; ?>

	<?php else: ?>
		<div class="inner">
			<article class="post">
				<h1><?php _e( 'Sorry, nothing to display.', 'kolumntheme' ); ?></h1>
			</article>
		</div><!-- / inner -->
	<?php endif; ?>

<?php get_footer(); ?>