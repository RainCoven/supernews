<?php

require_once('inc/wp_bootstrap_navwalker.php');

function add_supernews_styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'add_supernews_styles' );

function wpt_register_js() {
	wp_register_script('jquery-1.11.1.min', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', 'jquery');
	wp_enqueue_script('jquery-1.11.1.min');

	wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
	wp_enqueue_script('jquery.bootstrap.min');

}
add_action( 'init', 'wpt_register_js' );

function theme_setup() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'supernews' ) );
}


add_action( 'after_setup_theme', 'theme_setup' );