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
                <?php echo do_shortcode( '[contact-form-7 id="90" title="Contact form"]' ); ?>

        </div>
    </div>
    <?php get_sidebar();?>
  </main>
</div>
<?php get_footer();?>  
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery.validator.addMethod('selectcheck', function (value) {
            return (value != '0');
        }, "");

        jQuery("#contact form.wpcf7-form").validate({
            rules: {
                'your-name': {
                    required: true
                },
                'your-email': {
                    required: true,
                    email: true
                },
                'your-message': {
                    required: true
                }
            },

            errorPlacement: function(error, element){},
            highlight: function(element) {
                //console.log(element);
                if(jQuery(element).is(':checkbox'))
                {
                    var name = $(element).attr('name');
                    jQuery('input[name='+name+']').addClass('error');
                }
                else
                {
                    jQuery(element).addClass('error');
                }
            },
            unhighlight: function(element, errorClass, validClass) {
                jQuery(element).removeClass(errorClass).addClass(validClass); // remove error class from elements/add valid class
                
            },
            submitHandler: function(form) {
                form.submit();
            },
        });
    });
</script>