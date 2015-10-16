<?php get_header();?>
<div class="bgBannerTop bannerAbout">
    <div class="bgBanner"></div>
  </div>
<div id="site" class="site">
  <?php get_template_part('tpl','header');?>
  <main class="site-main about-page" role="main">
    <div class="page-header">
	<?php
		$idAbout = get_page_id_by_slug('about');
		$about = get_post($idAbout);
		$bigTitle = get_post_meta($idAbout,'tt_page_introduce',true);
		$smalltext = get_post_meta($idAbout,'tt_page_smalltext',true);
		$about_img = wp_get_attachment_image_src( get_post_thumbnail_id($idAbout), 'large' )
	?>
      <h1 class="page-title">
        <span>GRAPHIC DESIGN/BRANDING/WEBDESIGN/</span>
        <span>VIDEO AND ANIMATION</span>
      </h1>
      <div class="page-subtitle">... And enjoying life!</div>
    </div>
    <div class="page-content">
      <article id="post-12" class="post-12 page type-page status-publish hentry">
        <div class="post-content">
        	<?php 
				$text_left_image_right = get_field('text_and_image'); 
				
			?>
        	<div id="aboutPage" class="clearfix aboutPage">
        		<?php
					if( have_rows('text_left_image_right') ){
				?>
				<div class="col-1">
					<?php
						//while ( have_rows('text_left_image_right') ) : the_row();
						//$image = get_sub_field("image_column_left_right");
					?>
					<img src="<?php echo $about_img[0];?>"/>
					<?php //endwhile;?>
				</div>
				<div class="col-2">
					<div class="pad">
						<?php
							while ( have_rows('text_left_image_right') ) : the_row();
							$text = get_sub_field("text_column_left_right");
							echo $text;
							endwhile;
						?>
					</div>
				</div>
				<?php }?>
			</div>
		</div><!-- end #content -->
		
        	<p><br></p>
        	<h6 class="h6Client">Clients</h6>
        	<div id="gallery-1" class="gallery galleryid-105 gallery-columns-7 gallery-size-full">
        		<?php
					$args_dribble = array(
						'post_type' 	 => 'dribble-footer',
						'posts_per_page' =>  8,
						'order'			 => 'asc'
					);
					$query_dribbles = get_posts($args_dribble);
					foreach ( $query_dribbles as $dribble ) {
					$img_id = get_post_meta( $dribble->ID, 'tt_dribble_image',true);  				
					$img_url=wp_get_attachment_image_src( $img_id, 'full' );
					$link = get_post_meta($dribble->ID, 'tt_dribble_link',true);
					if(empty($link)){
						$link = "javascript:void(0);";
					}
				?>
				<figure class="gallery-item">
        			<div class="gallery-icon landscape"> 
        				<img width="140" height="60" src="<?php echo $img_url[0];?>" class="attachment-full" alt="c1">
        			</div>
        		</figure>
				
				<?php }?>
        		
        	</div>
      </article>
    </div>
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
  </main>
</div>
  <?php get_footer();?>
 

