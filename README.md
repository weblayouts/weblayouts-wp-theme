# weblayouts-wp-theme
Wordpress theme of weblayouts.ca with full documentation


# Resources loading
This section describes how resources are loaded by the theme:

## Stylesheet resources
* Critical stylesheet : Stylesheet that absolutely must load before the rest of the page. Contains light styles just to give the whole layout a decent shape. Included at the end of the `<head>`.
`<style>
	@import '<?php echo get_stylesheet_directory_uri(); ?>/css/style-critical.css';
</style>`