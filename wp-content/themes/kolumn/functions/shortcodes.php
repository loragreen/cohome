<?php

function shortcode_pulled( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'align' => 'right'
    ), $atts ) );
    return '<div class="pulled '.$align.'"><p>'.$content.'</p></div>';
}
function shortcode_infobox( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'color' => 'accent'
    ), $atts ) );
    return '<div class="infobox '.$color.'"><p>'.$content.'</p></div>';
}
function shortcode_btn( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'color' => 'accent',
        'url' => 'http://google.com',
        'size' => 'regular'
    ), $atts ) );
    return '<a href="'.$url.'" class="btn btn-'.$color.' btn-'.$size.'">'.$content.'</a>';
}
function register_shortcodes(){
   add_shortcode('pulled', 'shortcode_pulled');
   add_shortcode('infobox', 'shortcode_infobox');
   add_shortcode('btn', 'shortcode_btn');
}


function extend_tinymce() {
    global $typenow;
    if ( ! in_array( $typenow, array( 'post', 'page' ) ) ) {
        return;
    }

    add_filter( 'mce_external_plugins', 'add_plugin' );
    add_filter( 'mce_buttons', 'add_buttons' );
}
function add_plugin( $plugin_array ) {
   $plugin_array['buttons'] = get_template_directory_uri() . '/functions/shortcodes.js';
   return $plugin_array;
}
function add_buttons( $buttons ) {
    array_push( $buttons, 'pulled' );
    array_push( $buttons, 'infobox' );
    array_push( $buttons, 'btn' );
    return $buttons;
}
function add_css() {
    wp_enqueue_style('symple_shortcodes-tc', get_template_directory_uri().'/functions/admin.css');
}