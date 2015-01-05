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
				
			?>
			<h1 class="page-title">
				<?php echo $bigTitle;?>		</h1><!-- end .page-title -->
	
						<div class="page-description">
					<?php echo $smalltext;?>		</div><!-- end .page-description -->
			<div class="divider"></div>
	
		</header><!-- end .page-header -->

	
		<div id="services" class="clearfix aboutPage">
			<?php 
				$text_left_image_right = get_field('text_and_image'); 
			?>
			<?php
					$i1 = 0;
					if( have_rows('text_left_image_right') ){
						while ( have_rows('text_left_image_right') ) : the_row();
							$i1++;
							$text_left_1 = get_sub_field("text_column_left_right");
							$text_image_1 = get_sub_field("image_column_left_right");
							if($i1%2!=0){
								
			?>
				<div class="service service-<?php echo $i1;?>">
					<div class="pad">
						<?php echo $text_left_1;?>
						<?php if($i1 == 3){?>
							<ul class="socialAbout">
								<?php
									$linkv = (get_option('url_vine') != '') ? get_option('url_vine')  : 'javascript:void(0);';
									$linkbe = (get_option('url_be') != '')? get_option('url_be') : 'javascript:void(0);';
									$linkin = (get_option('url_linkin') != '') ? get_option('url_linkin') : 'javascript:void(0);';
									$linkflickr = (get_option('url_flickr') != '') ? get_option('url_flickr') : 'javascript:void(0);';
									$linkvine = (get_option('url_vine') != '') ? get_option('url_vine') : 'javascript:void(0);';
								?>
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
									<a href="<?php echo $linkvine;?>" class="linkv"></a>
								</li>
							</ul>
						<?php }?>
					</div>
				</div>
				<?php if($i1 == 1){?>
				<div class="service mobile" id="service_text_mobile_<?php echo $i1;?>"></div>
				<?php }?>
					<!-- end .service -->
				<div class="service hasImg hasImg_<?php echo $i1;?> <?php if($i1==3) echo 'normal';?>"><img class="size-full wp-image-183 alignleft" src="<?php echo $text_image_1;?>" alt="" width="682" height="378" /></div>
			    <?php }elseif($i1%2==0){?>
				<div class="service hasImg service_image_<?php echo $i1;?>"><img class="size-full wp-image-185 alignleft" src="<?php echo $text_image_1;?>" alt="" width="682" height="378" /></div>
				<!-- end .service -->
				<div class="service hasImg mobile service_image_3"><img class="size-full wp-image-183 alignleft" src="" alt="" width="682" height="378" /></div>
				<div class="service normal service-<?php echo $i1;?>" id="service_text_mobile_<?php echo $i1;?>">
					<div class="pad">
						<div class="text">
							<?php
								echo $text_left_1;
							?>
						</div>
					</div>
				</div>
			<?php } endwhile; }?>
			
	</div><!-- end #content -->
	<div class="gestaltenBox">
		<?php
			$gestalten_id = get_post_id('gestalten','about-lightbox');
			$ges_query = get_post( $gestalten_id );
			$link = get_post_meta($gestalten_id,'tt_ab_lightbox_link',true);
			$author = get_post_meta($gestalten_id,'tt_ab_lightbox_author',true);
			$href = '<a href='.$link.' target=_blank>'.$author.'</a>';
			$imgSrc = get_post_meta($gestalten_id,'tt_ab_lightbox_images',false);
			foreach ($imgSrc as $img) {
				$getImg = wp_get_attachment_image_src($img ,'full');
				//print_r($getImg);
		?>
		<a data-fresco-caption='<?php echo '<div>'.$author.'</div>' . $link;?>' data-fresco-group='gestaltenImg' href="<?php echo $getImg[0];?>" class="fresco">
			<img class="aligncenter wp-image-263 size-full" title="<?php echo get_the_title($gestalten_id);?>" src="<?php echo $getImg[0];?>" width="1200" height="797" />
		</a>
		<?php } ?>
	</div>
	<div class="indexbookBox">
		<?php
			$gestalten_id = get_post_id('indexbook','about-lightbox');
			$ges_query = get_post( $gestalten_id );
			$link = get_post_meta($gestalten_id,'tt_ab_lightbox_link',true);
			$author = get_post_meta($gestalten_id,'tt_ab_lightbox_author',true);
			$href = '<a href='.$link.' target=_blank>'.$author.'</a>';
			$imgSrc = get_post_meta($gestalten_id,'tt_ab_lightbox_images',false);
			foreach ($imgSrc as $img) {
				$getImg = wp_get_attachment_image_src($img ,'full');
				//print_r($getImg);
		?>
		<a data-fresco-caption='<?php echo '<div>'.$author.'</div>' . $link;?>' data-fresco-group='indexbookImg' href="<?php echo $getImg[0];?>" class="fresco">
			<img class="aligncenter wp-image-263 size-full" title="<?php echo get_the_title($gestalten_id);?>" src="<?php echo $getImg[0];?>" width="1200" height="797" />
		</a>
		<?php } ?>
	</div>
	
<?php get_footer();?>