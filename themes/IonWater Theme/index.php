<?php get_header() ?>

<!-- Principal -->
<section>
  <!-- Slider -->
  <article>
    <div id="carouselExampleSlidesOnly" class="carousel slide sl" data-ride="carousel">
  <div class="carousel-inner">
    <?php $arg = array(
     'post_type'     => 'slider',
     'posts_per_page' => 3);
      $get_arg = new WP_Query( $arg );
      while ( $get_arg->have_posts() ) {
     $get_arg->the_post();
     ?>
     <div class="carousel-item <?php if ( $get_arg->current_post == 1 ) : ?>active<?php endif; ?>">
       <?php the_post_thumbnail('carousel-images', array('class' => 'd-block w-100 h-auto')); ?></div>
     <?php } wp_reset_postdata(); ?>
  </div>
</div>


  </article>
  <!-- Cards -->
  <article class="services" >
    <div class="container2">
      <a href="hogar.html"class="card1 ef">
        <div class="card1__bg">
          <h1 class="card1__bg--text">Soluciones Para el hogar</h1>
        </div>
      </a>
      <a href="ablandadores.html" class="card2 ef">
        <div class="card2__bg">
          <h1 class="card2__bg--text">Soluciones Industriales</h1>
        </div>
      </a>
      <a href="piscinas.html" class="card3 ef">
        <div class="card3__bg">
          <h1 class="card3__bg--text">Soluciones para Piscinas</h1>
        </div>
      </a>

  </article>
</section>



<?php get_footer() ?>
