<?php
/**
 * The sidebar containing the second widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Layouts
 */

if ( ! is_active_sidebar( 'sidebar-singlepage' ) ) {
	return;
}
?>

<?php dynamic_sidebar( 'sidebar-singlepage' ); ?> 
