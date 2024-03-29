<?php

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'hotella_register_required_plugins' );


function hotella_register_required_plugins() {
	
	$plugins = array(

		array(
			'name'               => 'Advanced Custom Fields',
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => get_template_directory() . '/inc/plugins/advanced-custom-fields-pro.zip',
			'required'           => true,

		),

		array(
			'name'               => 'Vik Booking',
			'slug'               => 'vikbooking',
			'source'             => get_template_directory() . '/inc/plugins/vikbooking.zip',
			'required'           => true,

		),

		array(
			'name'               => 'All In One Wp Migration',
			'slug'               => 'all-in-one-wp-migration',
			'source'             => get_template_directory() . '/inc/plugins/all-in-one-wp-migration.zip',
			'required'           => true,

		),

		array(
			'name'         => 'Contact Form 7',
			'slug'         => 'contact-form-7', 
			'source'       => get_template_directory() . '/inc/plugins/contact-form-7.zip', 
			'required'     => true, 
		),

		array(
			'name'         => 'Video Popup',
			'slug'         => 'video-popup', 
			'source'       => get_template_directory() . '/inc/plugins/video-popup.zip', 
			'required'     => true, 
		),

		array(
			'name'         => 'Garanti Web Design Plugin',
			'slug'         => 'my-custom-plugin', 
			'source'       => get_template_directory() . '/inc/plugins/my-custom-plugin.zip', 
			'required'     => true, 
		),

		array(
			'name'         => 'Classic Editor Plugin',
			'slug'         => 'classic-editor', 
			'source'       => get_template_directory() . '/inc/plugins/classic-editor.zip', 
			'required'     => true, 
		),

		array(
			'name'         => 'Classic Widgets Plugin',
			'slug'         => 'classic-widgets', 
			'source'       => get_template_directory() . '/inc/plugins/classic-widgets.zip', 
			'required'     => true, 
		),

		array(
			'name'         => 'Duplicate Menu Plugin',
			'slug'         => 'duplicate-menu', 
			'source'       => get_template_directory() . '/inc/plugins/duplicate-menu.zip', 
			'required'     => true, 
		)

	);

	$config = array(
		'id'           => 'hotella',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '', 
		'is_automatic' => false,
		'message'      => '', 

	);

	tgmpa( $plugins, $config );
}
