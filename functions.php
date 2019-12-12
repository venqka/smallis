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
		wp_enqueue_style( 'smallis-styles', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', false );

		wp_register_script( 'smallis-scripts', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), '1.0', false );

		wp_enqueue_script( 'smallis-scripts', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), '1.0', false );

	}
	add_action( 'wp_enqueue_scripts', 'smalls_enqueue' );
}

if( !function_exists( 'smallis_supports' ) ) {

	function smallis_supports() {
		add_theme_support( 'post-thumbnails' ); 
	}
	add_action( 'after_setup_theme', 'smallis_supports' );
}

if( !function_exists( 'smallis_navigation' ) ) {
	
	function smallis_navigation() {
		register_nav_menu( 'main-menu',__( 'Smallis Menu', 'smallis' ) );
	}
	add_action( 'init', 'smallis_navigation' );

}

if( !function_exists( 'smallis_sidebars' ) ) {

	function smallis_sidebars() {

		$smallis_main_sidebar_arrgs = array(
			'name'          => __( 'Main Sidebar', 'smallis' ),
        	'id'            => 'main-sidebar',
        	'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'smallis' ),
        	'before_widget' => '<li id="%1$s" class="widget %2$s">',
        	'after_widget'  => '</li>',
        	'before_title'  => '<h2 class="widgettitle">',
        	'after_title'   => '</h2>',
		);
		register_sidebar( $smallis_main_sidebar_arrgs );

		$smallis_footer1_sidebar_arrgs = array(
			'name'          => __( 'Footer Column 1', 'smallis' ),
        	'id'            => 'footer1-sidebar',
        	'description'   => __( 'Widgets in this area will be shown in the first footer column.', 'smallis' ),
        	'before_widget' => '<li id="%1$s" class="widget %2$s">',
        	'after_widget'  => '</li>',
        	'before_title'  => '<h2 class="widgettitle">',
        	'after_title'   => '</h2>',
		);
		register_sidebar( $smallis_footer1_sidebar_arrgs );

		$smallis_footer2_sidebar_arrgs = array(
			'name'          => __( 'Footer Column 2', 'smallis' ),
        	'id'            => 'footer2-sidebar',
        	'description'   => __( 'Widgets in this area will be shown in the first footer column.', 'smallis' ),
        	'before_widget' => '<li id="%1$s" class="widget %2$s">',
        	'after_widget'  => '</li>',
        	'before_title'  => '<h2 class="widgettitle">',
        	'after_title'   => '</h2>',
		);
		register_sidebar( $smallis_footer2_sidebar_arrgs );

		$smallis_footer3_sidebar_arrgs = array(
			'name'          => __( 'Footer Column 3', 'smallis' ),
        	'id'            => 'footer3-sidebar',
        	'description'   => __( 'Widgets in this area will be shown in the first footer column.', 'smallis' ),
        	'before_widget' => '<li id="%1$s" class="widget %2$s">',
        	'after_widget'  => '</li>',
        	'before_title'  => '<h2 class="widgettitle">',
        	'after_title'   => '</h2>',
		);
		register_sidebar( $smallis_footer3_sidebar_arrgs );
	}
	add_action( 'widgets_init', 'smallis_sidebars' );
}
