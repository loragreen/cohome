<?php 
function custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    $add_below = 'comment-footer';
?>
    <li <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <p><em class="red comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em></p>
            <?php endif; ?>
            <?php comment_text(); ?>
        </div><!-- / comment-body -->
        <footer id="comment-footer-<?php comment_ID() ?>">
            <span class="author">
                <?php if(get_comment_author_url()) : ?><a href="<?php comment_author_url(); ?>"><?php endif; ?>
                    <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 24 ); ?>
                    <?php comment_author(); ?>
                <?php if(get_comment_author_url()) : ?></a><?php endif; ?>
            </span><!-- / author -->
            <div class="right">
                <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'], 'after' => '<span>&bull;</span>' ) ) ); ?>
                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="date" title="<?php echo get_comment_time('M jS Y, g:i a' ); ?>"><?php if(get_theme_mod('relative_date', true)) { echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; } else { echo get_comment_time('M jS Y, g:i a'); } ?></a>
            </div>
        </footer>
<?php
}


function custom_reply_fields( $fields ) {
    $fields['author'] =
        '<p class="field"><label for="author">'.__( 'Author', 'kolumntheme' ).'</label><input id="author" name="author" type="text" value="" size="30" aria-required="true" placeholder="' . __( 'Author', 'kolumntheme' ) . '"/></p>';
    $fields['email'] =
        '<p class="field"><label for="email">'.__( 'Email address', 'kolumntheme' ).'</label><input id="email" name="email" type="email" value="" size="30" aria-required="true" placeholder="' . __( 'Email address', 'kolumntheme' ) . '"/></p>';
    $fields['url'] =
        '<p class="field"><label for="url">'.__( 'Website', 'kolumntheme' ).'</label><input id="url" name="url" type="url" value="" size="30" placeholder="' . __( 'Website', 'kolumntheme' ) . '" /></p>';
    return $fields;
}

function custom_reply_textarea( $field ) {
    $field = '<p class="field textarea"><label for="comment">'.__( 'Comment', 'kolumntheme' ).'</label><textarea id="comment" name="comment" rows="8" aria-required="true" placeholder="' . __( 'Comment', 'kolumntheme' ) . '"></textarea></p>';
    return $field;
}

function enable_threaded_comments() {
    if ( ! is_admin() ) {
        if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1 ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}

function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}