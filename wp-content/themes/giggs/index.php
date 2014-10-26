<?php get_header();?>

	<div id="content" class="site-content clearfix">
	
		<div id="home-primary" class="clearfix">
			<div class="slide-text">
				<?php
					$textHome = get_option('text_for_homepage')
				?>
				<h1>
					<?php echo $textHome;?>
				</h1>

				<a class="slide-cta" href="#">What&#039;s your story?</a>
				
			</div><!-- end .slide-text -->
		</div><!-- end #home-primary -->

	
		<?php
			get_template_part('tpl','portfolio');
		?>


	</div><!-- end #content -->

<?php get_footer();?>