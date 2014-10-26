<div id="sidebar" class="widget-area" role="complementary">
		
	<aside id="search-2" class="widget widget_search clearfix">
		<?php get_template_part('tpl','searchform');?>
	</aside>
	<?php
		$args_blog = array(
			'post_type' 	 => 'blogs',
			'posts_per_page' =>  5 ,
			'order'			 => 'asc'
		);
	?>		
	<aside id="recent-posts-2" class="widget widget_recent_entries clearfix">		
		<h3 class="widget-title">Recent Posts</h3>		
		<ul>
			<?php
				$query_b = get_posts($args_blog);
				foreach ( $query_b as $b ) {
			?>
			<li>
				<a href="<?php echo get_the_permalink($b->ID);?>"><?php echo $b->post_name;?></a>
			</li>
			<?php }?>
		</ul>
	</aside>
	
	<?php
		$args_port = array(
			'post_type' 	 => 'post',
			'posts_per_page' =>  10 ,
			'order'			 => 'asc'
		);
		$query_port = get_posts($args_port);
	?>
	<aside id="tag_cloud-2" class="widget widget_tag_cloud clearfix">
		<h3 class="widget-title">Portfolio Skills</h3>
		<div class="tagcloud">
			<?php
				foreach ( $query_port as $p) {
				$cat = get_the_category($p->ID);
				$category_link = get_category_link( $cat[0]->term_id );
			?>
			<a href='<?php echo $category_link;?>' class='tag-link-8' title='4 topics' style='font-size: 16pt;'><?php echo $cat[0]->cat_name;?></a>
			<?php }?>
		</div>
	</aside>
	<aside id="checkpoint_dribbble_shots-widget-2" class="widget checkpoint_dribbble_shots clearfix">
		<h3 class="widget-title">Jordan-Style Dribbbles</h3>
		<p class="dribbble-line-icon icon-dribbble"></p>

		<ul class="dribbble-shots clearfix">
			<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1773311-Analytics-App" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1773311/analytics.jpg" alt="Analytics App"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1763473-Tool-Tip" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1763473/dark_tool_tip.jpg" alt="Tool Tip"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1746277-8-FREE-Natural-iPhone-6-Mockups" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1746277/mockups.jpg" alt="8 FREE Natural iPhone 6 Mockups"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1740278-UltraLinx-Logo" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1740278/logo_colours.jpg" alt="UltraLinx Logo"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1735546-iPhone-6-News-App" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1735546/news_app.jpg" alt="iPhone 6 News App"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1731150-Blog-Magazine-Featured-Posts-Layout" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1731150/featured_posts.jpg" alt="Blog / Magazine Featured Posts Layout"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1728636-PropertyFind-Website" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1728636/propertyfind.jpg" alt="PropertyFind Website"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1725540-Pylot-Logo" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1725540/pilot.jpg" alt="Pylot Logo"/></a> 
		 	</li><!-- end .dribbble-img -->
	 		<li class="dribbble-img"> 
				<a href="https://dribbble.com/shots/1714690-Menswear-Highlighted-Offer-Widget" class="dribbble-link"><img src="https://d13yacurqjgara.cloudfront.net/users/168777/screenshots/1714690/jacket.jpg" alt="Menswear Highlighted Offer Widget"/></a> 
		 	</li><!-- end .dribbble-img -->
	 	</ul><!-- end .dribbble-shots -->

	</aside>
	<aside id="checkpoint_facebook_likes-widget-2" class="widget checkpoint_facebook_likes clearfix">
		<h3 class="widget-title">Facebook Stalk Us</h3>			
		<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2Fenvato&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;height=240&amp;force_wall=true" style="border:none; overflow:hidden; width:300px; height: 240px;"></iframe>
	</aside>
</div><!-- end #sidebar -->