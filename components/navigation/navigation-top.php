<nav id="site-navigation" class="main-navigation mg-left-auto" role="navigation">
	<?php 
		wp_nav_menu( 
			array( 
				'theme_location' 	=> 'menu-1', 
				'menu_id' 			=> 'top-pages-menu', 
				'menu_class' 		=> 'menu top-pages-menu list-unstyled', 
				'container' 		=> false 
			) 
		);
	?>	
</nav>