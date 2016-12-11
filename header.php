<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Layouts
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<style>
	@import '<?php echo get_stylesheet_directory_uri(); ?>/css/style-critical.css';
</style>
</head>

<body <?php body_class(); ?> data-resouces-version="<?php echo $GLOBALS['resouces-version']; ?>">
<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'web_layouts' ); ?></a>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner"> 
		<div class="row flex-container y-align-items-center"> 
			<?php 
				get_template_part( 'components/header/site', 'branding' ); 
				get_template_part( 'components/navigation/navigation', 'top' ); 
			?>
		</div><!-- row -->
	</header>


	<div class="main-sidebar" aria-hidden="true" tabindex="-1">
		<button id="btn-close" class="btn-close btn-close-sidebar">
			<span class="screen-reader-text">Hide Sidebar</span>
		</button> 
		<?php 
			dispay_custom_logo('large', 'dark');
		?>
		<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
	</div><!-- sidebar-nav -->




	<?php get_template_part( 'components/hero/main', '' ); ?>	



	
	<div id="content" class="site-content">

