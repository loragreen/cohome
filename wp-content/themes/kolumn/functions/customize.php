<?php 

function kolumn_customizer( $wp_customize ) {
    class Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
     
        public function render_content() {
            ?>
                <label>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                </label>
            <?php
        }
    }

    $wp_customize->remove_section( 'nav' );
    $wp_customize->remove_section( 'static_front_page' );







    $wp_customize->add_section('style', array(
        'title' => __( 'Style', 'kolumntheme' ),
        'priority' => 2,
        'capability' => 'edit_theme_options'
    ));

    /* ACCENT COLOR */
    $wp_customize->add_setting('accent_color', array('default' => '#4A90E2'));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
        'label' => __( 'Accent color (links etc.)', 'kolumntheme' ),
        'section' => 'style',
        'settings' => 'accent_color'
    )));
    
    /* BG IMAGE */
    $wp_customize->add_setting('left_bg', array('default' => get_template_directory_uri().'/images/bg-about.jpg'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'left_bg', array(
        'label' => __( 'Background image (big size, taller than wide please)', 'kolumntheme' ),
        'section' => 'style',
        'settings' => 'left_bg'
    )));

    /* BG IMAGE SPECIFIC PER POST */
    $wp_customize->add_setting('left_bg_post', array('default' => true));
    $wp_customize->add_control('left_bg_post', array(
        'label' => __( 'Use post thumbnail as background (if possible; try to upload as big pictures and as beauty as possible; also taller than wide :))', 'kolumntheme' ),
        'section' => 'style',
        'type' => 'checkbox'
    ));

    /* BG COLOR */
    $wp_customize->add_setting('left_bg_color', array('default' => '#444444'));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'left_bg_color', array(
        'label' => __( 'Background color if no image', 'kolumntheme' ),
        'section' => 'style',
        'settings' => 'left_bg_color'
    )));

    /* AVATAR IMAGE */
    $wp_customize->add_setting('avatar', array('default' => get_template_directory_uri().'/images/default-avatar.png'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avatar', array(
        'label' => __( 'Avatar image', 'kolumntheme' ),
        'section' => 'style',
        'settings' => 'avatar'
    )));












    $wp_customize->add_section('options', array(
        'title' => __( 'Options', 'kolumntheme' ),
        'priority' => 3,
        'capability' => 'edit_theme_options'
    ));

    /* SEARCH */
    $wp_customize->add_setting('search', array('default' => true));
    $wp_customize->add_control('search', array(
        'label' => __( 'Show search', 'kolumntheme' ),
        'section' => 'options',
        'type' => 'checkbox'
    ));

    /* RELATIVE DATE */
    $wp_customize->add_setting('relative_date', array('default' => true));
    $wp_customize->add_control('relative_date', array(
        'label' => __( 'Use relative dates ("n days ago")', 'kolumntheme' ),
        'section' => 'options',
        'type' => 'checkbox'
    ));

    /* NEXT PREV LINKS ON POST */
    $wp_customize->add_setting('prev_next', array('default' => true));
    $wp_customize->add_control('prev_next', array(
        'label' => __( 'Show "Prev / Next" links on Post', 'kolumntheme' ),
        'section' => 'options',
        'type' => 'checkbox'
    ));

    /* SOCIAL SHARE LINK ON POST */
    $wp_customize->add_setting('share', array('default' => true));
    $wp_customize->add_control('share', array(
        'label' => __( 'Show Like & Tweet on Post', 'kolumntheme' ),
        'section' => 'options',
        'type' => 'checkbox'
    ));

    /* GOOGLE ANALYTICS */
    $wp_customize->add_setting('google_analytics', array('default' => ''));
    $wp_customize->add_control('google_analytics', array(
        'label' => __( 'Google Analytics UID', 'kolumntheme' ),
        'section' => 'options',
        'type' => 'text'
    ));

    /* DISQUS */
    $wp_customize->add_setting('disqus', array('default' => ''));
    $wp_customize->add_control('disqus', array(
        'label' => __( 'Use Disqus instead of traditional comments (enter your Disqus Shortname)', 'kolumntheme' ),
        'section' => 'options',
        'type' => 'text'
    ));






    $wp_customize->add_section('social', array(
        'title' => __( 'Social Networks', 'kolumntheme' ),
        'priority' => 4,
        'capability' => 'edit_theme_options'
    ));

    /* FACEBOOK */
    $wp_customize->add_setting('facebook', array('default' => ''));
    $wp_customize->add_control('facebook', array(
        'label' => __( 'Facebook profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* TWITTER */
    $wp_customize->add_setting('twitter', array('default' => ''));
    $wp_customize->add_control('twitter', array(
        'label' => __( 'Twitter profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* INSTAGRAM */
    $wp_customize->add_setting('instagram', array('default' => ''));
    $wp_customize->add_control('instagram', array(
        'label' => __( 'Instagram profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* BEHANCE */
    $wp_customize->add_setting('behance', array('default' => ''));
    $wp_customize->add_control('behance', array(
        'label' => __( 'Behance profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* GOOGLE+ */
    $wp_customize->add_setting('googleplus', array('default' => ''));
    $wp_customize->add_control('googleplus', array(
        'label' => __( 'Google+ profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* PINTEREST */
    $wp_customize->add_setting('pinterest', array('default' => ''));
    $wp_customize->add_control('pinterest', array(
        'label' => __( 'Pinterest profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* VIMEO */
    $wp_customize->add_setting('vimeo', array('default' => ''));
    $wp_customize->add_control('vimeo', array(
        'label' => __( 'Vimeo profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* YOUTUBE */
    $wp_customize->add_setting('youtube', array('default' => ''));
    $wp_customize->add_control('youtube', array(
        'label' => __( 'YouTube channel/profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* DRIBBBLE */
    $wp_customize->add_setting('dribbble', array('default' => ''));
    $wp_customize->add_control('dribbble', array(
        'label' => __( 'Dribbble profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* FLICKR */
    $wp_customize->add_setting('flickr', array('default' => ''));
    $wp_customize->add_control('flickr', array(
        'label' => __( 'Flickr profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* GITHUB */
    $wp_customize->add_setting('github', array('default' => ''));
    $wp_customize->add_control('github', array(
        'label' => __( 'Github profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* LINKEDIN */
    $wp_customize->add_setting('linkedin', array('default' => ''));
    $wp_customize->add_control('linkedin', array(
        'label' => __( 'LinkedIn profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* EMAIL */
    $wp_customize->add_setting('email', array('default' => ''));
    $wp_customize->add_control('email', array(
        'label' => __( 'Email address', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* SKYPE */
    $wp_customize->add_setting('skype', array('default' => ''));
    $wp_customize->add_control('skype', array(
        'label' => __( 'Skype ID', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* SOUNDCLOUD */
    $wp_customize->add_setting('soundcloud', array('default' => ''));
    $wp_customize->add_control('soundcloud', array(
        'label' => __( 'SoundCloud profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* TUMBLR */
    $wp_customize->add_setting('tumblr', array('default' => ''));
    $wp_customize->add_control('tumblr', array(
        'label' => __( 'Tumblr URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* REDDIT */
    $wp_customize->add_setting('reddit', array('default' => ''));
    $wp_customize->add_control('reddit', array(
        'label' => __( 'Reddit profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));

    /* DEVIANTART */
    $wp_customize->add_setting('deviantart', array('default' => ''));
    $wp_customize->add_control('deviantart', array(
        'label' => __( 'DeviantArt profile URL', 'kolumntheme' ),
        'section' => 'social',
        'type' => 'text'
    ));



    if ( $wp_customize->is_preview() && ! is_admin() ) {
        add_action( 'wp_footer', 'example_customize_preview', 21);
    }

}
add_action( 'customize_register', 'kolumn_customizer' );


function example_customize_preview() {
    ?>
    <script type="text/javascript">
        ( function( $ ) {
            wp.customize('accent_color',function( value ) {
                value.bind(function(to) {
                    <?php autoCompileLess(); ?>
                });
            });
        } )( jQuery )
    </script>
    <?php
} 

