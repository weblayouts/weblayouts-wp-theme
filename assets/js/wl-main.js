/** 
 * Scripts for the whole site
 * ----------------------------------------
*/
( function( $ ) { 
	//.......
	let $page_hero = $('#hero'); 

	//...
	wl_categoryFilters.initialize(); 
	wl_mqForAssistiveTech.initialize();
	wl_offscreenContentManager.initialize();
	// wl_mobileNavControl.initialize();

	//[Page hero] Scroll page down ...
	$('body').on('click', '#btn-push-down', function(){
		$("html, body").animate({ scrollTop: $page_hero.height() }, 'fast');
	}); 

 

} )( jQuery );


