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
		if(jQuery(window).width() > 767 ){
			jQuery('#services .service').height(jQuery('#services .service.hasImg.normal img').height());	
		}else{
			jQuery('#services .service').height(jQuery('#services .service.hasImg.mobile img').height());
		}
		
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
	if(iSingle){
		jQuery('.main-navigation ul li.portfolio_single').addClass('current-menu-item');
	}
	jQuery('#sidr-containr').css({'display':'block'});
});