<header class="site-header" role="banner">
    <div class="site-logo"> <a class="logo-text" href="<?php echo bloginfo('home');?>">
    	<img src="images/logo.png"/>
    </a></div>
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
			$linkvine = (get_option('url_instagram') != '') ? get_option('url_instagram') : 'javascript:void(0);';
		?>
		<a target="_blank" href="<?php echo $linkin;?>">
      <i class="si-linkedin">
        <img src="images/likedin.png"/>
      </i>
    </a>
    	<a target="_blank" href="<?php echo $linkbe;?>"><i class="si-behance"><img src="images/be.png"/></i></a>
    	<a target="_blank" href="<?php echo $linkflickr;?>"><i class="si-flickr"><img src="images/dot.png"/></i></a>
    	<a target="_blank" href="<?php echo $linkvine;?>"><i class="si-instagram"><img src="images/instagram.png"/></i></a>
    	<a target="_blank" href="<?php echo $linkv;?>"><i class="si-vimeo"><img src="images/v.png"/></i></a>
    </div>
  </header>