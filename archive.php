<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main medium-7 columns" role="main"> 
			<section class="row content-latest-articles" id="content-latest-articles"> 
				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'components/post/content', 'sample-archive' );

					endwhile;

					// the_posts_navigation();

				else :

					get_template_part( 'components/post/content', 'none' );

				endif; ?>
			</section><!-- content-latest-articles -->

			<?php wp_pagenavi(); ?>  
		</main>
		<aside id="tertiary" class="widget-area medium-4 columns" 
		role="complementary">
			<?php get_sidebar( 'archivestags' ); ?>
		</aside>
	</div>
<?php 
get_footer();