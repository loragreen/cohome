<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php echo get_the_url(); ?>" rel="bookmark" target="_blank" title="<?php __('This will open external URL in new tab.', 'kolumntheme'); ?>"><?php the_title(); ?></a></h2>
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php echo get_the_url(); ?>" class="thumbnail"><?php the_post_thumbnail('post_thumbnail'); ?></a>
		<?php endif; ?>
	</header>
	<div class="post-body">
		<?php the_content(__('Read more...', 'kolumntheme')); ?>
		<p class="url"><a href="<?php echo get_the_url(); ?>" target="_blank"><?php echo get_the_url(); ?></a></p>
	</div><!-- post-body -->
	<?php get_template_part('partials/post_footer'); ?>
</article><!-- / post -->
<?php if(!is_single()) : ?><hr><?php endif; ?>