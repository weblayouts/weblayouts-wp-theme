/**
 * Stylesheet files to be loaded asynchronously 
 */

// All plugin stylesheets:
// -----------------------
if(document.location.port !== '8888'){//Don't do that on "dev"
	loadCSS( document.location.origin+'/wp-content/plugins/browser-caching-with-htaccess/css/admin.css?ver=4.7' );
	loadCSS( document.location.origin+'/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.6' );
	loadCSS( document.location.origin+'/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' );
	loadCSS( document.location.origin+'/wp-content/plugins/social-warfare/css/style.min.css?ver=2.2.0' );
	loadCSS( document.location.origin+'/wp-content/plugins/prism-wp/libs/prism/themes/prism.css?ver=1.0.0' );
	loadCSS( document.location.origin+'/wp-content/plugins/prism-wp/libs/prism/plugins/line-highlight/prism-line-highlight.css?ver=1.0.0' );
	loadCSS( document.location.origin+'/wp-content/plugins/prism-wp/libs/prism/plugins/line-numbers/prism-line-numbers.css?ver=1.0.0' );
	loadCSS( document.location.origin+'/wp-content/plugins/jetpack/css/jetpack.css?ver=4.4.2' );
}