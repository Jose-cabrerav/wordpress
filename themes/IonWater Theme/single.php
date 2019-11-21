<?php get_header() ?>
<section class="piscinas">
  <section class="piscinas">
    <div class="row">
      <div class="col-sm-12 col-md-6">
      <div class="text">
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
      </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="img">
          <?php the_post_thumbnail('menu-items', array('class' => 'card-img-toph-auto')); ?>
        </div>
      </div>
    </div>
  </section>
</section>

<?php get_footer() ?>
