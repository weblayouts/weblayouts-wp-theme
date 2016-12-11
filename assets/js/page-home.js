/** 
 * Scripts happening on the home page
 * ---------------------------------------- 
*/
wl_document.ready().then(function(){//only when page is fully loaded

	wl_document.stylesheetLoaded('non-critical').then(function(){
		window.setTimeout(function(){
			
			console.log('>>>>>> [non-critical] loaded!!!!' );
			//Generate masonry on latest posts
			let msnry = new Masonry( '.content-latest-articles', {
			  itemSelector: '.post-sample-frame'
			});
		}, 500);
	});

	console.log('>>>>>>', document.querySelector('link[href*="non-critical"') );
	
});

