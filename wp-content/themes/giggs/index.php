<?php get_header();?>

	<div id="content" class="site-content clearfix">
	
		<div id="home-primary" class="clearfix">
			<div class="slide-text">
				<div class="txt-home">
					<?php
						$textHome = get_option('text_for_homepage');
					?>	
					<?php echo $textHome;?>
				</div>
				<div class="workfor">
					<ul>
						<li><a href="#"><img src="assets/images/nivea.png"/></a></li>
						<li><a href="#"><img src="assets/images/lexus.png"/></a></li>
						<li><a href="#"><img src="assets/images/lewis.png"/></a></li>
						<li><a href="#"><img src="assets/images/l-logo.png"/></a></li>
						<li><a href="#"><img src="assets/images/schwepp.png"/></a></li>
						<li><a href="#"><img src="assets/images/martini.png"/></a></li>
						<li><a href="#"><img src="assets/images/microsoft.png"/></a></li>
					</ul>
				</div>
				
			</div><!-- end .slide-text -->
		</div><!-- end #home-primary -->

	
		<?php
			get_template_part('tpl','portfolio');
		?>


	</div><!-- end #content -->

<?php get_footer();?>