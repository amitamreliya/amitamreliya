<?php

if ( ! defined( '_PE_CHILD_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_PE_CHILD_VERSION', '1.0.0' );
}

remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

add_action('init', 'pe_child_register_scripts');
function pe_child_register_scripts(){
    pe_theme_register_critical(get_stylesheet_directory().'/critical.min.css');
    pe_theme_register_style(get_stylesheet_directory_uri().'/style.min.css', _PE_CHILD_VERSION);
  	wp_enqueue_script( 'main', get_stylesheet_directory_uri(). '/js/main.js', array('jquery'), _PE_CHILD_VERSION, true );
}

function pe_child_theme_setup() {  
  remove_image_size('1536x1536');
  remove_image_size('2048x2048'); 
}
add_action( 'after_setup_theme', 'pe_child_theme_setup' );