<?php get_header();?>
<div class="bgBannerTop bannerHomepage">
    <div class="bgBanner"></div>
  </div>
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
      
      <?php get_template_part('tpl','portfolio');?>
    </div>
  </main>
</div>
<?php get_footer();?>  
