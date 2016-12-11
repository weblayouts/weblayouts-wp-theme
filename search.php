<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Web_Layouts
 */

get_header(); ?>

	<section id="primary" class="content-area row">
		<main id="main" class="site-main large-7 columns" role="main"> 
			<section class="row content-latest-articles" id="content-latest-articles"> 
				<?php
				if ( have_posts() ) : ?>

					<header class="page-header small-12 columns">
						<h1 class="page-title widget-title"><?php printf( esc_html__( 'Search Results for: %s', 'web_layouts' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						// get_template_part( 'components/post/content', 'search' );
						get_template_part( 'components/post/content-sample', 'archive' );

					endwhile;

					// the_posts_navigation();

				else :

					get_template_part( 'components/post/content', 'none' );

				endif; ?> 
			</section><!-- content-latest-articles -->
		</main>
		<div class="decoration large-5 columns" role="complementry">
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php
get_footer();