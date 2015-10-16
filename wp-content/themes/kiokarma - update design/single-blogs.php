<?php get_header('blog');?>
<div id="site" class="site">
  <?php get_template_part('tpl','header');?>
  
  <?php
	while ( have_posts() ) : the_post();
	$post = get_post(get_the_ID());
	$smalltext = get_post_meta(get_the_ID(),'tt_port_smalltext',true); 
	$description = get_post_meta(get_the_ID(),'tt_port_description',true);
	$port_clients = get_post_meta(get_the_ID(),'tt_port_clients',true);
	$port_skills = get_post_meta(get_the_ID(),'tt_port_skills',true);
	$port_projectlink = get_post_meta(get_the_ID(),'tt_port_projectlink',true);
	$port_projects = get_post_meta(get_the_ID(),'tt_port_projects',true);
  ?>
  <main class="site-main" role="main">
    <div class="page-header">
      <h1 class="page-title"><?php echo strip_tags(get_the_title($post->ID),'<br />');?></h1>
      <div class="page-subtitle"><?php echo the_time('F j, Y')?></div>
    </div>
    <div class="page-content"> 
    	<article id="post-8" class="post-8 page type-page status-publish hentry has-post-content">
    		<div class="post-content">
    			<?php echo the_content();//get_the_content($post->ID);?>
    		</div>
    	</article>
    	<nav class="post-navigation" role="navigation">
    		<div class="div_navi">
    			<span>Previous Post</span>
    			<?php 
					c2c_next_or_loop_post_link();
				?>
    		</div>
    		<div class="div_navi">
    			<span>Next Post</span>
    			<?php
    				c2c_previous_or_loop_post_link();
				?> 
    		</div>
    	</nav>
    	<?php comments_template( '', true ); ?>
    </div>
    <?php get_sidebar();?>
  </main>
  <?php endwhile; ?>
<?php get_footer();?>  
