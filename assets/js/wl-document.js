/** 
 * Operations conducted on the "document"
 * ----------------------------------------
 * ready(): Checks if the document is ready
*/
let wl_document = (function(){
	let _public = {};



	/** 
	 * Create a promise that resolves only when the document 'ready state' 
	 * is "complete" and call an action when that promise resolves.
	*/  
	_public.ready = function (){ 
	  return new Promise(function(resolve){
	    function checkState (){
	      //Only resolves if document is not 'loading'
	      if(document.readyState !== 'complete'){
	        resolve(); 
	      }
	    }
	    //Check ready state when 'readystatechange' event fires
	    document.addEventListener('readystatechange', checkState);
	    checkState();//also checks ready state immidiately
	  });
	};//ready()



	/** 
	 * Create a promise that resolves only when the query operated
	 * on that stylesheet returns an object
	*/  
	_public.stylesheetLoaded = function (partialName){ 
	  return new Promise(function(resolve){
	    function checkStylesheet (partialName){
	      //Only resolves if document is not 'loading'
	      let _stylesheet = document.querySelector('link[href*="'+partialName+'"');
	      if(typeof _stylesheet === 'object'){
	        resolve(); 
	      }
	    }
	    //Check ready state when 'readystatechange' event fires
	    document.addEventListener('readystatechange', checkStylesheet);
	    checkStylesheet(partialName);//also checks ready state immidiately
	  });
	};//ready()



	/** 
	 * Create a promise that resolves only when the document 'ready state' 
	 * is not on "loading" and call an action when that promise resolves.
	*/  
	_public.loading = function (){ 
	  return new Promise(function(resolve){
	    function checkState (){
	      //Only resolves if document is not 'loading'
	      if(document.readyState !== 'loading'){
	        resolve(); 
	      }
	    }
	    //Check ready state when 'readystatechange' event fires
	    document.addEventListener('readystatechange', checkState);
	    checkState();//also checks ready state immidiately
	  });
	};//ready()





	return _public;
})();