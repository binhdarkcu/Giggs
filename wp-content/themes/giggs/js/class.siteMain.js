// JavaScript Document
var siteMain = (function() {
	//PARAMATER
	var setting = {
		font	:	13,
		w		:	1360,
		wWindow		:	0,
		hWindow		:	0,
		wShowVideo	:	0,
		hShowVideo	:	0,
		wMeta		: 	0,
		hMeta		: 	0,
	}
	
	var items = {
		wVideo		:	0,
		hVideo		:	0,
	}
	var s = '';
	//INIT
	function init(){
		setting.wMeta = 1280;
		setting.hMeta = 720;
		respone();
		jQuery(window).resize(function(){
			responsiveAbout();
			respone();
		});
		//createScrolr();
		if(isDesktop){
			parallaxHome();
		}
		
	}
	
	function setFullsreenVideoBG(w, h){
		setting.wWindow = $('.single-portfolio-media').width();
		setting.hWindow = $('.video-js').height();
		
		setting.wShowVideo = setting.wWindow;
		setting.hShowVideo = setting.hWindow;
		
		//Get rate between video display and width video
		$wRate = setting.wShowVideo/w;
		$hRate = setting.hShowVideo/h;
		
		if($wRate > $hRate) $rate = $wRate;
		else $rate = $hRate;
		
		setting.wVideo = $rate * w ;
		setting.hVideo = $rate * h ;
		
		$('.video-js, .vjs-poster,.video-js .vjs-tech, #videoBG_html5_api').css({'width': setting.wVideo, 'height': setting.hVideo});
		//setvideo_align_center();	
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
	var iScrollPos = 0;
	function parallaxHome(){
		jQuery(window).scroll(function () {
		    var iCurScrollPos = $(this).scrollTop();
		    if (iCurScrollPos > iScrollPos) {
		    	console.log($(this).scrollTop());
		        //Scrolling Down
		        jQuery('.wrapBG').css({'top':$(this).scrollTop()});
		        jQuery('.content-home #portfolio').css({'margin-top':-$(this).scrollTop()});
		        //jQuery('#home-primary .slide-text').css({'top' : - $(this).scrollTop() + 90 });
		    } else {
		       //console.log($(this).scrollTop());
		       //Scrolling Up
		       jQuery('.wrapBG').css({'top':$(this).scrollTop()},100);
		       jQuery('.content-home #portfolio').css({'margin-top':-$(this).scrollTop()});
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