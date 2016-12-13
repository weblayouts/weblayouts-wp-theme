# weblayouts-wp-theme
Wordpress theme of weblayouts.ca with full documentation
 




# JavaScript &amp; SCSS files processing:
Complete processing (validation, minification, ...) done by [Codekit](https://codekitapp.com/) 




# Stylesheet resources (By order of delivery)
Stylesheet assets are located into : `assets/stylesheets`.


1. **Critical stylesheet** : Must load before the rest of the page (for decent look). Very light and render blocking is very short. Included at the end of the `<head>` (as advised by [PageSpeed Tools's 
Optimize CSS Delivery](https://developers.google.com/speed/docs/insights/OptimizeCSSDelivery)).     
    
```html
<head>
	...
	... 
	<style>
		@import '<?php echo get_stylesheet_directory_uri(); ?>/css/style-critical.css';
	</style>
</head>
```
