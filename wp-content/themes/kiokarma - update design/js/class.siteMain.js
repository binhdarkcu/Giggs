// JavaScript Document
var siteMain = (function() {
	//PARAMATER
	var setting = {
		font	:	13,
		w		:	1180
	};
	var s = '';
	//INIT
	function init(){
		respone();
		jQuery(window).resize(function(){
			responsiveAbout();
			siteMain.responsiveHome();
			//respone();
		});
		
	}
	
	function openLightBox(){
		//jQuery( '.aboutLightBox a' ).swipebox();
		jQuery('a.gestaltenLink').click(function (e) {
			//e.preventDefault();
			//jQuery('.aboutLightBox').css({'display':'block'});
			jQuery( '.gestaltenBox a' ).first().trigger('click');
			//Fresco.show({ options: { ui: 'inside' } });
		});
		jQuery('a.indexbookLink').click(function (e) {
			//e.preventDefault();
			//jQuery('.aboutLightBox').css({'display':'block'});
			jQuery( '.indexbookBox a' ).first().trigger('click');
			//Fresco.show({ options: { ui: 'inside' } });
		});
	}
	
	
	function respone(){
		var w = jQuery(window).width();
		setting.font = (w*13)/setting.w;
		jQuery('.about-page').css('font-size', setting.font + 'px' );
	}
	//FUNCTIONS
	function responsiveAbout(){
		jQuery('#aboutPage .service').height(jQuery('#aboutPage .service.hasImg img').height());	
		if((jQuery(window).width()<980) || (iPad && jQuery(window).width()<=768)){
			jQuery('#aboutPage .service.service_image_3.mobile img').attr('src',jQuery('#aboutPage .service.hasImg_3.normal img').attr('src'));
			jQuery('#service_text_mobile_1').html(jQuery('#service_text_mobile_2').html());
		}
	}
	function responsiveHome(){
		jQuery('.portfolio-area .type-project').height(jQuery('.portfolio-area .type-project .project-thumbnail').height());	
	}
	
	function calHeightContact(){
		jQuery('#sidebar .bgwhite').height(jQuery('.page .contactPage #primary').height() + 230);
	}
	//RETURN
	return {
		init:init,
		responsiveAbout:responsiveAbout,
		openLightBox:openLightBox,
		calHeightContact:calHeightContact,
		responsiveHome:responsiveHome
	};
	
})();	

jQuery(document).ready(function(){
	siteMain.init();
});
jQuery(window).load(function(){
	siteMain.responsiveAbout();
	//siteMain.calHeightContact();
	siteMain.responsiveHome();
	siteMain.openLightBox();
	if(iSingle){
		jQuery('.main-navigation ul li.portfolio_single, #footer-navigation ul li.portfolio_single').addClass('current-menu-item');
	}
	
});