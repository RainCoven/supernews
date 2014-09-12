<?php

function add_supernews_styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/bootstrap.min.css');
}

add_action( 'wp_enqueue_scripts', 'add_supernews_styles' );