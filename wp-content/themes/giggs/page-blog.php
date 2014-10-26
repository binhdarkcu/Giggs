<?php get_header('single');?>

	<div id="content" class="site-content clearfix">
		<header class="page-header" style="text-align: center;">
			
			<h1 class="page-title">
			The Blog		</h1><!-- end .page-title -->
	
						<div class="page-description">
					Words and things.			</div><!-- end .page-description -->
			
		</header><!-- end .page-header -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">		
				<?php
					global $paged;
					$args_blog = array(
						'post_type' 	 => 'blogs',
						'posts_per_page' =>  2 ,
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
				
				<article id="post-<?php echo get_the_id();?>" class="post-<?php echo get_the_id();?> post type-post status-publish format-standard has-post-thumbnail hentry category-design">
				
					<section class="entry-media">
						<a href="<?php echo get_the_permalink(get_the_id())?>" rel="bookmark">
							<img width="1000" height="500" src="<?php echo $url[0];?>" class="attachment-standard-format wp-post-image" alt="<?php echo get_the_title(get_the_id());?>" />
						</a>
					</section><!-- end .entry-media -->
					
					<div class="entry-core">
				
						<header class="entry-header">
				
							<h1 class="entry-title">
								<a href="<?php echo get_the_permalink(get_the_id())?>" rel="bookmark"><?php echo get_the_title(get_the_id());?></a>
							</h1><!-- end .entry-title -->
				
						</header><!-- end .entry-header -->
				
						<section class="entry-content">
							<p><?php echo wp_trim_words(get_the_content(get_the_id()),47,'');?></p>
							<p> <a href="<?php echo get_the_permalink(get_the_id())?>" class="more-link">Continue reading <span class="meta-nav">&rarr;</span></a></p>
						</section><!-- end .entry-content -->	
						<section class="entry-meta">
							<?php echo the_time('F j, Y')?>
							<span class="meta-sep">/</span>
							<a href="<?php echo $category_link;?>" rel="category tag"><?php echo $cat[0]->cat_name;?></a>
							<span class="meta-sep">/</span>
							<a href="<?php echo get_the_permalink(get_the_id())?>#comments" title="Comments on '<?php echo get_the_title(get_the_id());?>'">
								<?php comments_number( '0 comment', '1 comment', '% comments' ); ?>.
							</a><span class="meta-sep">/</span>
							<a href="<?php echo get_the_permalink(get_the_id())?>" title="<?php echo get_the_title(get_the_id());?>">#</a>
						</section><!-- end .entry-meta -->		
					</div><!-- end .entry-core -->
				
				</article><!-- end #post-## -->
				
				<?php endwhile; endif;?>
				<nav role="navigation" id="nav-below" class="paging-navigation">
					
					<div class="nav-previous">
						<?php next_posts_link('<span class="meta-nav">&larr;</span> Older Posts');?>
					</div>
					<div class="nav-next">
						<?php previous_posts_link('Newer Posts <span class="meta-nav">&rarr;</span> ');?>		
					</div>
				</nav><!-- #nav-below -->
		
			
			</main><!-- end #main -->
		</div><!-- end #primary -->


		<?php get_sidebar();?>
	</div><!-- end #content -->

<?php get_footer();?>