<?php get_header(); ?>

		<div class="inner">
			<div class="page">
				<header>
					<span class="e404"><?php _e('404.', 'kolumntheme'); ?></span>
					<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'kolumntheme' ); ?></h1>
				</header>
				<div class="post-body">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'kolumntheme' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- post-body -->
			</div><!-- / page -->
		</div><!-- / inner -->

<?php get_footer(); ?>