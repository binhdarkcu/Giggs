<?php

	function revcon_change_post_label() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'Portfolio';
	    $submenu['edit.php'][5][0] = 'Portfolio';
	    $submenu['edit.php'][10][0] = 'Add Portfolio';
	    $submenu['edit.php'][16][0] = 'Portfolio Tags';
	    echo '';
	}
	function revcon_change_post_object() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Credits';
	    $labels->singular_name = 'Portfolio';
	    $labels->add_new = 'Add Portfolio';
	    $labels->add_new_item = 'Add Portfolio';
	    $labels->edit_item = 'Edit Portfolio';
	    $labels->new_item = 'Portfolio';
	    $labels->view_item = 'View Portfolio';
	    $labels->search_items = 'Search Portfolio';
	    $labels->not_found = 'No News found';
	    $labels->not_found_in_trash = 'No News found in Trash';
	    $labels->all_items = 'All Portfolio';
	    $labels->menu_name = 'Portfolio';
	    $labels->name_admin_bar = 'Portfolio';
	}
	 
	add_action( 'admin_menu', 'revcon_change_post_label' );
	add_action( 'init', 'revcon_change_post_object' );