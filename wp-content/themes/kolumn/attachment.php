<?php get_header(); ?>
<div class="inner">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if(get_the_title()) : ?>
				<?php if ( is_home() ) { $tag = 'h2'; } else { $tag = 'h1'; } ?>
				<header>
					<?php echo '<'.$tag.'>'; ?><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><?php echo '</'.$tag.'>'; ?>
				</header>
			<?php endif; ?>
			<figure class="post-body image">
				<?php if (wp_attachment_is_image($post->id)) {
					$att_image = wp_get_attachment_image_src( $post->id, "full");
				?>
					<a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>">
						<img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" />
					</a>
				<?php } ?>
			</figure><!-- post-body -->
			<?php get_template_part('partials/post_footer'); ?>
		</article><!-- / post -->
		<?php if(!is_single()) : ?><hr><?php endif; ?>

	<?php endwhile; else: ?>
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'kolumntheme' ); ?></h2>
		</article>
		<hr>
	<?php endif; ?>
</div><!-- / inner -->
<?php get_footer(); ?>