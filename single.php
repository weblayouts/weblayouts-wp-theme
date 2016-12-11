<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Web_Layouts
 */

get_header(); ?> 
	<div id="primary" class="content-area row">
		<div class="page-wrapper medium-12 columns">
			<main id="main" class="site-main" role="main">   
				<section class="page-main-content" id="content-latest-articles"> 
					<?php
					while ( have_posts() ) : the_post(); 
						get_template_part( 'components/post/contentsingle', get_post_format() );
						

						// //Next and Prev posts
						// echo '<div class="section-prev-next small-12 columns">';
						// echo 	'<h2 class="widget-title">';
						// 			echo esc_html__( 'More Reading', 'web_layouts' );
						// echo 	'</h2>';

						// //Tried to make sure:
						// //Only posts of the same category and format are displayed ...
						// the_post_navigation( array(
				  //           'prev_text'                  => __( '%title' ),
				  //           'next_text'                  => __( '%title' ),
				  //           'in_same_term'               => true,
				  //           'taxonomy'                   => __( 'category' ),
				  //           'screen_reader_text' => __( 'Continue Reading' )
				  //       ) ); 
						// echo '</div>';
					endwhile; // End of the loop.
					?>
				</section><!-- content-latest-articles -->
			</main>


			<aside id="tertiary" class="widget-area" role="complementary"> 
				<?php get_sidebar( 'singlepost' ); ?> 
			</aside> 


			
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					?>
					<div class="section-comments-replies"> 
						<?php comments_template(); ?>
					</div>
					<?php
				endif;
			?> 
		</div><!-- page-wrapper -->
	</div>
<?php   
get_footer();
