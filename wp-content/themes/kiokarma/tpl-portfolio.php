<div id="portfolio" class="portfolio-area" >
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
?>
        <article id="post-<?php echo $portfolio->ID; ?>" class="post-<?php echo $portfolio->ID; ?> project type-project status-publish has-post-thumbnail hentry animation has-post-content" >
          <div class="project-thumbnail"> <a href="<?php echo get_the_permalink($portfolio->ID); ?>"> <img src="<?php echo $url[0]; ?>" class="attachment-project wp-post-image" alt="<?php echo get_the_title($portfolio->ID); ?>"> </a></div>
        </article>
<?php		
	}
}
?>
	
</div>