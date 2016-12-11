# weblayouts-wp-theme
Wordpress theme of weblayouts.ca with full documentation




# Stylesheet resources (By order of delivery)
Stylesheet assets are located into : `assets/stylesheets`.



1. **Critical stylesheet** : Stylesheet that absolutely must load before the rest of the page. Contains light styles just to give the whole layout a decent shape. Included at the end of the `<head>` (as advised by <a href="http://example.com/" target="_blank">Hello, world!</a> [PageSpeed Tools's 
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

2. **Non-critical stylesheet** : Contains the site's complete styles