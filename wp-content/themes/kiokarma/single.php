<?php get_header();?>
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
      <div class="page-subtitle"><?php echo $smalltext;?></div>
    </div>
    <div class="page-content"> 
    	<article id="post-8" class="post-8 page type-page status-publish hentry has-post-content">
    		<div class="post-content">
    			<?php echo the_content();//get_the_content($post->ID);?>
    		</div>
    	</article>
    	<nav class="project-navigation" role="navigation">
    		<span class="project-navigation-left">
    			<?php c2c_next_or_loop_post_link();?>
    		</span>
    		<span class="project-navigation-right">
    			<?php c2c_previous_or_loop_post_link();?>
    		</span>
    	</nav>
    	
    </div>
    <div class="page-sidebar" role="complementary"> 
    	<aside id="text-2" class="widget widget_text">
    		<h6 class="widget-title">Client</h6>
    		<div class="textwidget">
    			<?php echo $port_clients;?>
			</div> 
    	</aside>
    	<aside id="recent_projects-2" class="widget widget_recent_projects">
    		<h6 class="widget-title">Project	</h6>
    		<div class="textwidget">
    			<?php echo $port_projects;?>
    		</div>
    	</aside>
    	<aside id="recent_projects-3" class="widget widget_recent_projects">
    		<div class="textwidget">
    			<?php if(!empty($port_projectlink)) {?>
				<a target="_blank" class="launch" href="<?php echo $port_projectlink;?>">Launch Project</a>
				<?php }?>
    		</div>
    	</aside>
    	
    </div>
  </main>
  <?php endwhile; ?>
<?php get_footer();?>  
