<?php

function NWLatexTheme_theme_support(){
    add_theme_support( 'automatic-feed-links' );
}

function NWLatexTheme_custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), [], wp_get_theme()->Version );
	wp_enqueue_style( 'simple-grid', get_stylesheet_directory_uri() . '/simplegrid.css' );
}
 
add_action( 'wp_enqueue_scripts', 'NWLatexTheme_custom_theme_assets' );
add_action( 'after_setup_theme', 'NWLatexTheme_theme_support' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'before_widget' => '<div class = "singleWidget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	)
);

add_theme_support( 'custom-logo' );
	
function NWLatexTheme_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
	);
}
