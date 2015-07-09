<?php

include "functions/customize.php";
include "functions/less.php";
include "functions/comments.php";
include "functions/galleries.php";
include "functions/shortcodes.php";


add_filter( 'get_search_form', 'search_form' );
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'link', 'quote', 'video' ) );
add_theme_support( 'post-thumbnails' );
add_action( 'get_header', 'enable_threaded_comments' );
add_filter( 'comment_form_default_fields', 'custom_reply_fields' );
add_filter( 'comment_form_field_comment', 'custom_reply_textarea' );
add_filter( 'the_content', 'my_quote_content' );
add_filter('post_gallery', 'gallery_preview', 10, 2);
add_action( 'init', 'register_shortcodes');
add_action( 'admin_enqueue_scripts', 'add_css' );
add_action( 'admin_head', 'extend_tinymce' );
add_filter( 'get_the_date', 'human_get_the_date' );
add_filter( 'get_comment_date', 'human_get_the_date' );
add_action( 'init', 'register_menus' );
add_filter('image_send_to_editor', 'add_strip_class_to_image_links', 10, 3);

add_image_size( 'sidebar_bg', 600, 1400, true );
add_image_size( 'post_thumbnail', 600, 400, true );
add_image_size( 'facebook_thumbnail', 200, 200, true );

add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
load_theme_textdomain( 'kolumntheme', get_template_directory().'/languages' );





function search_form( $form ) {
    $form = '<form role="search" method="get" id="search" action="' . home_url( '/' ) . '" ><input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search' ) . '"></form>';
    return $form;
}



function posts_link_attributes() {
    return 'class="btn btn-bordered"';
}


function show_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}


function get_the_url() {
    if ( has_post_format( 'link' ) ) {
        if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
            return true;
    }

    return esc_url_raw( $matches[1] );
}

function my_quote_content( $content ) {
    if ( has_post_format( 'quote' ) ) {
        preg_match( '/<blockquote.*?>/', $content, $matches );
        if ( empty( $matches ) )
            $content = "<blockquote>{$content}</blockquote>";
    }

    return $content;
}

if ( ! isset( $content_width ) )
    $content_width = 600;


function js_load() {
    wp_register_script( 'finalTilesGallery', get_template_directory_uri() . '/js/jquery.finalTilesGallery.js', array( 'jquery' ) );
    wp_register_script( 'strip', get_template_directory_uri() . '/js/strip.pkgd.min.js', array( 'jquery' ) );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
    
    wp_enqueue_script( array('finalTilesGallery', 'strip', 'main') );
}
add_action( 'wp_enqueue_scripts', 'js_load', 5 );


function register_menus() {
  register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'kolumntheme' ),
        'footer' => __( 'Footer Menu', 'kolumntheme' )
    )
  );
}

function human_get_the_date($date) {
    return human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ' . __('ago', 'kolumntheme');
}
