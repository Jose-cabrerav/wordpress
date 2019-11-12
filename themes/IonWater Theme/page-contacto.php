<?php get_header() ?>
    <?php the_post() ?>
    <?php get_template_part('_includes/main', 'section') ?>
    <div class="my-5 container mx-auto" style="width: 500px;">
      <h1 class="text-center mb-5"><?php the_title() ?></h1>
        <?php the_content(); ?>
        <?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
            <?php dynamic_sidebar( 'contact-widget' ); ?>
        <?php }; ?>
    </div>
<?php get_footer() ?>
