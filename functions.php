<?php
/**
 *	The theme functions
 *	All functions are pluggable to be easily overrien
 *
 *	All magic happens here
 *	@package WordPress
 *	@subpackage Smallis
 *	@since 1.0.0
 */

if( !function_exists( 'smallis_enqueue' ) ) {

	function smalls_enqueue() {
		//enqueue Smalls styles
		wp_enqueue_style( 'smalli-styles', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', false );

		wp_register_script( 'smallis-scripts', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), '1.0', false );

		wp_enqueue_script( 'smallis-scripts', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), '1.0', false );

	}
	add_action( 'wp_enqueue_scripts', 'smalls_enqueue' );
}