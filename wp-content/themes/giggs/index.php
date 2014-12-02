<?php get_header();?>

	<div id="content" class="site-content clearfix">
	
		<div id="home-primary" class="homePage clearfix" data-center="background-position: right 35px" data-top-bottom="background-position: right 100px" data-bottom-top="background-position: right -100px">
			<div class="slide-text">
				<div class="txt-home">
					<?php
						$textHome = get_option('text_for_homepage');
					?>	
					<?php echo $textHome;?>
				</div>
				<div class="workfor">
					<div class="txt">BRANDS WORKED FOR</div>
					<ul>
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
						<li><a href="<?php echo $link;?>"><img src="<?php echo $img_url[0];?>"/></a></li>
						<?php }?>
					</ul>
				</div>
				
			</div><!-- end .slide-text -->
		</div><!-- end #home-primary -->

	
		<?php
			get_template_part('tpl','portfolio');
		?>


	</div><!-- end #content -->

<?php get_footer();?>