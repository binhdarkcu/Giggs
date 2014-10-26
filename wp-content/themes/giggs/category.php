<?php get_header('single');?>

	<div id="content" class="site-content clearfix">
		<header class="page-header">
		<?php 
			 $queried_object = get_queried_object();
			 //print_r($queried_object);
		?>
		<h1 class="page-title" style="text-align: center;">
			Category: <?php echo $queried_object->name;?>		</h1><!-- end .page-title -->

	</header>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">		
				<?php
					$args_blog = array(
						'post_type' 	 => array('blogs','post'),
						'posts_per_page' =>  -1 ,
						'category'		 => $queried_object->term_id,
						'order'			 => 'asc'
					);
					$query_blogs = get_posts($args_blog);
					$i = 0;
					$j = 1;
	                foreach ( $query_blogs as $blog ) {
	            	$url = wp_get_attachment_image_src( get_post_thumbnail_id($blog->ID), 'large' );
					//print_r($blog);
					$cat = get_the_category($blog->ID);
					$category_link = get_category_link( $cat[0]->term_id );
				?>
				
				<article id="post-<?php echo $blog->ID;?>" class="post-<?php echo $blog->ID;?> post type-post status-publish format-standard has-post-thumbnail hentry category-design">
				
					<section class="entry-media">
						<a href="<?php echo get_the_permalink($blog->ID)?>" rel="bookmark">
							<img width="1000" height="500" src="<?php echo $url[0];?>" class="attachment-standard-format wp-post-image" alt="<?php echo get_the_title($blog->ID);?>" />
						</a>
					</section><!-- end .entry-media -->
					
					<div class="entry-core">
				
						<header class="entry-header">
				
							<h1 class="entry-title">
								<a href="<?php echo get_the_permalink($blog->ID)?>" rel="bookmark"><?php echo get_the_title($blog->ID);?></a>
							</h1><!-- end .entry-title -->
				
						</header><!-- end .entry-header -->
				
						<section class="entry-content">
							<p><?php echo wp_trim_words($blog->post_content,47,'');?></p>
							<p> <a href="<?php echo get_the_permalink($blog->ID)?>" class="more-link">Continue reading <span class="meta-nav">&rarr;</span></a></p>
						</section><!-- end .entry-content -->	
						<section class="entry-meta">
							<?php echo the_time('F j, Y')?>
							<span class="meta-sep">/</span>
							<a href="<?php echo $category_link;?>" rel="category tag"><?php echo $cat[0]->cat_name;?></a>
							<span class="meta-sep">/</span>
							<a href="<?php echo get_the_permalink($blog->ID)?>#comments" title="Comments on '<?php echo get_the_title($blog->ID);?>'">0 comments</a><span class="meta-sep">/</span>
							<a href="<?php echo get_the_permalink($blog->ID)?>" title="<?php echo get_the_title($blog->ID);?>">#</a>
						</section><!-- end .entry-meta -->		
					</div><!-- end .entry-core -->
				
				</article><!-- end #post-## -->
				
				<?php }?>
				<nav role="navigation" id="nav-below" class="paging-navigation">
		
					<div class="nav-previous"><a href="http://demo.pau1winslow.com/giggs/blog/page/2/" >
						<span class="meta-nav">&larr;</span> Older posts</a>
					</div>
		
				</nav><!-- #nav-below -->
		
			
			</main><!-- end #main -->
		</div><!-- end #primary -->


		<?php get_sidebar();?>
	</div><!-- end #content -->

<?php get_footer();?>