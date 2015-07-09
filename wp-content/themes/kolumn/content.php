<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(get_the_title()) : ?>
		<?php if ( is_singular() ) { $tag = 'h1'; } else { $tag = 'h2'; } ?>
		<header>
			<?php echo '<'.$tag.'>'; ?><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><?php echo '</'.$tag.'>'; ?>
			<?php if ( has_post_thumbnail() && !is_singular() ) : ?>
				<a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail('post_thumbnail'); ?></a>
			<?php endif; ?>
		</header>
	<?php endif; ?>
	<div class="post-body">
		<?php the_content(__('<span>&bull;&bull;&bull;</span>', 'kolumntheme')); ?>
	</div><!-- post-body -->
	<?php get_template_part('partials/post_footer'); ?>
</article><!-- / post -->
<?php if(!is_single()) : ?><hr><?php endif; ?>