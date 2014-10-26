<?php get_header('single');?>
	<?php
		while ( have_posts() ) : the_post();
		$post = get_post(get_the_ID());
		$smalltext = get_post_meta(get_the_ID(),'tt_port_smalltext',true); 
		$description = get_post_meta(get_the_ID(),'tt_port_description',true);
		$port_clients = get_post_meta(get_the_ID(),'tt_port_clients',true);
		$port_skills = get_post_meta(get_the_ID(),'tt_port_skills',true);
		$port_projectlink = get_post_meta(get_the_ID(),'tt_port_projectlink',true);
		
	?>
	<div id="content" class="site-content clearfix">
		<header class="page-header clearfix">
	
			<div class="single-portfolio-header">
			
				<h1 class="page-title">
					<?php echo get_the_title($post->ID);?>			
				</h1><!-- end .page-title -->
	
				<div class="page-description">
					<?php echo $smalltext;?>
				</div><!-- end .page-description -->
				
			</div><!-- end .single-portfolio-header -->
	
			<div class="single-portfolio-nav clearfix">
				
				<div class="prev-project link">
					<?php previous_post('&larr; %','','yes'); ?>
				</div>
				<div class="next-project link">
					<?php next_post('% &rarr;','  ','yes'); ?>
				</div>
			</div><!-- end .single-portfolio-nav -->
	
		</header><!-- end .page-header -->

	
		
		
		<article id="post-259" class="post-259 portfolio-items type-portfolio-items status-publish has-post-thumbnail hentry clearfix">

				
			<div class="single-portfolio-media">
				<?php echo get_the_content($post->ID);?>		
			</div><!-- end .single-portfolio-media -->				
			<div class="single-portfolio-detail clearfix">
			
				<div class="entry-content">
					<?php echo $description;?>
				</div><!-- end .entry-content -->
			
				<div class="portfolio-meta">
			
					<span class="portfolio-meta-type">
						Date				
						<span class="portfolio-meta-value">
							<?php the_time('F Y');?>
						</span>
					</span><!-- end .portfolio-meta-type -->
					
					<span class="portfolio-meta-type">
						Client				
						<span class="portfolio-meta-value"><?php echo $port_clients;?></span>
					</span><!-- end .portfolio-meta-type -->
					
					<span class="portfolio-meta-type">
						Skills									
						<span class="portfolio-meta-value"><?php echo $port_skills;?></span>
					</span><!-- end .portfolio-meta-types -->
		
					<a href="<?php if(!empty($port_projectlink)) echo $port_projectlink; else echo'javascript:void(0)';?>">Launch Project &rarr;</a>
					
				</div><!-- end .portfolio-meta -->
			
			</div><!-- end .single-portfolio-detail -->
		</article><!-- end #post-## -->

	</div><!-- end #content -->
	<?php endwhile; ?>
<?php get_footer();?>