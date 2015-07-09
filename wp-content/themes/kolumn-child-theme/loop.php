<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; else: ?>

  <article>
    <p><?php _e( 'Pas de résultat pour le moment... Essayez plus tard !', 'kolumntheme' ); ?></p>
  </article>
  <hr>

<?php endif; ?>