<?php if(is_single()) : ?>
	<?php if(get_theme_mod('prev_next', true)) : ?>
		<nav class="prev-next">
			<?php
				$prev_post = get_previous_post();
				if($prev_post) {
				   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
				   echo '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="btn btn-bordered">' . __('Previous Post', 'kolumntheme') . '</a>';
	            }

				$next_post = get_next_post();
				if($next_post) {
				   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
				   echo '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="btn btn-bordered">' . __('Next Post', 'kolumntheme') . '</a>';
	            }
			?>
		</nav><!-- / prev-next -->
	<?php endif; ?>
<?php else : ?>
	<?php if (show_posts_nav()) : ?>
		 <nav class="prev-next">
		 	<?php previous_posts_link(__('Previous Page', 'kolumntheme')); ?><?php next_posts_link(__('Next Page', 'kolumntheme')); ?>
		 </nav><!-- / prev-next -->
	<?php endif; ?>
<?php endif; ?>