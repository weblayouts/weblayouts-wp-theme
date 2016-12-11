/**
 * Stylesheet files to be loaded asynchronously 
 */
var _wl_script_ver = document.getElementsByTagName('body')[0].getAttribute("data-resouces-version");


// load site's non-critical stylesheet 
loadCSS( document.location.origin+'/wp-content/themes/web_layouts/css/style-non-critical.css?ver='+_wl_script_ver );
// load Google Web Font 
loadCSS( 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' );
// load Font Awesome from CDN 
loadCSS( 'https://fonts.googleapis.com/css?family=Lato:400,700,900' );
