jQuery(document).ready(function() {

	/*--------------------------------------------------*/
	/* Flexslider
	/*--------------------------------------------------*/

	jQuery(document).ready(function() {
		jQuery('.flexslider').flexslider({
			smoothHeight: true,
			controlNav: true,
			directionNav: false,
			animation: 'fade'
		});
	});

	/*--------------------------------------------------*/
	/* Sidr Navigation
	/*--------------------------------------------------*/

	jQuery(document).ready(function() {
		jQuery('.simple-menu').sidr({
			side: 'right'
		});
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
		
			jQuery(this).find('.portfolio-thumb-overlay').stop().css({
				opacity: 0,
				display: 'block'
			}).animate({
				opacity: 1
			}, 500);
			
		}, function() {
			jQuery(this).find('.portfolio-thumb-overlay').stop().fadeOut(500);
		});
		
	}
	
	image_hover_fadein();

});