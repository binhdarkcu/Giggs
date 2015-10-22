<?php get_header();?>
<div class="bgBannerTop bannerSingle">
    <div class="bgBanner"></div>
  </div>
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
  <main class="site-main singlePage" role="main">
    <div class="page-header-single">
      <h1 class="page-title"><?php echo strip_tags(get_the_title($post->ID),'<br />');?></h1>
      <div class="page-subtitle"><?php echo $smalltext;?></div>
    </div>
    <div class="page-content"> 
    	<article id="post-8" class="post-8 page type-page status-publish hentry has-post-content">
    		<div class="post-content">
    			<?php echo the_content();//get_the_content($post->ID);?>
    		</div>
    	</article>
    	
    	
    </div>
    <div class="page-sidebar" role="complementary"> 
    	<aside id="text-2" class="widget widget_text">
    		<h6 class="widget-title">Client</h6>
    		<div class="textwidget">
    			<?php echo $port_clients;?>
			</div> 
    	</aside>
        <aside id="recent_projects-2" class="widget widget_recent_projects">
            <h6 class="widget-title">Project    </h6>
            <div class="textwidget">
                <?php echo $port_projects;?>
            </div>
        </aside>
    	<aside id="recent_projects-3" class="widget widget_recent_projects launchproject">
    		<div class="textwidget">
    			<?php if(!empty($port_projectlink)) {?>
				<a target="_blank" class="launch" href="<?php echo $port_projectlink;?>">Launch WEBSITE</a>
				<?php }?>
    		</div>
    	</aside>
    	<nav class="project-navigation sidebar-navigation" role="navigation">
            <span class="project-navigation-left">
                <?php c2c_next_or_loop_post_link();?>
            </span>
            <span class="project-navigation-right">
                <?php c2c_previous_or_loop_post_link();?>
            </span>
        </nav>
    </div>
  </main>
  <?php endwhile; ?>
</div>
<?php get_footer();?>  
