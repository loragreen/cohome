<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(get_the_title()) : ?>
		<?php if ( is_home() ) { $tag = 'h2'; } else { $tag = 'h1'; } ?>
		<header>
			<?php echo '<'.$tag.'>'; ?><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><?php echo '</'.$tag.'>'; ?>
		</header>
	<?php endif; ?>
	<div class="post-body image">
		<?php the_content(__('Read more...', 'kolumntheme')); ?>
	</div><!-- post-body -->
	<?php get_template_part('partials/post_footer'); ?>
</article><!-- / post -->
<?php if(!is_single()) : ?><hr><?php endif; ?>