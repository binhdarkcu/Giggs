<?php get_header();?>
<div class="bgBannerTop bannerContact">
    <div class="bgBanner"></div>
  </div>
<div id="site" class="site">
  <?php get_template_part('tpl','header');?>
  <main class="site-main contactPage" role="main">
    <div class="page-header">
    	<?php
			$idContact = get_page_id_by_slug('contact');
			$contact = get_post($idContact);
			$bigTitle = get_post_meta($idContact,'tt_page_introduce',true);
			$smalltext = get_post_meta($idContact,'tt_page_smalltext',true);
			//print_r($contact->post_content);
		?>
      <h1 class="page-title"><span>GET IN TOUCH</span></h1>
      <div class="page-subtitle">Feel free to contact me for your freelance work or your personal project</div>
    </div>
    <div class="page-content contact-content"> 
    	<article  style="display: none" id="post-8" class="post-8 page type-page status-publish hentry has-post-content">
    		<div class="post-content">
    			<?php echo apply_filters('the_content', $contact->post_content)?>
    		</div>
    	</article>
    	<div id="contact" class="contact-area">
        <div class="wpcf7" id="wpcf7-f399-o1" lang="en-US" dir="ltr">
        <div class="screen-reader-response"></div>
        <form name="" action="/contact/#wpcf7-f399-o1" method="post" class="wpcf7-form" novalidate="novalidate">
        <div style="display: none;">
        <input type="hidden" name="_wpcf7" value="399">
        <input type="hidden" name="_wpcf7_version" value="3.9.3">
        <input type="hidden" name="_wpcf7_locale" value="en_US">
        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f399-o1">
        <input type="hidden" name="_wpnonce" value="0e20d38415">
        </div>
        <p class="contact-form-author">
            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name *"></span>
        </p>
        <p class="contact-form-email">
            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your email *"></span>
        </p>
        <p class="contact-form-message">
            <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message *"></textarea></span>
        </p>
        <p class="contact-form-submit"><input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit"></p>
        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>     </div>
    </div>
    <?php get_sidebar();?>
  </main>
</div>
<?php get_footer();?>  
