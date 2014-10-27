
	<?php

	$nav = array(
		'theme_location'  => 'menu_top',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'sf-menu clearfix',
		'menu_id'         => 'primary-menu',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	);
	
	wp_nav_menu( $nav );
	
	?>
