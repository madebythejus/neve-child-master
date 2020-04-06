<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), NEVE_VERSION );
	}
endif;

function tabs_script() {
    wp_register_script('the_tabs_script', get_stylesheet_directory_uri() . '/aria-tablist.min.js', array('jquery'),'1.1', false);
    wp_enqueue_script('the_tabs_script');
}

function list_script() {
    wp_register_script('the_list_script', get_stylesheet_directory_uri() . '/list.min.js', array('jquery'),'1.1', false);
    wp_enqueue_script('the_list_script');
}

/**
 * Enqueue Font Awesome.
 */
function custom_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
}

/**
 * Enqueue Permanent Marker.
 */
function custom_load_permanent_marker() {
    wp_enqueue_style( 'permanent_marker_font', '//fonts.googleapis.com/css2?family=Permanent+Marker&display=swap' );
}

// enqueing the scripts

add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
add_action( 'wp_enqueue_scripts', 'custom_load_permanent_marker' );
add_action( 'wp_enqueue_scripts', 'tabs_script' , 20 );
add_action( 'wp_enqueue_scripts', 'list_script', 20 );
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );

// adding SVG upload support
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
	add_filter('upload_mimes', 'add_file_types_to_uploads');
	

?>


