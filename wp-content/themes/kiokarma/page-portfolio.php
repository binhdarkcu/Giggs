<?php get_header();?>
<div id="site" class="site">
  <?php get_template_part('tpl','header');?>
  <main class="site-main" role="main">
    <div class="page-header">
      <h1 class="page-title"><?php echo get_option('text_for_homepage'); ?>	</h1>
      <div class="page-subtitle">Currently available for select projects, collaborations and consulting.</div>
    </div>
    <div class="page-content">
      <article id="post-12" class="post-12 page type-page status-publish hentry">
        <div class="post-content"></div>
      </article>
      <div id="filter" class="filter-area"><span>Filter:</span><span><a href="#" class="active" value="*">All</a></span><span><a href="#" value=".animation">Animation</a></span><span><a href="#" value=".branding">Branding</a></span><span><a href="#" value=".print-design">Print Design</a></span><span><a href="#" value=".video">Video</a></span></div>
      <?php get_template_part('tpl','portfolio');?>
    </div>
  </main>
<?php get_footer();?>  
