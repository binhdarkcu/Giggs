<?php get_header('single');?>

	<div id="content" class="site-content clearfix page-blog">
		<header class="page-header">
			
			<h1 class="page-title">
			The Blog		</h1><!-- end .page-title -->
	
						<div class="page-description">
					Words and things.			</div><!-- end .page-description -->
			
		</header><!-- end .page-header -->
		<?php
			while ( have_posts() ) : the_post();
			$post = get_post(get_the_ID());
			$url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large' );
			$cat = get_the_category(get_the_id());
			$category_link = get_category_link( $cat[0]->term_id );
			//print_r($post);	
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			
				<article id="post-381" class="post-381 post type-post status-publish format-standard has-post-thumbnail hentry category-design">

					<section class="entry-media">
						<img width="1000" height="500" src="<?php echo $url[0];?>" class="attachment-standard-format wp-post-image" alt="<?php echo get_the_title(get_the_ID());?>" />		
					</section><!-- end .entry-media -->
		
					<div class="entry-core">
						<header class="entry-header">
							<h1 class="entry-title"><?php echo get_the_title(get_the_ID());?></h1>
						</header><!-- end .entry-header -->
	
						<section class="entry-content">
							<?php echo get_the_content(get_the_ID());?>
							<p></p>
						</section><!-- end .entry-content -->
						<section class="entry-meta">
							<?php echo the_time('F j, Y')?><span class="meta-sep">/</span>
							<a href="<?php echo $category_link;?>" rel="category tag"><?php echo $cat[0]->cat_name;?></a><span class="meta-sep">/</span>
							<a href="<?php echo $category_link;?>#comments" title="<?php echo get_the_title(get_the_ID());?>">
								  <?php comments_number( '0 comment', '1 comment', '% comments' ); ?>.
							</a><span class="meta-sep">/</span>
							<a href="<?php echo get_the_permalink(get_the_ID());?>" title="<?php echo get_the_title(get_the_ID());?>">#</a>
						</section><!-- end .entry-meta -->		
					</div><!-- end .entry-core -->

				</article><!-- end #post-## -->
			
			<?php endwhile;?>
				<?php comments_template( '', true ); ?>
			
			</main><!-- end #main -->
		</div><!-- end #primary -->


		<?php get_sidebar();?>
	</div><!-- end #content -->

<?php get_footer();?>