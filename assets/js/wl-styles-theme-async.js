/**
 * Stylesheet files to be loaded asynchronously 
 */
var _wl_body 			= document.getElementsByTagName('body')[0],
	_wl_script_ver 		= _wl_body.getAttribute('data-resouces-version'),
	_wl_template_uri 	= _wl_body.getAttribute('data-template-dir-uri');


// load site's non-critical stylesheet 
loadCSS( _wl_template_uri+'/css/style-non-critical.css?ver='+_wl_script_ver );
// load Google Web Font 
loadCSS( 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' );
// load Font Awesome from CDN 
loadCSS( 'https://fonts.googleapis.com/css?family=Lato:400,700,900' );
