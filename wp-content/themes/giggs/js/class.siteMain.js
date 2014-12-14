// JavaScript Document
var siteMain = (function() {
	//PARAMATER
	var setting = {
		font	:	13,
		w		:	1360
	}
	var s = '';
	//INIT
	function init(){
		respone();
		jQuery(window).resize(function(){
			responsiveAbout();
			respone();
		});
		//createScrolr();
		parallaxHome();
	}
	
	
	function openLightBox(){
		//jQuery( '.aboutLightBox a' ).swipebox();
		jQuery('a.gestaltenLink').bind("click", (function (e) {
			e.preventDefault();
			//jQuery('.aboutLightBox').css({'display':'block'});
			jQuery( '.gestaltenBox a' ).first().trigger('click');
			//Fresco.show({ options: { ui: 'inside' } });
		}));
		jQuery('a.indexbookLink').bind("click", (function (e) {
			e.preventDefault();
			//jQuery('.aboutLightBox').css({'display':'block'});
			jQuery( '.indexbookBox a' ).first().trigger('click');
			//Fresco.show({ options: { ui: 'inside' } });
		}));
	}
	var iScrollPos = 0;
	function parallaxHome(){
		jQuery(window).scroll(function () {
		    var iCurScrollPos = $(this).scrollTop();
		    if (iCurScrollPos > iScrollPos) {
		    	console.log($(this).scrollTop());
		        //Scrolling Down
		        jQuery('.wrapBG').css({'top':$(this).scrollTop()});
		        jQuery('#portfolio').css({'margin-top':-$(this).scrollTop()});
		        //jQuery('#home-primary .slide-text').css({'top' : - $(this).scrollTop() + 90 });
		    } else {
		       //console.log($(this).scrollTop());
		       //Scrolling Up
		       jQuery('.wrapBG').css({'top':$(this).scrollTop()},100);
		       jQuery('#portfolio').css({'margin-top':-$(this).scrollTop()});
		       //jQuery('#home-primary .slide-text').css({'top' : - $(this).scrollTop() });
		    }
		    iScrollPos = iCurScrollPos;
		});
	}
	function createScrolr(){
		if(isDesktop){
			s = skrollr.init({
				forceHeight: false
			});
			s.refresh();
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
		if((jQuery(window).width()<767) || (iPad && jQuery(window).width()<=768)){
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
		responsiveAbout:responsiveAbout,
		openLightBox:openLightBox,
		calHeightContact:calHeightContact
	}
	
})();	

jQuery(document).ready(function(){
	siteMain.init();
	setTimeout(function(){
		jQuery('#sidr-containr').css({'display':'block'});
	},1000);
});
jQuery(window).load(function(){
	siteMain.responsiveAbout();
	siteMain.calHeightContact();
	siteMain.openLightBox();
	if(iSingle){
		jQuery('.main-navigation ul li.portfolio_single, #footer-navigation ul li.portfolio_single').addClass('current-menu-item');
	}
	
	
});