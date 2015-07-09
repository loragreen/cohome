<section id="comments">
  <div class="inner">
    <?php if(!post_password_required()) : ?>
      <?php if(comments_open()) : ?>
        <?php if(get_theme_mod('disqus', false)) : ?>
          <?php disqus_embed(get_theme_mod('disqus', false)); ?>
        <?php else : ?>
          <?php if (have_comments()) : ?>
            <h3><?php comments_number(); ?></h3>
            <ol id="comments-list">
              <?php wp_list_comments('type=comment&callback=custom_comments&max_depth=2'); ?>
            </ol><!-- / comments-list -->
          <?php endif; // have_comments() ?>
          <h3><?php comment_form_title( __( 'Leave a reply', 'kolumntheme' ), '' ); ?></h3>
          <?php comment_form(array(
            'comment_notes_before' => '',
            'comment_notes_after' => '',
            'title_reply' => ''
          )); ?>
        <?php endif; ?>
      <?php else: ?>
        <!-- <div class="info closed"> -->
          <!-- <p><?php // _e( 'Comments are closed.', 'kolumntheme' ); ?></p> -->
        <!-- </div> -->
      <?php endif; ?>
    <?php else : ?>
      <div class="info closed">
        <p><?php _e( 'Post &amp; comments are protected with password.', 'kolumntheme' ); ?></p>
      </div>
    <?php endif; ?>
  </div><!-- / inner -->
</section><!-- / comments -->