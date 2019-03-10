<?php
/**
* Storefront Theme Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage School of Suds
* @since School of Suds 2.0
*/


// Enqueue scripts and styles
function storefront_child_scripts(){
	wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'storefront-style' ));
}
add_action( 'wp_enqueue_scripts', 'storefront_child_scripts' );

add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
	function jk_storefront_header_content() { ?>
		<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Raleway" rel="stylesheet">
		<?php
	}



