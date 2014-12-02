// JavaScript Document
var siteMain = (function() {
	//PARAMATER
	var setting = {
		font	:	13,
		w		:	1200
	}
	var s = '';
	//INIT
	function init(){
		responsiveAbout();
		calHeightContact();
		respone();
		jQuery(window).resize(function(){
			responsiveAbout();
			respone();
		});
		createScrolr();
	}
	
	function createScrolr(){
		if(!iMobile){
			s = skrollr.init({
				forceHeight: false
			});
		}
	}
	function respone(){
		var w = jQuery(window).width();
		setting.font = (w*13)/setting.w;
		jQuery('#services .service').css('font-size', setting.font + 'px' );
	}
	//FUNCTIONS
	function responsiveAbout(){
		jQuery('#services .service').height(jQuery('#services .service.hasImg img').height());	
		if(jQuery(window).width()<767){
			jQuery('#services .service.service_image_3.mobile img').attr('src',jQuery('#services .service.hasImg_3.normal img').attr('src'));
			jQuery('#service_text_mobile_1').html(jQuery('#service_text_mobile_2').html());
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