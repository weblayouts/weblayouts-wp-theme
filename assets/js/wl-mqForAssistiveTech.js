/**
 * [mqForAssistiveTech] : Media queries for assistive technologies
 * Track web layouts width adjust element tabindex accordingly
 * -------------------------------------------------------------
 * Hide elements from screen readers and keyboards when necessary
*/

let wl_mqForAssistiveTech = (function(){
	let _public = {},
		_priv 	= {};


	_priv.layoutChanges = function(mq){ 

		//When we are on large devices
		if(mq.matches){
			//...
			_priv.showElement(_priv.hLogoLarge);
			_priv.showElement(_priv.fLogoLarge);
			_priv.hideElement(_priv.hLogoSmall);
			_priv.hideElement(_priv.fLogoSmall);
			_priv.hideElement(_priv.btnHamburger);
		}
		//When we are on smaller devices
		else{
			//...
			_priv.showElement(_priv.hLogoSmall);
			_priv.showElement(_priv.fLogoSmall);
			_priv.showElement(_priv.btnHamburger);
			_priv.hideElement(_priv.hLogoLarge);
			_priv.hideElement(_priv.fLogoLarge);
		}
	};
//

	//Hide it for screen reader ...
	//(remove it from the tab order)
	_priv.hideElement = function(elt){
		elt.setAttribute('tabindex','-1');
	};

	//Show it for screen reader ...
	//(put it back from the tab order)
	_priv.showElement = function(elt){
		elt.setAttribute('tabindex','0');
	};




	_public.initialize = function(){
		//...
		_priv.btnHamburger = document.getElementById('btn-hamburger');
		_priv.hLogoLarge = document.querySelector('.main-logo-large');
		_priv.hLogoSmall = document.querySelector('.main-logo-small');
		_priv.fLogoLarge = document.querySelector('.main-footer .main-logo-large');
		_priv.fLogoSmall = document.querySelector('.main-footer .main-logo-small');


		// if(typeof matchMedia=='function'){  console.log('>>>>>');
			let mq_large_devices = window.matchMedia('(min-width: 62em)');
			mq_large_devices.addListener(_priv.layoutChanges);
			_priv.layoutChanges(mq_large_devices);
		// }else{
		// 	console.log('ssss>>>>>');
		// }
	};


	return _public;
})();



