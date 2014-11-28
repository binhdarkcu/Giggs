<?php
/*
Template Name: About template
*/
get_header();?>
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

	
		<div id="services" class="clearfix aboutPage">
			<?php 
				//$idabout = get_page_id_by_slug('about');
				//$about = get_post($idabout);
				//echo apply_filters('the_content', $about->post_content);
				$text_left_image_right = get_field('text_left_image_right'); 
			?>
			<?php
					$i = 0;
					if( have_rows('text_left_image_right') ){
						while ( have_rows('text_left_image_right') ) : the_row();
							$i++;
							if($i == 1){
							$text_left_1 = get_sub_field("text_column_left_right");
							$text_image_1 = get_sub_field("image_column_left_right");
			?>
			<div class="service hasImg mobile"><img class="size-full wp-image-183 alignleft" src="<?php echo $text_image_1;?>" alt="" width="682" height="378" /></div>
			<div class="service">
				<div class="pad">
					<?php echo $text_left_1;?>
				</div>
			</div>
				<!-- end .service -->
			<div class="service hasImg normal"><img class="size-full wp-image-183 alignleft" src="<?php echo $text_image_1;?>" alt="" width="682" height="378" /></div>
			<?php } endwhile; }?>
			<?php
				$i = 0;
				if( have_rows('image_left_text_right') ){
					while ( have_rows('image_left_text_right') ) : the_row();
						$i++;
						if($i == 1){
						$text_left_2 = get_sub_field("text_column_right_left");
						$text_image_2 = get_sub_field("image_column_right_left");
			?>
				<!-- end .service -->
				<div class="service hasImg"><img class="size-full wp-image-185 alignleft" src="<?php echo $text_image_2;?>" alt="" width="682" height="378" /></div>
				<!-- end .service -->
				<div class="service">
					<div class="pad">
						<div class="text">
							<?php
								echo $text_left_2;
							?>
						</div>
					</div>
				</div>
			<?php } endwhile; }?>
				<!-- end .service -->
			<?php
					$i = 0;
					if( have_rows('text_left_image_right') ){
						while ( have_rows('text_left_image_right') ) : the_row();
							$i++;
							if($i == 2){
							$text_left_3 = get_sub_field("text_column_left_right");
							$text_image_3 = get_sub_field("image_column_left_right");
			?>	
				<div class="service service-3">
					<div class="pad">
						<div class="text">
							<?php
								echo $text_left_3;
							?>
							<ul class="socialAbout">
								<li>
									<a href="<?php echo $linkin;?>" target="_blank" class="linkin"></a>
								</li>
								
								<li>
									<a href="<?php echo $linkbe;?>" target="_blank" class="linkbe"></a>
								</li>
								
								<li>
									<a href="<?php echo $linkflickr;?>" target="_blank" class="linkflickr"></a>
								</li>
								<li>
									<a href="skype:<?php echo $linkskype;?>?chat" class="linkskype"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end .service -->
				<div class="service hasImg" style="text-align: left;"><img class="size-full wp-image-186" src="<?php echo $text_image_3;?>" alt="" width="682" height="378" /></div>
			<?php } endwhile; }?>
				<!-- end .service -->
		</div><!-- end #services -->

	

	</div><!-- end #content -->

<?php get_footer();?>