<?php get_header(); ?>
<div class="inner clear-padding">

<!-- <section class="home-top container-fluid">
  <div class="row"> -->

    <!-- set the query -->
    <?php //query_posts('cat=6&showposts=2'); ?>

    <!-- set posts -->
    <!--
    <?php //$counter = 1; ?>
    <?php //while (have_posts()) : the_post(); ?>
      <div class="col-sm-4 column-4 clear-padding">
        <a href="<?php //echo get_permalink(); ?>">
          <div class="image-wrapper">
            <?php //the_post_thumbnail('full', array("class" => "img-responsive")); ?>
            <h3 class="title <?php //echo $r = ($counter == 3) ? 'last' : ''; ?>">
              <?php //the_title(); ?>
            </h3>
          </div>
        </a>
      </div>
    <?php //$counter++; ?>
    <?php //endwhile;?>
    -->

    <!-- Reset the query -->
    <?php //wp_reset_query(); ?>
  <!-- </div> -->
<!-- </section> -->

<section class="presentation">
  <!-- set the query -->
  <?php query_posts('page_id=51'); ?>

  <!-- set posts -->
  <?php while (have_posts()) : the_post(); ?>
    
    <?php the_content(); ?>
  
  <?php endwhile;?>

  <!-- Reset the query -->
  <?php wp_reset_query(); ?>
</section>


  <section id="home-posts">

    <h2 id="articles-title">Découvrez nos membres</h2>
    <div class="filters">
    <?php 
      $categories = get_categories(
        array(
          'hide_empty' => 1,
          'exclude' => '6, 1',
          'orderby' => 'name'
          )
        );
      if($categories){
        echo '    <button data-filter="" class="filter-button btn btn-default selected">Tout</button>';
        foreach ($categories as $category) {
          $button = "<button class=\"filter-button btn btn-default\" data-filter=." . $category -> slug . ">" . $category -> name . "</button>";
          echo $button;
        }
      }
    ?>

    </div>

    <div class="container-fluid clear-padding">
      <div class="row" id="grid">

        <!-- set the query -->
        <?php 
          query_posts('cat=-6'); 
          $counter = 1;
        ?>
        
        <!-- set posts -->
        <?php while (have_posts()) : the_post(); ?>
          <?php 
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if($categories){
              foreach($categories as $category) {
                $output .= $category->slug . $separator;
              }
            }
          ?>

          <div class="col-sm-6 grid-item <?php echo trim($output, $separator); ?>">
                  <?php get_template_part( 'content', get_post_format() ); ?>
                  <?php $counter +=1; ?>
          </div>

          <!-- <hr> -->

          <?php endwhile;?>

         <!-- Reset the query -->
         <?php wp_reset_query(); ?>
       </div> <!-- row -->
    </div> <!-- container-fluid -->

    
  </section>

  <?php get_template_part('pagination'); ?>


  <div class="separator"></div>
        <a href="#" class="join-us"><button class="btn btn-default join-us-button" data-toggle="modal" data-target="#joinModal" onclick="ga('send', 'event', 'home after profiles join us button', 'click', location.toString());" data-member="member">Inscrivez-vous</button></a>
</div><!-- / inner -->
<?php get_footer(); ?>