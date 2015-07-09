<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-body">
		<?php the_content(__('Read more...', 'kolumntheme')); ?>
		<?php if(get_the_title()) : ?>
			<footer class="quote-author">
				— <?php the_title(); ?>
			</footer>
		<?php endif; ?>
	</div><!-- / post-body -->
	<?php get_template_part('partials/post_footer'); ?>
</article><!-- / post -->
<?php if(!is_single()) : ?><hr><?php endif; ?>