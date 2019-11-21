<?php get_header() ?>
<div class='content1'>
  <h1>Productos para Piscinas</h1>
</div>
<section class="piscinas">
  <div class="row">
    <div class="col-sm-12 col-md-6">
    <div class="text">
      <h2>¿Tienes una piscina permanente o desmontable y no sabes qué hacer para mantenerla?</h2>
      <p>Existen muchos que pueden garantizar no solo la durabilidad de tu piscina, sino también el ahorro y la diversión para tu familia, sin embargo apuestan a lo que les ha resultado por cosas del azar y los repiten en todas las piscinas, sin atender a que influyen muchos factores tales como, Salinidad del Agua, Contaminación ambiental y de bañistas, incompatibilidad de productos químicos, deficiencia en la filtración y distribución del agua, etc.</p>
    </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/img1.jpeg" class="img__image" alt="img">
      </div>
    </div>
  </div>
  <article class="cards">
    <div class="row">
      <?php $arg = array(
       'post_type'     => 'piscinas_type',
       'posts_per_page' => 3,
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
           <div class="cards1__image">
             <div style="text-align:center;">
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
</section>
<?php get_footer() ?>
