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

<ol>
	<li>**Non-critical stylesheets** : The site's remaining styles (loaded asynchronously via [loadCSS](https://gist.github.com/schilke/02357d9263ed28fc1769) )</li>
	<ol>
		<li>style-non-critical.css (main styles)</li>
		<li>font-awesome (4.6.3)</li>
		<li>google-fonts (Lato:400,700,900)</li>
		<li>**Plugin stylesheets**</li>
		<li>admin.css (browser caching)</li>
		<li>styles.css (contact-form-7)</li>
		<li>pagenavi-css (wp-pagenavi)</li>
		<li>style.min.css (social-warfare)</li>
		<li>prism.css (prism-wp)</li>
		<li>prism-line-highlight.css (prisΩm-wp)</li>
		<li>prism-line-numbers.css (prism-wp)</li>
		<li>jetpack.css (jetpack)</li>
	</ol>
</ol>
 




# JavaScript resources (By order of delivery) 
1. wl-main-min.js (renamed "weblayouts.js" in codekit

2. wl-document-min.js (depends on "loadCSS-min.js")

3. page-home-min.js (depends on "wl-document-min.js")







