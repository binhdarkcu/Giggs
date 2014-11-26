// JavaScript Document
var siteMain = (function() {
	//PARAMATER

	//INIT
	function init(){
		responsiveAbout();
		calHeightContact();
		jQuery(window).resize(function(){
			responsiveAbout();
		});
	}
	
	//FUNCTIONS
	function responsiveAbout(){
		jQuery('#services .service').height(jQuery('#services .service img').height());
	}
	
	function calHeightContact(){
		jQuery('#sidebar .bgwhite').height(jQuery('.page .contactPage #primary').height() + 230);
	}
	//RETURN
	return {
		init:init
	}
	
})();	

jQuery(document).ready(function(){
	siteMain.init();
});
