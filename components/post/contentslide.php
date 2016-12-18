<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */ 
?>

 
<div class="hero__content full-screen-display">  
	<?php get_template_part( 'components/hero/excerpt', '' ); ?>
	<?php //the_post_thumbnail( 'web_layouts-full', array('class'=>'hero__featured-img') ); ?> 


 
	<?php 
		//
		if ( !is_404() ) : 
			// $access_title = esc_html__( 'Read more about : '.get_the_title(), 'web_layouts' );
			the_post_thumbnail( 'web_layouts-full', array('class'=>'hero__featured-img')  );
		endif; 
	 
		if(is_404()) :  //if 404 page
			//Get specific image from librairy
	    	$decoration_img_url = get_image_from_media_library('404 image');
	    	$decoration_img_url = (!empty($decoration_img_url)) ? $decoration_img_url->guid : '';
			?>
				<img src="<?php echo $decoration_img_url; ?>" alt="" class="hero__featured-img"> 
			<?php
		endif; 
	?> 

</div>

     
		 