<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

							get_template_part( 'components/page/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?> 
				</section><!-- content-latest-articles -->
			</main>


			<aside id="tertiary" class="widget-area" role="complementary">
				<?php get_sidebar( 'singlepage' ); ?> 
			</aside> 
		</div><!-- page-wrapper -->
	</div>
<?php
get_footer();