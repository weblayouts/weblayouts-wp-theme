<?php
/**
 * The sidebar containing the second widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Layouts
 */

if ( ! is_active_sidebar( 'sidebar-singlepost' ) ) {
	return;
}
?>

<?php dynamic_sidebar( 'sidebar-singlepost' ); ?> 