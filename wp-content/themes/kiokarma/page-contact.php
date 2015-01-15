<?php get_header();?>
<div id="site" class="site">
  <?php get_template_part('tpl','header');?>
  <main class="site-main" role="main">
    <div class="page-header">
    	<?php
			$idContact = get_page_id_by_slug('contact');
			$contact = get_post($idContact);
			$bigTitle = get_post_meta($idContact,'tt_page_introduce',true);
			$smalltext = get_post_meta($idContact,'tt_page_smalltext',true);
			//print_r($contact->post_content);
		?>
      <h1 class="page-title">If you are interested in working with me, please get in touch.</h1>
      <div class="page-subtitle">I’d love to learn more about your project.</div>
    </div>
    <div class="page-content"> 
    	<article id="post-8" class="post-8 page type-page status-publish hentry has-post-content">
    		<div class="post-content">
    			<?php echo apply_filters('the_content', $contact->post_content)?>
    		</div>
    	</article>
    	<div id="contact" class="contact-area">
    		<?php echo do_shortcode('[contact-form-7 id="334" title="Contact form 2"]'); ?>
    	</div>
    </div>
    <?php get_sidebar();?>
  </main>

<?php get_footer();?>  
