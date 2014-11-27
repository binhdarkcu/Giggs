<div id="sidebar" class="widget-area" role="complementary">
	<div class="bgwhite"></div>
	<div class="contactDetail">
		<div class="row">
			<h3>Email</h3>
			<?php $linkemail= (get_option('url_email') != '') ? get_option('url_email')  : 'javascript:void(0);';?>
			<a href="mailto:<?php echo $linkemail;?>"><?php echo $linkemail;?></a>
		</div>
		<div class="row">
			<h3>Skype</h3>
			<span>yvesfaesdupont</span>
		</div>
		<div class="row rowSocial">
			<h3>On the web</h3>
			<?php
				$linkv = (get_option('url_vine') != '') ? get_option('url_vine')  : 'javascript:void(0);';
				$linkbe = (get_option('url_be') != '')? get_option('url_be') : 'javascript:void(0);';
				$linkin = (get_option('url_linkin') != '') ? get_option('url_linkin') : 'javascript:void(0);';
				$linkflickr = (get_option('url_flickr') != '') ? get_option('url_flickr') : 'javascript:void(0);';
				$linkskype = (get_option('url_skype') != '') ? get_option('url_skype') : 'javascript:void(0);';
			?>
			<ul>
				<li>
					<a href="<?php echo $linkv;?>" target="_blank" class="linkv"></a>
				</li>
				<li>
					<a href="<?php echo $linkbe;?>" target="_blank" class="linkbe"></a>
				</li>
				<li>
					<a href="<?php echo $linkin;?>" target="_blank" class="linkin"></a>
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
</div><!-- end #sidebar -->