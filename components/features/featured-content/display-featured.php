<?php
/**
 * The template for displaying featured content
 *
 * @package Web_Layouts
 */
$featured_posts = web_layouts_get_featured_posts();
if ( empty( $featured_posts ) ) {
	return;
}
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
		<?php
			foreach ( $featured_posts as $post ) {
				setup_postdata( $post );

				 // Include the featured content template.
				get_template_part( 'components/features/featured-content/content', 'featured' );
			}

			wp_reset_postdata();
		?>
	</div>
</div>
