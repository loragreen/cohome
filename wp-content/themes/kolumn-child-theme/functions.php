<?php // Opening PHP tag - nothing should be before this, not even whitespace

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Custom Function to Include
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

function global_variables( $variable ) {
  $global_variables = array (
      "facebook_group" => "https://www.facebook.com/groups/760907487298386/"
    );
  return $global_variables[$variable];
}

// Home sidebar
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Home Sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// Post format for restricted profiles
