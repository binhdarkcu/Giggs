<div id="portfolio" class="clearfix">

			<?php
				$args_portfolio = array(
					'post_type' 	 => 'post',
					'posts_per_page' =>  -1 ,
					'order'			 => 'asc'
				);
				$query_portfolio = get_posts($args_portfolio);
				$i = 0;
				$j = 1;
                foreach ( $query_portfolio as $portfolio ) {
            	$url = wp_get_attachment_image_src( get_post_thumbnail_id($portfolio->ID), 'large' );
				//print_r($portfolio);
					
			?>
			<article id="post-<?php echo $portfolio->ID;?>" class="post-<?php echo $portfolio->ID;?> portfolio-items type-portfolio-items status-publish has-post-thumbnail hentry">
	
				<div class="portfolio-thumb">
	
					<a href="<?php echo get_the_permalink($portfolio->ID);?>">
						<span class="portfolio-thumb-overlay">
							<div class="overlay-inner">
								<h1><?php echo get_the_title($portfolio->ID);?><br /><span>View Project</span></h1>
							</div><!-- end .overlay-inner -->
						</span>					
						<img width="1000" height="700" src="<?php echo $url[0];?>" class="attachment-portfolio-thumb wp-post-image" alt="<?php the_title();?>" />				
					</a>
							
				</div><!-- end .portfolio-thumb -->
	
			</article><!-- end #post-## -->

			<?php }?>

		
	</div><!-- end #portfolio .clearfix -->