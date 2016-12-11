<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */ 
?>

 
<div class="item-content full-screen-display">  
	<?php get_template_part( 'components/hero/excerpt', '' ); ?>
	<?php the_post_thumbnail( 'web_layouts-full' ); ?> 
</div>



     
		 