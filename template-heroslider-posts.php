<?php
/**
 * Template Name: Hero Slider + Posts
 *
 * @package Web_Layouts 
 */


get_header(); ?>

	<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
	
	<div id="primary" class="content-area row">
		<main id="main" class="site-main medium-12 columns" role="main">   
			
			<section class="filter-nav">
				<?php 
					wp_nav_menu( 
						array( 
							'theme_location' 	=> 'menu-2', 
							'menu_id' 			=> 'list--catfilter', 
							'menu_class'		=> 'menu list--catfilter text-uppercase list-unstyled list-inline list-pills pills-red', 
							'container'			=> false,
							'walker' 			=> new Walker_menu_cat_filter() 
						) 
					); 
				?>  
			</section> 
			
			<section class="content-latest-articles" id="content-latest-articles"> 
				<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php
						endif;
						
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 
 
 							//Exclude "quotes" and "asides" from loop
							$post_id = get_the_ID();
							$no_quote = has_post_format('quote',$post_id);
							$no_asite = has_post_format('aside',$post_id); 
							//... 
							if(!$no_quote && !$no_asite){ 
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'components/post/content', 'sample');
							}
							
						endwhile;

						// the_posts_navigation();

					else :

						get_template_part( 'components/post/content', 'none' );

					endif; 
					wp_reset_query();
				?> 
			</section><!-- content-latest-articles --> 
			
			<?php wp_pagenavi(); ?> 
		</main>
	</div>
<?php
get_footer();