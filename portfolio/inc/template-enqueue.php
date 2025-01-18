<?php
if(!defined("ABSPATH")){
  exit;
}

add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );
add_action( 'wp_footer', 'theme_scripts' );
add_action( 'after_setup_theme', 'theme_register_nave_menu');

function portfolio_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'portfolio-style', get_template_directory_uri() . '/assets/css/index.css' );
}
function theme_scripts() {
	wp_enqueue_script( 'portfolio-popup', get_template_directory_uri() . '/assets/index.js');
}
function theme_register_nave_menu(){
  register_nav_menu('top','top menu');
}