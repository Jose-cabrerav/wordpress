<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
	<div class="container">

		<div class="collapse navbar-collapse" id="navbarNav">
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			<?php wp_nav_menu( array(
				'theme_location'	=> 'header-menu',
				'depth'				=> 2,
				'container'			=> true,
				'menu_class'		=> 'navbar-nav mc -auto',
				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
				'walker'			=> new WP_Bootstrap_Navwalker(),
			) ); ?>
		<?php } ?>
		<?php if ( is_active_sidebar( 'menu-widget' ) ) { ?>
			<?php dynamic_sidebar( 'menu-widget' ); ?>
		<?php }; ?>
		</div>
	</div>
</nav>
