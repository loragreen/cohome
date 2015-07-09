<?php
	if(is_single() && get_theme_mod('left_bg_post', true) && has_post_thumbnail()) {
		$bg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'sidebar_bg' );
		$bg = $bg[0];
	} else {
		$bg = get_theme_mod('left_bg', esc_url(get_template_directory_uri() . '/images/bg-about.jpg'));
	}
?>

<section id="about" class="left-column" style="background-color: <?php echo get_theme_mod('left_bg_color', '#444444'); ?>; background-image: url(<?php echo $bg; ?>);">
	<label class="nav-trigger hidden-lg" for="nav-trigger">
		<span class="lines">
			<span class="line line-1"></span>
			<span class="line line-2"></span>
			<span class="line line-3"></span>
		</span>
	</label>
	<div class="cover">
		<?php if ( get_theme_mod('search', true) || has_nav_menu( 'primary' ) ) : ?>
			<div id="navigation">
				<div class="inner">
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<nav role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
						</nav>
					<?php endif; ?>
					<?php if ( get_theme_mod('search', true) ) : ?>
						<?php get_search_form(); ?>
					<?php endif; ?>
				</div><!-- / inner -->
			</div><!-- / navigation -->
		<?php endif; ?>

		<div id="details">
			<div class="profile">
				<?php if(get_theme_mod('avatar', true)) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod('avatar', esc_url(get_template_directory_uri() . '/images/default-avatar.png')); ?>" width="90" height="90" alt="" class="avatar"></a>
				<?php endif; ?>
				<?php if ( is_home() ) : ?><h1><?php else : ?><h2><?php endif ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a>
				<?php if ( is_home() ) : ?></h1><?php else : ?></h2><?php endif ?>

				<?php $description = html_entity_decode(get_bloginfo('description', 'display'));
					if ( $description || is_customize_preview() ) : ?>
						<p class="subtitle"><b><?php echo $description; ?></b></p>
					<?php endif;
				?>
			</div><!-- / profile -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Sidebar') ) ; ?>

			<?php get_template_part('partials/social_accounts'); ?>

			<p class="newsletter">
			<a href="#" data-toggle="modal" data-target="#newsletterModal" onclick="ga('send', 'event', 'sidebar newsletter button', 'click', location.toString());" data-member="">Newsletter</a>
			</p>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false ) ); ?>
				</nav><!-- / footer -->
			<?php endif; ?>
		</div><!-- / details -->
	</div><!-- / cover -->
</section><!-- / about left-column -->