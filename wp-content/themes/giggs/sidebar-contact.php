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
			<a href="skype:<?php echo $linkskype;?>?chat" class="nickskye"><span>yvesfaesdupont</span></a>
		</div>
		<style>
			#sidebar .contactDetail a.nickskye{
				text-decoration: none;
			}
			#sidebar .contactDetail a.nickskye:hover{
				text-decoration: underline;
			}
		</style>
	</div>
</div><!-- end #sidebar -->