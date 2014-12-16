<div id="portfolio" class="clearfix">
<?php
	$cached='';
	$cached = wf_getCache('c-portfolio');
				
	if( $cached == '')
	{
		//truy van lai
		$cached = list_portfolio();
		wf_setCache('c-portfolio',$cached);
		
	}
	else {
		echo $cached;
	}
?>
<?php
function list_portfolio(){
	$args_portfolio = array(
		'post_type' 	 => 'post',
		'posts_per_page' =>  -1 ,
		'order'			 => 'asc'
	);
	$query_portfolio = get_posts($args_portfolio);
	//print_r($query_portfolio);
	$i = 0;
	$j = 1;
    foreach ( $query_portfolio as $portfolio ) {
		$url = wp_get_attachment_image_src( get_post_thumbnail_id($portfolio->ID), 'large' );
		$cached = '<article id="post-'.$portfolio->ID.'" class="post-'.$portfolio->ID.' portfolio-items type-portfolio-items status-publish has-post-thumbnail hentry">
						<div class="portfolio-thumb">
							<a href="'.get_the_permalink($portfolio->ID).'">
								<span class="portfolio-thumb-overlay">
									<div class="overlays"></div>
									<div class="overlay-inner">
										<h1>'.get_the_title($portfolio->ID).'<br /><span>View Project</span></h1>
									</div>
								</span>
								<img width="1000" height="700" src="'.$url[0].'" class="attachment-portfolio-thumb wp-post-image" alt="'.get_the_title($portfolio->ID).'" />
							</a>
						</div>
					</article>';
		echo $cached;
	}
}
?>
	
</div><!-- end #portfolio .clearfix -->