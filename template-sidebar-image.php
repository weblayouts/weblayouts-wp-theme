<?php
/**
 * Template Name: Sidebar Image
 *
 * @package Web_Layouts 
 */

get_header(); ?> 
	<div id="primary" class="content-area row">
		<div class="page-wrapper medium-12 columns">
			<main id="main" class="site-main" role="main"> 
				<section class="content-latest-articles" id="content-latest-articles"> 
					<?php
						while ( have_posts() ) : the_post(); 
							get_template_part( 'components/page/content', 'page' );  

							$decoration_img_url = get_the_post_thumbnail_url();
						endwhile; // End of the loop.
					?> 
				</section><!-- content-latest-articles -->
			</main>
		</div><!-- page-wrapper -->
		<!-- <div class="decoration large-5 columns" role="presentation" aria-hidden="true" 
		style="background-image:url(<?php echo $decoration_img_url; ?>);"></div> -->
	</div>
<?php
get_footer();