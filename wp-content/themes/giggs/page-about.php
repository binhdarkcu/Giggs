<?php get_header();?>
	<div id="content" class="site-content clearfix">
		<header class="page-header">
			
			<?php
				$idContact = get_page_id_by_slug('about');
				$contact = get_post($idContact);
				$bigTitle = get_post_meta($idContact,'tt_page_introduce',true);
				$smalltext = get_post_meta($idContact,'tt_page_smalltext',true);
				//print_r($contact);
			?>
			<h1 class="page-title">
				<?php echo $bigTitle;?>		</h1><!-- end .page-title -->
	
						<div class="page-description">
					<?php echo $smalltext;?>		</div><!-- end .page-description -->
			<div class="divider"></div>
	
		</header><!-- end .page-header -->

	
		<div id="services" class="clearfix">
			
			
				<div class="service">
					<p class="the-icon icon-desktop"></p>
					<h3 class="service-title">
						WordPress Themes				
					</h3><!-- end .service-title -->
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non vestibulum urna, pellentesque congue leo. Proin a leo eu tortor gravida rhoncus.
				</div><!-- end .service -->
	
			
				<div class="service">
	
					<p class="the-icon icon-tools"></p>
	
					<h3 class="service-title">
						Identity Design				</h3><!-- end .service-title -->
	
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non vestibulum urna, pellentesque congue leo. Proin a leo eu tortor gravida rhoncus.
				</div><!-- end .service -->
	
			
				<div class="service">
	
					<p class="the-icon icon-documents"></p>
	
					<h3 class="service-title">
						Editorial Design				</h3><!-- end .service-title -->
	
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non vestibulum urna, pellentesque congue leo. Proin a leo eu tortor gravida rhoncus.
				</div><!-- end .service -->
	
			
				<div class="service">
	
					<p class="the-icon icon-camera"></p>
	
					<h3 class="service-title">
						Photography				</h3><!-- end .service-title -->
	
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non vestibulum urna, pellentesque congue leo. Proin a leo eu tortor gravida rhoncus.
				</div><!-- end .service -->
	
			
				<div class="service">
	
					<p class="the-icon icon-facebook"></p>
	
					<h3 class="service-title">
						Social Marketing				</h3><!-- end .service-title -->
	
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non vestibulum urna, pellentesque congue leo. Proin a leo eu tortor gravida rhoncus.
				</div><!-- end .service -->
	
			
				<div class="service">
	
					<p class="the-icon icon-genius"></p>
	
					<h3 class="service-title">
						Rocket Science				</h3><!-- end .service-title -->
	
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non vestibulum urna, pellentesque congue leo. Proin a leo eu tortor gravida rhoncus.
				</div><!-- end .service -->
	
			
		</div><!-- end #services -->

	

	</div><!-- end #content -->

<?php get_footer();?>