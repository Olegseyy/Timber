<?php
/**************подключение изображения в админке************/
add_action( 'after_setup_theme', 'home_setup' );

 function home_setup(){
 	add_theme_support ('post-thumbnails');
 }

/**************подключение стилей************/
add_action( 'wp_enqueue_scripts', 'localhost_style' );
function localhost_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}


/**************подключение скриптов************/
add_action( 'wp_enqueue_scripts', 'localhost_scripts');

function localhost_scripts() {
		wp_enqueue_script( 'newscript', get_template_directory_uri() . '/assets/js/main.js');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );
}    




