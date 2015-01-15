<div class="page-sidebar" role="complementary"> 
	<aside id="text-2" class="widget widget_text">
		<h6 class="widget-title">Email</h6>
		<div class="textwidget">
			<?php $linkemail= (get_option('url_email') != '') ? get_option('url_email')  : 'javascript:void(0);';?>
			<a href="mailto:<?php echo $linkemail;?>"><?php echo $linkemail;?></a>
		</div> 
	</aside>
	<aside id="recent_projects-2" class="widget widget_recent_projects">
		<h6 class="widget-title">Skype</h6>
		<div class="textwidget">
			<a href="skype:<?php echo $linkskype;?>?chat" class="nickskye"><span>yvesfaesdupont</span></a>
		</div>
	</aside>
</div>