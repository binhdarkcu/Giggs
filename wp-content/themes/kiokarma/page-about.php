<?php get_header();?>
<div id="site" class="site">
  <?php get_template_part('tpl','header');?>
  <main class="site-main" role="main">
    <div class="page-header">
      <h1 class="page-title"><?php echo get_option('text_for_homepage'); ?>	</h1>
      <div class="page-subtitle">Currently available for select projects, collaborations and consulting.</div>
    </div>
    <div class="page-content">
      <article id="post-12" class="post-12 page type-page status-publish hentry">
        <div class="post-content">
        	<p><img src="http://demo.themerain.com/skills/wp-content/uploads/2014/10/about.jpg"></p>
        	<p><br></p>
        	<div class="twocolumn">
        		Graphics is a huge passion of mine. It enables me to stay spontaneous and gives me an opportunity for creative fulfillment. I put a lot of commitment into my work, and take by the handful all the benefits offered by the Internet and contemporary advertising in order to satisfy my clients.<br> The ability of creating new interesting solutions makes sense only when we are cooperating with other people. Together it is much easier to achieve goals and set high standards of our service. So everyone intrested in my offer is cordially invited to cooperation.
        	</div>
        	<p><br></p>
        	<h6>Clients</h6>
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
        </div>
      </article>
    </div>
  </main>
<?php get_footer();?>  