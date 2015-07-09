<article id="post-<?php the_ID(); ?>">
  <?php if(get_the_title()) : ?>
    <?php if ( is_singular() ) { $tag = 'h1'; } else { $tag = 'h3'; } ?>
    <header>
      <a href="<?php the_permalink() ?>" rel="bookmark">
      <?php if ( has_post_thumbnail() && !is_singular() ) : ?>
        <div class="thumbnail_wrapper"><?php echo '<'.$tag.'>'; ?><?php the_title(); ?><?php echo '</'.$tag.'>'; ?></div>
        <span class="thumbnail post_thumbnail"><?php the_post_thumbnail('post_thumbnail'); ?></span>
      <?php else :?>
        <?php echo '<'.$tag.'>'; ?><?php the_title(); ?><?php echo '</'.$tag.'>'; ?>
      <?php endif; ?>
      </a>
      
    </header>
  <?php endif; ?>
  <div class="post-body">
    <?php // the_content(__('<span>&bull;&bull;&bull;</span>', 'kolumntheme')); ?>
  </div><!-- post-body -->
  <?php if ( is_singular() ) { get_template_part('partials/post_footer'); } ?>
</article><!-- / post -->
<?php if(!is_single()) : ?><?php endif; ?>