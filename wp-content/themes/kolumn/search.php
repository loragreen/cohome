<?php get_header(); ?>
<div class="inner">
	<header class="fixed-header">
		<h1><?php _e('Search results for: ', 'kolumntheme') ?><em><?php echo get_search_query(); ?></em></h1>
	</header>
	<?php get_template_part('loop'); ?>
	<?php get_template_part('pagination'); ?>
</div><!-- / inner -->
<?php get_footer(); ?>