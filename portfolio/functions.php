<?php
/**
 * portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function portfolio_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'portfolio-style', get_template_directory_uri() . '/assets/css/index.css' );


}
function theme_scripts() {
	wp_enqueue_script( 'portfolio-popup', get_template_directory_uri() . '/assets/index.js');
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );
add_action( 'wp_footer', 'theme_scripts' );

