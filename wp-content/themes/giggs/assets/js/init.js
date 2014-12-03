jQuery(document).ready(function() {

	/*--------------------------------------------------*/
	/* Flexslider
	/*--------------------------------------------------*/

	

	/*--------------------------------------------------*/
	/* Sidr Navigation
	/*--------------------------------------------------*/
	var iC = 1;
	jQuery(document).ready(function() {
		if(!iMobile){
			jQuery('.simple-menu').sidr({
				side: 'right'
			});
		}else{
			jQuery('.simple-menu').on('click touchstart',function(){
				//alert(1);
				if(iC == 1){
					jQuery('#sidr').show().animate({'right':0}, 500);
					jQuery('body').css('position','absolute');
					jQuery('body').animate({'right':jQuery('#sidr').width()}, 500);
					iC = 0;
				}else{
					jQuery('#sidr').show().animate({'right':'-40%'}, 500);
					jQuery('body').animate({'right':0}, 500,function(){
						jQuery('body').removeAttr('style');
					});
					iC = 1;
				}
			});
		}
	});

	/*--------------------------------------------------*/
	/* FitVids
	/*--------------------------------------------------*/

	jQuery(".entry-content").fitVids();
	jQuery(".entry-media").fitVids();
	jQuery(".single-portfolio-media").fitVids();

	/*--------------------------------------------------*/
	/* Masonry Portfolio
	/*--------------------------------------------------*/

	var container = jQuery('.masonry-portfolio');
	// initialize Masonry after all images have loaded  
	container.imagesLoaded( function() {
		container.masonry({
			itemSelector: '.portfolio-items',
			columnWidth: '.portfolio-items'
		});
	});

	/*--------------------------------------------------*/
	/* Portfolio image hovers
	/*--------------------------------------------------*/

	function image_hover_fadein() {
	
		var postThumb = jQuery('.portfolio-thumb a');
		
		postThumb.hover( function() {
			jQuery(this).find('.portfolio-thumb-overlay').css({
				display: 'block'
			});
			jQuery(this).find('.portfolio-thumb-overlay .overlays').stop(true, false).css({
				opacity: 0
			}).animate({
				opacity: 0.65
			}, 500);
			
		}, function() {
			jQuery(this).find('.portfolio-thumb-overlay').stop(true, false).fadeOut(500);
		});
		
	}
	
	//image_hover_fadein();

});