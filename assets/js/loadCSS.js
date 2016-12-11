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