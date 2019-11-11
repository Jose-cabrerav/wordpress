<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>
	<header>
	  <div class="title-dsk">
	    <a href="<?php bloginfo('url') ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo.svg" alt="logo" class="title-dsk__logo"></a>
	  </div>
	</header>

	<!-- Navigation -->
	  <nav>
	    <div class="nav-dsk">
	      <ul>
	        <li><a href="<?php bloginfo('url') ?>">Inicio</a></li>
	        <li><a href="equipos">Equipos<span class="arrow-down"></span></a>
	          <ul class="dropdown">
	            <li><a href="ablandadores">Ablandadores</a></li>
	            <li><a href="filtros">Filtros</a></li>
	          </ul>
	        </li>
	        <li><a href="productos">Productos Quimicos<span class="arrow-down"></span></a>
	         <ul class="dropdown">
	           <li><a href="hogar">Limpieza Hogar</a></li>
	           <li><a href="piscinas">Piscinas</a></li>
	         </ul>
	       </li>
	        <li><a href="quienes-somos">Quienes Somos</a></li>
	        <li><a href="contacto">Contacto</a></li>
	      </ul>
	    </div>
	    <div class="nav-mov">
	      <div class="nav-mov__bg">
	        <div class="nav-mov__bg--burger"> <span></span> <span></span> <span></span> </div>
	        <a href="#" class="nav-mov__bg--title"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo.svg"  class="nav-mov__bg--logo"></a>
	      </div>
	    </div>
	  </nav>
<!-- contenido -->
		<div class='content'></div>

	<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
		<?php wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'container_class' => 'header-menu'
		) ); ?>
	<?php } ?>
