<?php get_header();?>

	<div id="content" class="site-content clearfix contactPage">
		<header class="page-header">
			<?php
				$idContact = get_page_id_by_slug('contact');
				$contact = get_post($idContact);
				$bigTitle = get_post_meta($idContact,'tt_page_introduce',true);
				$smalltext = get_post_meta($idContact,'tt_page_smalltext',true);
				//print_r($contact->post_content);
			?>
			<h1 class="page-title">
				<?php echo $bigTitle;?>		</h1><!-- end .page-title -->
	
						<div class="page-description">
					<?php echo $smalltext;?>		</			</div><!-- end .page-description -->
			
		</header>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<article id="post-150" class="post-150 page type-page status-publish hentry">
			
				<section class="entry-content">
					<?php echo apply_filters('the_content', $contact->post_content)?>
					<?php echo do_shortcode('[contact-form-7 id="90" title="Contact form"]'); ?>
				</section><!-- end .entry-content -->
			
			</article><!-- end #post-## -->
			
		</main><!-- end #main -->
	</div><!-- end #primary -->


		<?php get_sidebar('contact')?>
	</div><!-- end #content -->
<?php get_footer();?>