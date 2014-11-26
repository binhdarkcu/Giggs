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
					<h3>
						Kiokarma is a man design studio. A good one
					</h3>		
					<div class="text">
						<p>
							More than anything else, I'm a creative. I get to the score of what you - or your business - are about, and deliver you the media  that puts the best of it on display.
						</p>
						<p>
							I primarily design logos, idenlities and websites but i'm always up for it challenge and never limit my creativity through a medium or technology.
						</p>
					</div>
				</div><!-- end .service -->
	
			
				<div class="service hasImg">
					<img src="assets/images/ab-1.jpg"/>
				</div><!-- end .service -->
	
			
				<div class="service hasImg">
					<img src="assets/images/ab-2.jpg"/>
				</div><!-- end .service -->
	
			
				<div class="service">
	
					<div class="text">
						<p>
							More than anything else, I'm a creative. I get to the score of what you - or your business - are about, and deliver you the media  that puts the best of it on display.
						</p>
						<p>
							I primarily design logos, idenlities and websites but i'm always up for it challenge and never limit my creativity through a medium or technology.
						</p>
					</div>
				</div><!-- end .service -->
	
			
				<div class="service">
					<div class="text">
						<p>
							More than anything else, I'm a creative. I get to the score of what you - or your business - are about, and deliver you the media  that puts the best of it on display.
						</p>
						<p>
							I primarily design logos, idenlities and websites but i'm always up for it challenge and never limit my creativity through a medium or technology.
						</p>
					</div>
				</div><!-- end .service -->
	
			
				<div class="service hasImg">
					<img src="assets/images/ab-3.jpg"/>
				</div><!-- end .service -->
	
			
		</div><!-- end #services -->

	

	</div><!-- end #content -->

<?php get_footer();?>