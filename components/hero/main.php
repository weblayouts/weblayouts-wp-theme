<?php
	$cssClass = '';
	//full screen except for Category or Tag pages ...
	if(!is_category() && !is_tag()){
		$cssClass .= ' page-hero-full-screen';
	}
	if(!is_home()){
		$cssClass .= ' flex-container x-align-items-center y-align-items-center';
	}
?>
<section id="page-hero" class="page-hero<?php echo $cssClass; ?>">
	<?php 
		//Home page ...
		if(is_home()){ //display "featured" only on 
			get_sidebar( 'featured' ); 
		}

		//Any other page ...
		else{
			?> 
			<?php get_template_part( 'components/hero/excerpt', '' ); ?>
			<div class="featured-image item-content full-screen-display">
				<?php 
					if ( !is_home() && '' != get_the_post_thumbnail() ) : 
						$access_title = esc_html__( 'Read more about : '.get_the_title(), 'web_layouts' );
						the_post_thumbnail( '' );
					endif; 
				 
					if(is_404()) :  //if 404 page
						//Get specific image from librairy
				    	$decoration_img_url = get_image_from_media_library('404 image');
				    	$decoration_img_url = (!empty($decoration_img_url)) ? $decoration_img_url->guid : '';
						?>
							<img src="<?php echo $decoration_img_url; ?>" alt=""> 
						<?php
					endif; 
				?>
			</div><!-- featured-image -->
			<?php
		}
	?> 
	<button id="btn-push-down" class="btn-push-down">
		<span class="screen-reader-text">Scroll page down</span>
	</button>
</section><!-- page-hero -->

						

