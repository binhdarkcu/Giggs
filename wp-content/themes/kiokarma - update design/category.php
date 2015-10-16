<?php get_header('blog');?>
<div id="site" class="site">
  <?php get_template_part('tpl','header');?>
  <main class="site-main" role="main">
  	<?php 
		 $queried_object = get_queried_object();
		 //print_r($queried_object);
	?>
    <div class="page-header">
    	<h1 class="page-title"><?php echo $queried_object->name;?>	</h1>
    	<div class="page-subtitle"><p>Category description</p></div>
    </div>
    <div class="page-content"> 
    	<?php
			global $paged;
			$args_blog = array(
				'post_type' 	 => 'blogs',
				'posts_per_page' =>  3 ,
				'category'		 => $queried_object->term_id,
				'order'			 => 'asc',
				'paged'		=> $paged
			);
			query_posts( $args_blog );
			if(have_posts()): while(have_posts()): the_post();
        	$url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large' );
			//print_r($blog);
			$cat = get_the_category(get_the_id());
			$category_link = get_category_link( $cat[0]->term_id );
		?>
    	<article id="post-<?php echo get_the_id();?>" class="post-<?php echo get_the_id();?> post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-tag-1 has-post-content">
    		<div class="post-thumbnail">
    			<div class="post-thumbnail-inner"> 
    				<a href="<?php echo get_the_permalink(get_the_id())?>"> 
    					<img width="380" height="380" src="<?php echo $url[0];?>" class="attachment-post-thumbnail wp-post-image" alt="blog_thumbnail_1"> 
    				</a>
    			</div>
    		</div>
    		<h1 class="post-title">
    			<a href="<?php echo get_the_permalink(get_the_id())?>"><?php echo get_the_title(get_the_id());?></a>
    		</h1>
    		<div class="post-meta">
    			<span class="post-date">
    				<a href="<?php echo get_the_permalink(get_the_id())?>" rel="bookmark">
    					<time datetime="<?php echo the_time('F j, Y')?>"><?php echo the_time('F j, Y')?></time>
    				</a>
    			</span>
    			<span class="post-comments">
    				<a href="<?php echo get_the_permalink(get_the_id())?>#comments" title="Comments on '<?php echo get_the_title(get_the_id());?>'"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></a>
    			</span>
    			<span class="post-categories">
    				<a href="<?php echo $category_link;?>" rel="category tag"><?php echo $cat[0]->cat_name;?></a>
    			</span>
    		</div>
    		<div class="post-content">
    			<p><?php echo wp_trim_words(get_the_content(get_the_id()),47,'');?></p> 
				<a class="post-more" href="<?php echo get_the_permalink(get_the_id())?>">Read more</a>
    		</div> 
    	</article>
    	<?php endwhile; endif;?>
    	<nav class="page-navigation" role="navigation">
    		<?php echo bt_paginate();?>	
    	</nav>
    	
    </div>
    <?php get_sidebar();?>
  </main>
<?php get_footer();?>  
