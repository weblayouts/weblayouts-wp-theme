<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */

get_header(); ?> 
<h1>BEMing .hero class</h1>
<h1>BEMing .hero class</h1>
<h1>BEMing .hero class</h1>
<h1>BEMing .hero class</h1>
<h1>BEMing .hero class</h1>
<h1>BEMing .hero class</h1>
	<div id="primary" class="content-area row">
		<main id="main" class="site-main medium-12 columns" role="main">   
			
			<section class="filter-nav"> 
				<?php 
					wp_nav_menu( 
						array( 
							'theme_location' 	=> 'menu-4', 
							'menu_id' 			=> 'list--catfilter', 
							'menu_class'		=> 'menu list--catfilter text-uppercase list-unstyled list-inline', 
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
								echo '<div class="card--frame">';
								get_template_part( 'components/post/content', 'card');
								echo '</div>';
							}
							
						endwhile;

						// the_posts_navigation();

					else :

						get_template_part( 'components/post/content', 'none' );

					endif;  
				?> 
			</section><!-- content-latest-articles --> 
			
			<?php wp_pagenavi(); ?> 
		</main>
	</div>
<?php
get_footer();