<?php get_header(); ?>
<div class="inner">
  <header>
    <h1><?php _e('Résultats - ', 'kolumntheme') ?><em><?php echo get_search_query(); ?></em></h1>
  </header>
  <?php get_template_part('loop'); ?>
  <?php get_template_part('pagination'); ?>
</div><!-- / inner -->
<?php get_footer(); ?>