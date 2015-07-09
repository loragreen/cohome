<footer>
  <?php if(get_theme_mod('share', true) && is_single()) : ?>
    <div class="left social">
      <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
      <a class="twitter-share-button" href="<?php the_permalink(); ?>" data-related="twitterdev" data-size="small" data-count="horizontal">Tweet</a>
    </div><!-- / left social -->
  <?php endif; ?>
  <div class="right">
    <?php edit_post_link( __( 'Edit', 'kolumntheme' ), ''); ?>
    <a href="<?php the_permalink(); ?>"><?php // if(get_theme_mod('relative_date', true)) { echo get_the_date(); } else { the_time('M j, Y'); } ?></a>
    <?php if(!is_single() && comments_open() && !post_password_required()) : ?>
      <span>&bull;</span>
      <?php if(get_theme_mod('disqus', false)) : ?>
        <a href="<?php the_permalink(); ?>#disqus_thread"><?php _e('Comments', 'kolumntheme'); ?></a>
      <?php else : ?>
        <?php comments_popup_link(__('Add first comment', 'kolumntheme'), __('1 comment', 'kolumntheme'), __('% comments', 'kolumntheme')); ?>
      <?php endif; ?>
    <?php endif; ?>
  </div><!-- / right -->
</footer>