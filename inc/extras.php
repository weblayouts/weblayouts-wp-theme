<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Web_Layouts
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function web_layouts_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	
	// Add a class of no-sidebar when there is no sidebar present
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'web_layouts_body_classes' );



//...
function dispay_custom_logo($size, $color){
	$description = get_bloginfo( 'description', 'display' ); 
	?> 
	<a class="main-logo main-logo-<?php echo $size; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo $description; ?>">
		<?php get_template_part( 'components/shared/logo-'.$size, $color ); ?>
	</a>
	<?php
}




