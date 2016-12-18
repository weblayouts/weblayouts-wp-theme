<?php
	$cssClass = '';
	//full screen except for Category or Tag pages ...
	if(!is_category() && !is_tag()){
		$cssClass .= ' hero--full-screen';
	}
	if(!is_home()){
		$cssClass .= ' flex-container x-align-items-center y-align-items-center';
	}
?>
<section id="hero" class="hero <?php echo $cssClass; ?>">
	<?php 
		//Home page ...
		if(is_home()){ //display "featured" only on 
			get_sidebar( 'featured' ); 
		}

		//Any other page ...
		else{ 
      get_template_part( 'components/post/contentslide', get_post_format() );
		}
	?> 
	<button id="btn-push-down" class="hero__btn-scroll-down">
		<span class="screen-reader-text">Scroll page down</span>
	</button>
</section><!-- hero -->

						


