<footer id="footer" class="site-footer">

		<div id="footer-widgets" class="clearfix">

			<div class="footer-column footer-widget-dark">
				<aside id="checkpoint_contact_info-widget-2" class="widget checkpoint_contact_info clearfix">
					<div class="contact-info">
			
						<p class="icon-envelope contact-icon"></p>
			
						<p class="address">
							<?php echo get_option('url_address');?>
						</p>
		
						<p class="phone">
							<?php echo get_option('url_phone');?>
						</p>
		
						<p class="email"><?php echo get_option('url_email');?></p>
		
						<p class="web"> <a href="#">
							<?php echo get_option('url_website');?>
						</a></p>
						
					</div><!-- end .contact-info -->

				</aside>			
			</div><!-- end .footer-column -->

			<div class="footer-light clearfix">

				<div class="footer-column footer-widget">
					<aside id="checkpoint_tweets-widget-2" class="widget checkpoint_tweets clearfix">
						<p class="icon-twitter tweet-line-icon"></p>
				
						<div class="twitter-box">
							<div class="twitter-holder">
								<div class="b">
									<div class="tweets-container" id="tweets_">
										<ul id="jtwt">
											<li class="jtwt_tweet">
												<p class="jtwt_tweet_text">
													Missing my &nbsp;
													<a href="http://twitter.com/chlorosee" target="_blank">@chlorosee</a>&nbsp; and our bump like you wouldn't believe.									
												</p>
												<a href="http://twitter.com/PaulWinslow89/statuses/524952589251919873" class="jtwt_date">2 days ago </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<span class="arrow"></span>
						</div>
	
						<div class="tweet-user-container">
							<a class="tweet-user" href="http://twitter.com/paulwinslow89">@paulwinslow89</a>
						</div><!-- end .tweet-user-container -->

					</aside>				
				</div><!-- end .footer-column -->

				<div class="footer-column footer-copy">
					<aside id="checkpoint_dribbble_shots-widget-3" class="widget checkpoint_dribbble_shots clearfix">
						<p class="dribbble-line-icon icon-dribbble"></p>
				
						<ul class="dribbble-shots clearfix">
							<?php
								$args_dribble = array(
									'post_type' 	 => 'dribble-footer',
									'posts_per_page' =>  6 ,
									'order'			 => 'asc'
								);
								$query_dribbles = get_posts($args_dribble);
								foreach ( $query_dribbles as $dribble ) {
								$img_id = get_post_meta( $dribble->ID, 'tt_dribble_image',true);  				
								$img_url=wp_get_attachment_image_src( $img_id, 'full' );
								$link = get_post_meta($dribble->ID, 'tt_dribble_link',true)
							?>
							<li class="dribbble-img"> 
								<a href="<?php echo $link;?>" target="_blank" class="dribbble-link">
									<img src="<?php echo $img_url[0];?>" alt="Analytics App"/>
								</a> 
						 	</li><!-- end .dribbble-img -->
						 	<?php }?>
						 </ul><!-- end .dribbble-shots -->
				
					</aside>				
				</div><!-- end .footer-column -->

			</div><!-- end .footer-light -->

		</div><!-- end #footer-widgets -->

		<div id="credits">

			<nav id="footer-navigation">

				<?php get_template_part('tpl','menu');?>
			</nav><!-- end #site-navigation -->

			<p class="copy">
				&copy; 2014 Giggs. Powered by <a href="http://wordpress.org">WordPress</a>
			</p><!-- end .copy -->

		</div><!-- end #credits -->

	</footer><!-- end #footer -->

</div><!-- end #page -->
<script type='text/javascript' src='assets/js/jquery.js'></script>
<script type='text/javascript' src='assets/js/jquery.easing.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/jquery.modernizr.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/masonry.min.js?ver=3.1.2'></script>
<script type='text/javascript' src='assets/js/jquery.isotope.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/jquery.fitvids.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/jquery.superfish.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/jquery.sidr.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/jquery.flexslider.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/jquery.touchwipe.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/init.js?ver=4.0'></script>
<script type='text/javascript' src='assets/js/comment-reply.min.js?ver=4.0'></script>

</body>
</html>