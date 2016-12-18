<?php
	dispay_custom_logo('large', 'large', 'light');
	dispay_custom_logo('small', 'small', 'light');
?>	
<button id="btn-hamburger" class="btn-hamburger menu-toggle" 
aria-controls="top-menu" aria-expanded="false"> 
	<?php get_template_part( 'components/shared/hamburger', '' ); ?>
	<?php esc_html_e( 'Menu', 'web_layouts' ); ?>
</button>