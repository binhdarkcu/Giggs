// JavaScript Document
var siteMain = (function() {
	//PARAMATER
	var setting = {
		font	:	13,
		w		:	1200
	}
	//INIT
	function init(){
		responsiveAbout();
		calHeightContact();
		respone();
		jQuery(window).resize(function(){
			responsiveAbout();
			respone();
		});
	}
	
	function respone(){
		var w = jQuery(window).width();
		setting.font = (w*13)/setting.w;
		jQuery('#services .service').css('font-size', setting.font + 'px' );
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
		init:init,
		responsiveAbout:responsiveAbout
	}
	
})();	

jQuery(document).ready(function(){
	siteMain.init();
});
jQuery(window).load(function(){
	siteMain.init();
});