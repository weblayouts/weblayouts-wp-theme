<div class="hero__excerpt">
	<?php //Home page ...
		//...............
		if(is_home()){
	?> 
		<a href="<?php echo $GLOBALS['cat_permalink']; ?>" class="hero__label button--round alert label label-big text-uppercase">
			<?php echo $GLOBALS['cat_name']; ?>
		</a>
		<?php 
			the_title( '<h1 class="hero__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			the_excerpt();
			$access_title = esc_html__( 'Read more about : '.get_the_title(), 'web_layouts' );
		?>
		<a href="<?php the_permalink(); ?>" class="hero__cta text-uppercase" title="<?php echo $access_title; ?>">
			<?php echo __( 'Read More', 'web_layouts' ); ?> &nbsp;
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		</a> 
	<?php
		//end [home]...
		//Category or Tag pages ...
		//.......................... 
		}else if(is_category() || is_tag()){
	?>
		<?php
			the_archive_title( '<h1 class="hero__title">', '</h1>' );
			the_archive_description( '<div class="hero__taxonomy-description">', '</div>' );
		?>
		<?php //end [Category or Tag pages]... ?>
 
	<?php }else{ ?>  
		<?php //Other pages ...
			//.................
			//category link to be displayed only on 
			//"post" related instances ...
			if(!is_page() && !is_404()):
			$cattt = get_the_category( get_the_ID() );
			$cattt_link = get_category_link( $cattt[0]->cat_ID ); 
		?>
		<a href="<?php echo $cattt_link; ?>" class="hero__label button--round alert label label-big text-uppercase">
			<?php echo $cattt[0]->cat_name; ?>
		</a> 
		<?php
			endif;
		?>
		<?php the_title( '<h1 class="hero__title entry-title">', '</h1>' ); ?>
		<?php the_excerpt(); ?>
		<?php //end [Other pages]... ?>

		<?php if(is_404()): ?>
		<h1 class="hero__title entry-title">404</h1>
		<h2 class="hero__subtitle">Page Not Found!</h1>
		<?php endif; ?>


	<?php } ?>






</div><!-- excerpt -->


