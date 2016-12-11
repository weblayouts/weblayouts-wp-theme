<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Web_Layouts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-message medium-6 columns'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'web_layouts' ),
				'after'  => '</div>',
			) );
		?>
	</div> 
</article><!-- #post-## -->
<article id="" <?php post_class('content-next medium-6 columns'); ?>>
	<header class="entry-header"> 
		<h1><?php esc_html_e( 'So what\'s next?', 'web_layouts' ); ?></h1> 
	</header>
	<div class="entry-content">
		<h3><?php esc_html_e( 'Please check your email to confirm your subscription.', 'web_layouts' ); ?></h3>
		<p><?php esc_html_e( 'Then ...', 'web_layouts' ); ?></p>
		<h3><?php esc_html_e( 'Discover some of our latest articles!', 'web_layouts' ); ?></h3>
		<ul>
		<?php
			// The Query
			$args = 'posts_per_page=5';
			query_posts( $args );
			 
			// The Loop
			while ( have_posts() ) : the_post();
			    echo '<li><a href="<?php the_permalink(); ?>">';
			    the_title();
			    echo '</li></a>';
			endwhile;
			 
			// Reset Query
			wp_reset_query(); 
		?>
			
		</ul>

		<div class="entry-footer double-border-top">
			<p><?php esc_html_e( 'Each week, we post a new article on: ', 'web_layouts' ); ?></p>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'list--catfilter', 'menu_class'=>'menu list--catfilter', 'container'=> false ) ); ?>
		</div>
	</div> 
</article><!-- #post-## -->





