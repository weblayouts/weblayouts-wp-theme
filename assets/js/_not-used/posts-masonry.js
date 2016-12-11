



( function( $ ) {
	var $container = $('.container-masonry');

	var calculate_nb_columns = function(){
		var $window_width = jQuery(window).width(),
			nb_columns = 1;
		if($window_width>600 && $window_width<=768 ){
			nb_columns = 2;
		}else if($window_width>768){
			nb_columns = 3; 
		}
		console.log('>>>nb_columns;', nb_columns);
		return nb_columns;
	};

	$(window).load(function(){ 
		// initialize Isotope (Only after window has loaded) 
		$container.isotope({
		  // options...
		  resizable: false, // disable normal resizing
		  // set columnWidth to a percentage of container width
		  masonry: { columnWidth: $container.width() / calculate_nb_columns() }
		});
	});

	// update columnWidth on window resize
	$(window).on("debouncedresize", function( event ) {
	  $container.isotope({
	    // update columnWidth to a percentage of container width
		  masonry: { columnWidth: $container.width() / calculate_nb_columns() }
	  });
	});


	//slick nav
	$(function(){
		$('#site-navigation').slicknav();
	});
} )( jQuery );


