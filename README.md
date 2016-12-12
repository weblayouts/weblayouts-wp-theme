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

2. **Non-critical stylesheets** : The site's remaining styles (loaded asynchronously via [loadCSS](https://gist.github.com/schilke/02357d9263ed28fc1769) )
2.1. style-non-critical.css (main styles)
2.2. font-awesome (4.6.3)
2.3. google-fonts (Lato:400,700,900)
2.4. **Plugin stylesheets**
2.5. admin.css (browser caching)
2.6. styles.css (contact-form-7)
2.7. pagenavi-css (wp-pagenavi)
2.8. style.min.css (social-warfare)
2.9. prism.css (prism-wp)
2.10. prism-line-highlight.css (prism-wp)
2.11. prism-line-numbers.css (prism-wp)
2.12. jetpack.css (jetpack)
 




# JavaScript resources (By order of delivery)
1. wl-main-min.js (renamed "weblayouts.js" in codekit







