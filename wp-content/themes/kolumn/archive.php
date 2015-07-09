<?php get_header(); ?>
<div class="inner">
	<header class="fixed-header">
		<h1><?php single_cat_title( _e('Currently browsing: ', 'kolumntheme'), true ); ?></h1>
	</header>
	<?php get_template_part('loop'); ?>
	<?php get_template_part('pagination'); ?>
</div><!-- / inner -->
<?php get_footer(); ?>