<?php

/*
Plugin Name: Gwt Plugin
Plugin URI: https://www.templatemonster.com/authors/garantiwebt/
Descripriton: Gwt Plugin
Author: Adem ÖZDAMAR
Version: 1.0.0
Author URI: https://www.templatemonster.com/authors/garantiwebt/
*/


define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // Update path
    $path = MY_PLUGIN_DIR_PATH. '/acf-json';
    // Return path
    return $path;
    
}
 
?>