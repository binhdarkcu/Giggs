<?php
$prefix = 'tt_';
global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] =array(
   'id'=>'portfolio_meta',
   'title'=>'Information',
   'pages'=>array('post'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
  		array(
			'name'             => 'Small text',
			'id'               => "{$prefix}port_smalltext",
			'type'             => 'text'
		),
		array(
			'name'             => 'Project Link',
			'id'               => "{$prefix}port_projectlink",
			'type'             => 'textarea'
		),
   		array(
			'name'             => 'Description',
			'id'               => "{$prefix}port_description",
			'type'             => 'wysiwyg'
		),
		array(
			'name'             => 'Clients',
			'id'               => "{$prefix}port_clients",
			'type'             => 'wysiwyg'
		)
	 )
);

$meta_boxes[] =array(
   'id'=>'pages_meta',
   'title'=>'Information',
   'pages'=>array('page'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
  		
   		array(
			'name'             => 'Introduce',
			'id'               => "{$prefix}page_introduce",
			'type'             => 'wysiwyg'
		),
		array(
			'name'             => 'Small text',
			'id'               => "{$prefix}page_smalltext",
			'type'             => 'wysiwyg'
		)
	 )
);


$meta_boxes[] =array(
   'id'=>'dribble_meta',
   'title'=>'Information',
   'pages'=>array('dribble-footer'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
  		
   		array(
			'name'             => 'Image',
			'id'               => "{$prefix}dribble_image",
			'type'             => 'image'
		),
		array(
			'name'             => 'Link',
			'id'               => "{$prefix}dribble_link",
			'type'             => 'textarea'
		)
	 )
);
/**
 * Register meta boxes
 *
 * @return void
 */
function register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'register_meta_boxes' );
