//https://gist.github.com/schilke/02357d9263ed28fc1769
function loadCSS( href, before, media ){ 
'use strict'; 
var ss = window.document.createElement( 'link' ); 
var ref = before || window.document.getElementsByTagName( 'script' )[ 0 ]; 
ss.rel = 'stylesheet'; 
ss.href = href; 
ss.media = 'only x'; 
ref.parentNode.insertBefore( ss, ref ); 
setTimeout( function(){ 
ss.media = media || 'all'; 
} ); 
return ss; 
}

var _version = document.getElementsByTagName('body')[0].getAttribute("data-resouces-version");



// load site's non-critical stylesheet 
loadCSS( document.location.origin+'/wp-content/themes/web_layouts/css/style-non-critical.css?ver='+_version );


// load Google Web Font 
loadCSS( 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' );
// load Font Awesome from CDN 
loadCSS( 'https://fonts.googleapis.com/css?family=Lato:400,700,900' );

// load plugins CSS
loadCSS( document.location.origin+'/wp-content/plugins/browser-caching-with-htaccess/css/admin.css?ver=4.7' );
loadCSS( document.location.origin+'/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.6' );
loadCSS( document.location.origin+'/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' );
loadCSS( document.location.origin+'/wp-content/plugins/social-warfare/css/style.min.css?ver=2.2.0' );
loadCSS( document.location.origin+'/wp-content/plugins/prism-wp/libs/prism/themes/prism.css?ver=1.0.0' );
loadCSS( document.location.origin+'/wp-content/plugins/prism-wp/libs/prism/plugins/line-highlight/prism-line-highlight.css?ver=1.0.0' );
loadCSS( document.location.origin+'/wp-content/plugins/prism-wp/libs/prism/plugins/line-numbers/prism-line-numbers.css?ver=1.0.0' );
loadCSS( document.location.origin+'/wp-content/plugins/jetpack/css/jetpack.css?ver=4.4.2' );



