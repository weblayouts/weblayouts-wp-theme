/**
 * ...
*/


let wl_mobileNavControl = (function(){
	let _public = {},
		_priv 	= {};


	_public.initialize = function(mq){ 

		_priv.main_sidebar = document.querySelector('.main-sidebar');
	
		//[Toggle main] Display ...
		jQuery('body').on('click', '#btn-hamburger', function(){
			jQuery('body').addClass('main-sidebar-active');
			_priv.main_sidebar.setAttribute('aria-hidden','false');
			_priv.main_sidebar.setAttribute('tabindex','2');
		});

		//[Toggle main] Hide ...
		// Hide "sidebar nav" when "close button" of empty space (overlay) is clicked
		jQuery( "body" ).click(function( event ) { 
			let tClass = event.target.className; //target class 
			if(tClass!=='' && tClass!==undefined && typeof tClass === 'string'){ 
				if(tClass.indexOf('btn-close-sidebar')>-1 ||
					tClass.indexOf('main-sidebar-active')>-1){
					jQuery('body').removeClass('main-sidebar-active');
					_priv.main_sidebar.setAttribute('aria-hidden','true');
					_priv.main_sidebar.setAttribute('tabindex','-1'); 
				}
			} 
		});
	};


	return _public;
})();




