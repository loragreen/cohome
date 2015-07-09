<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<script src="https://cdn.optimizely.com/js/2413281348.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php 
			wp_title( '|', true, 'right' ); bloginfo( 'name' ); 
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
	?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if( is_singular() ){ ?>
	    <meta property="og:title" content="<?php the_title() ?>" />
	    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
	    <meta property="og:url" content="<?php the_permalink() ?>" />
	    <meta property="og:type" content="article" />
	    <meta property="og:locale" content="en_US" />
	    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>"/>
	    <?php 	        
	        global $post;
	        $src  = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ) , 'facebook_thumbnail' );
	        
	        if(strlen($src[0])){
	            echo '<meta property="og:image" content="'.$src[0].'"/>'; 
	            echo '<link rel="image_src" href="'.$src[0].'" />';               
	        }
	        
	        wp_reset_query();   
	    } else { 
			$bg = get_theme_mod('left_bg', esc_url(get_template_directory_uri() . '/images/bg-about.jpg')); 
		?>
	        <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>"/>
	        <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>"/>
	        <meta property="og:url" content="<?php echo home_url() ?>/"/>
	        <meta property="og:type" content="blog"/>
	        <meta property="og:locale" content="en_US"/>
	        <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>"/>
	        <meta property="og:image" content="<?php echo $bg; ?>"/> 
	<?php } ?>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:600,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/main.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!-- Images loaded -->
	<script type="text/javascript" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/scripts/imagesloaded.pkgd.js"></script>

	<!-- Isotope -->
	<script type="text/javascript" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/scripts/isotope.min.js"></script>
	
	<!-- Wufoo -->
		<script type="text/javascript" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/scripts/wufoo.js"></script>

	<!-- Segment -->
	<script type="text/javascript">
	!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
	analytics.load("ZwKoAQP9Zp4dIPeIfd2ERJQjcLIZAgdC");
	analytics.page()
	}}();
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(get_theme_mod('google_analytics')) : ?>
	<!-- google analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', '<?php echo get_theme_mod("google_analytics") ?>', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- / google analytics -->
<?php endif; ?>

<?php if(is_single()) : ?>
	<!-- facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
	<!-- / facebook -->

	<!-- twitter -->
	<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
	<!-- / twitter -->
<?php endif; ?>

<div id="main">
	<input type="checkbox" id="nav-trigger">
	
	<?php get_sidebar(); ?>

	<section id="content" class="right-column">