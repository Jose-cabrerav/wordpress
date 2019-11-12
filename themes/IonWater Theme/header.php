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

<!-- contenido -->
		<div class='content'></div>

	<?php get_template_part('_includes/custom', 'nav') ?>
