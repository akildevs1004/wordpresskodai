<?php

function load_stylesheets() {

wp_register_style('font', get_template_directory_uri() . '/css/icon-font.css', array(), 1, 'all');
wp_enqueue_style('font');

wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
wp_enqueue_style('style');

wp_register_style('fancybox', get_template_directory_uri() . '/css/fancybox.min.css', array(), 1, 'all');
wp_enqueue_style('fancybox');

wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), 1, 'all');
wp_enqueue_style('swiper');

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
wp_enqueue_style('bootstrap');

wp_register_style('odometer', get_template_directory_uri() . '/css/odometer.min.css', array(), 1, 'all');
wp_enqueue_style('odometer');

wp_register_style('flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), 1, 'all');
wp_enqueue_style('flaticon');

wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');



// load scripts

function addjs(){


wp_register_script('team', get_template_directory_uri() . '/js/team.js', array() , 1, 1, 1);
wp_enqueue_script('team');

wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array() , 1, 1, 1);
wp_enqueue_script('jquery');

wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array() , 1, 1, 1);
wp_enqueue_script('swiper');

wp_register_script('odometer', get_template_directory_uri() . '/js/odometer.min.js', array() , 1, 1, 1);
wp_enqueue_script('odometer');

wp_register_script('wow', get_template_directory_uri() . '/js/wow.min.js', array() , 1, 1, 1);
wp_enqueue_script('wow');

wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array() , 1, 1, 1);
wp_enqueue_script('scripts');

wp_register_script('3d', get_template_directory_uri() . '/js/3d.jquery.js', array() , 1, 1, 1);
wp_enqueue_script('3d');

wp_register_script('magnific', get_template_directory_uri() . '/js/magnific.js', array() , 1, 1, 1);
wp_enqueue_script('magnific');

wp_register_script('mag', get_template_directory_uri() . '/js/mag.js', array() , 1, 1, 1);
wp_enqueue_script('mag');

wp_register_script('custom', get_template_directory_uri() . '/custom.js', array() , 1, 1, 1);
wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts', 'addjs');

// menu support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

//Default WordPress
the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)
add_image_size( 'custom-size', 399, 223 );
 
//With WooCommerce
the_post_thumbnail( 'shop_thumbnail' ); // Shop thumbnail (180 x 180 hard cropped)
the_post_thumbnail( 'shop_catalog' );   // Shop catalog (300 x 300 hard cropped)
the_post_thumbnail( 'shop_single' );    // Shop single (600 x 600 hard cropped)


// register menus
register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'webona'),
        'mobile-menu' => __('Mobile Menu', 'webona'),
        'mobile-menu' => __('Mobile Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),

    )


);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


   

 // theme options 

if( function_exists('acf_add_options_page'))
{

    
    acf_add_options_page(

        array (


            'page_title' => 'Theme Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'website-settings',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-generic',
            'redirect' => false

        )
    );

    acf_add_options_page(

        array (


            'page_title' => 'Header Settings',
            'menu_title' => 'Header',
            'parent_slug' => 'website-settings',
            'icon_url' => 'dashicons-admin-generic',

        )
    );

    acf_add_options_page(

        array (


            'page_title' => 'Footer Settings',
            'menu_title' => 'Footer',
            'parent_slug' => 'website-settings',
            'icon_url' => 'dashicons-admin-generic',

        )
    );


}


// widgets

register_sidebar(

    array ( 
        
        'name' => 'Post Right Widgets',
        'id' => 'post-right-widgets',


    )


);
register_sidebar(
    array ( 
        
        'name' => 'Services Detail Widgets',
        'id' => 'services-detail-widgets',


    )

);
register_sidebar(
    array ( 
        
        'name' => 'Search Widget',
        'id' => 'home-search-widget',


    )

);

function my_excerpt_length($length){
    return 15;
    }
    add_filter('excerpt_length', 'my_excerpt_length');

// import export 

  function ocdi_import_files() {
	return array(
		array(
			'import_file_name'           => 'Demo Import',
			'categories'                 => array( ''),
			'import_file_url'            => 'https://garantiwebdesign.com/setup/hotella/demo-content.xml',
			'import_redux'               => array(

			),
			'import_preview_image_url'   => 'https://garantiwebdesign.com/setup/hotella/screenshot.png',
			'import_notice'              => __( '', 'your-textdomain' ),
			'preview_url'                => 'https://www.garantiwebdesign.com/wordpress/hotella',
		),

	);
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );


// Top Menu import

function ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'top-menu' => $main_menu->term_id,
        )
);
 
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
 
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
 
}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );


// import before text

function ocdi_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text">Dont forget to import the mobile menu and theme settings json file after importing the theme.</div>';

	return $default_text;
}
add_filter( 'ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );

/* Plugins gb */
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', '__return_null');

// plugins require
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgm/example.php';


