<?php get_header();?>

	<div id="content" class="site-content clearfix">
	
		<header class="page-header">
			<?php
				$idContact = get_page_id_by_slug('portfolio');
				$contact = get_post($idContact);
				$bigTitle = get_post_meta($idContact,'tt_page_introduce',true);
				$smalltext = get_post_meta($idContact,'tt_page_smalltext',true);
				//print_r($contact);
			?>
			<h1 class="page-title">
				<?php echo $bigTitle;?>		</h1><!-- end .page-title -->
	
						<div class="page-description">
					<?php echo $smalltext;?>		</div><!-- end .page-description -->
			
		</header>
		<?php
			get_template_part('tpl','portfolio');
		?>


	</div><!-- end #content -->

	<?php get_footer();?>