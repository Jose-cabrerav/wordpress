<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'carousel-images'		=> __( 'Tamaño del slideshow' ),
		'menu-items'	=> __( 'Tamaño personalizado del logo' ),
		'blog-square'	=> __( 'Tamaño del blog' ),
		'detail'	=> __( 'Tamaño del detalle' ),
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'carousel-images', 1200, 400, true );			// Personalización del tamaño del slideshow
	add_image_size( 'menu-items', 640, 360, false );		// Personalización del tamaño del menu
	add_image_size( 'blog-square', 142, 142, false );	// Personalización del tamaño del blog
	add_image_size( 'detail', 446, 568, false );	// Personalización del tamaño del detalle



	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
