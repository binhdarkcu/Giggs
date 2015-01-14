<header class="site-header" role="banner">
    <div class="site-logo"> <a class="logo-text" href="http://demo.themerain.com/skills/">Skills</a></div>
    <nav class="site-navigation" role="navigation">
      <div class="menu-menu-container">
      	<?php get_template_part('tpl','menu');?>
        
      </div>
      <button class="menu-toggle"></button>
    </nav>
    <div class="social-icons">
    	<?php
			$linkv = (get_option('url_vine') != '') ? get_option('url_vine')  : 'javascript:void(0);';
			$linkbe = (get_option('url_be') != '')? get_option('url_be') : 'javascript:void(0);';
			$linkin = (get_option('url_linkin') != '') ? get_option('url_linkin') : 'javascript:void(0);';
			$linkflickr = (get_option('url_flickr') != '') ? get_option('url_flickr') : 'javascript:void(0);';
			$linkvine = (get_option('url_vine') != '') ? get_option('url_vine') : 'javascript:void(0);';
		?>
    	<a href="#"><i class="si-twitter"></i></a>
    	<a href="<?php echo $linkbe;?>"><i class="si-behance"></i></a>
    	<a href="<?php echo $linkvine;?>"><i class="si-instagram"></i></a>
    	<a href="#"><i class="si-youtube"></i></a>
    	<a href="<?php echo $linkv;?>"><i class="si-vimeo"></i></a>
    </div>
  </header>