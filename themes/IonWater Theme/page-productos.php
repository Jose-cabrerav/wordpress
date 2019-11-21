<?php get_header() ?>
<div class='content1'>
  <h1>Productos Quimicos</h1>
</div>
<article class="cards">
  <div class="row">
    <?php $arg = array(
     'post_type'     => 'ablanadores_post',
     'posts_per_page' => 9,
     'offset'     => 0,
     'post__not_in'   => array($post->ID),
     'paged'       => $paged
   );

     $get_arg = new WP_Query( $arg );

     while ( $get_arg->have_posts() ) {
     $get_arg->the_post();
     ?>
     <div class="col-sm-12 col-md-4 box">
       <div class="cards1" style="width: 18rem;">
         <div class="cards1__image" style="text-align:center;">
           <div style="width:60%; text-align:center;">
             <?php the_post_thumbnail('menu-items', array('class' => 'card-img-toph-auto')); ?>
           </div>
         </div>

         <div class="cards1__body">
           <h5 class="card-title"><?php the_title(); ?></h5>
           <a href="<?php the_permalink(); ?>" class="btn btn-primary">Comprar</a>
         </div>
       </div>
     </div>
     <?php } wp_reset_postdata(); ?>
  </div>
</article>
<?php get_footer() ?>
