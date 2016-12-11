# weblayouts-wp-theme
Wordpress theme of weblayouts.ca with full documentation




# Stylesheet resources (By order of delivery)
1. **Critical stylesheet** : Stylesheet that absolutely must load before the rest of the page. Contains light styles just to give the whole layout a decent shape. Included at the end of the `<head>` (as advised by [PageSpeed Tools's 
Optimize CSS Delivery](https://raw.githubusercontent.com/sindresorhus/github-markdown-css/gh-pages/github-markdown.css)).

```html
<style>
	@import '<?php echo get_stylesheet_directory_uri(); ?>/css/style-critical.css';
</style>
```