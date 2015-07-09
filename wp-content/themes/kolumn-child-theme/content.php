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
    <?php if (in_category(3) && is_singular()) :?>
      <div class="post-content">
        Bravo, vous avez réussi à effacer l'overlay ! Malheureusement ce contenu est toujours privé et réservé aux membres de Cohome. Si vous souhaitez nous rejoindre, rien de plus simple ! Cliquez sur le grand bouton orange  à gauche, sous le logo. Nous serons ravies de vous rencontrer.
        <h2>Mots-clés</h2>
          <a href="#">#CatH</a>, <a href="#">#genY</a>, <a href="#">#collaboratif</a>, <a href="#">#coworking</a>, <a href="#">#workHard</a>

        <h2>Réseaux sociaux</h2>
        <a href="#">LinkedIn</a>, <a href="#">Twitter</a>

        <h2>Parcours</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="overlay">
        <p class="big">
          La consultation des profils est réservée aux membres.
        </p>
        <p>
          Vous avez envie de rejoindre une communauté d'indépendants qui vous ressemble ? Inscrivez-vous dès maintenant et soyez les premiers à profiter de CoHome !
        </p>
        <p class="signup"><a href="#"><button class="btn btn-default" data-toggle="modal" data-target="#joinModal" onclick="ga('send', 'event', 'join us button PROFILE page', 'click', location.toString());" >Je deviens membre</button></a></p>
      </div>
    <?php elseif ( is_singular()) : ?>
      <?php the_content(__('<span>&bull;&bull;&bull;</span>', 'kolumntheme')); ?>
    <?php else :?>
      
    <?php endif;?>
  </div><!-- post-body -->
  <?php if ( is_singular() ) { get_template_part('partials/post_footer'); } ?>
</article><!-- / post -->
<?php if(!is_single()) : ?><?php endif; ?>