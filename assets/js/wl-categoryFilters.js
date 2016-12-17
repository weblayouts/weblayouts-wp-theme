

let wl_categoryFilters = (function(){
	let _public = {};
	let _priv = {
		listID 		: 'list--catfilter',
		dropdownID 	: 'dropdown-catfilter'
	};






	//Activate (or deactivate) some buttons
	//Return a query string describing:
	//What posts should be displayed
	//and what posts should be hidden
	_priv.activateButtons = function(btn_filter){
		let id_current 		= 'current',
			pill_id 		= 'cat-filter',
			focus_removed 	= 'focus-removed',
			focus_can_be_removed = false,
			filter_query 	= {};

		//...
		if( btn_filter.hasClass( id_current )===true ){
			focus_can_be_removed = true;
		}

		//Activate button
		btn_filter.addClass( id_current );

		//...
		jQuery('.cat-filter').removeClass( focus_removed ); 

		//For category "all"
		if(btn_filter.data('filter') == 'category-all'){
			//deactivate all other filters
			jQuery('.cat-filter:not([data-filter="category-all"])').removeClass( id_current );
			filter_query.fadeIn = '.card';
			filter_query.fadeOut = '';
		}
		else{
			//Make sure 'all' is deactivated
			jQuery('.cat-filter[data-filter="category-all"]').removeClass( id_current );
			//If current button is current and there is another current
			//deactivate this button
			if(focus_can_be_removed===true && btn_filter.hasClass( id_current ) && (jQuery('.cat-filter.'+id_current).length>1)){
				btn_filter.removeClass( id_current ).addClass( focus_removed ); 
			}
			//...
			let _target_filters 	= jQuery('.cat-filter.current').map(function(){ return '.'+jQuery(this).data('filter') }).get().join();
			filter_query.fadeIn 	= _target_filters;
			filter_query.fadeOut 	= '.card:not('+_target_filters+')';
		}

		return filter_query;
	};





	// _public.copyFilterListToDropdown = function(){
	// 	let _dropdown = jQuery('#'+_priv.dropdownID);
	// 	//...
	// 	jQuery('#'+_priv.listID+ ' > li > a').each(function(){
	// 		console.log('....', jQuery(this));
	// 		//...
	// 		let _href 	= 'data-href="'+jQuery(this).attr('href')+'"',
	// 			_filter = 'data-filter="'+jQuery(this).data('filter')+'"';
	// 		let _option = '<option '+_filter+' '+_href+'>'+jQuery(this).text()+'</option>';
	// 		_dropdown.append(_option);
	// 	});
	// };


	_public.initialize = function(){

		//[Posts filtering]
		jQuery('body').on('click', '#list--catfilter a', function(event){
			event.preventDefault();
			let cat_filter 		= jQuery(this).data('filter'),
				query_filter 	= _priv.activateButtons(jQuery(this)); 
			//Show some post, hide others ...
			jQuery(query_filter.fadeIn).fadeIn('fast');
			jQuery(query_filter.fadeOut).fadeOut('fast'); 
		}); 
		//Allow mouse hover effect to work normally 
		//after focus had been removed from button
		jQuery('body').on('mouseleave', '#list--catfilter a', function(event){
			jQuery(this).removeClass('focus-removed');
		}); 


		//....
		// _public.copyFilterListToDropdown();
	};


	return _public;
})();
