<?php
add_action('wp_enqueue_scripts', 'loftify');

function loftify ()
{
	wp_enqueue_style('loft_libs', get_stylesheet_directory_uri() . '/css/libs.min.css', [], null);
	wp_enqueue_style('loft_main', get_stylesheet_directory_uri() . '/css/main.css', [], time());
	wp_enqueue_style('loft_media', get_stylesheet_directory_uri() . '/css/media.css', [], null);

	wp_enqueue_script('jquery');
	wp_enqueue_script('loft_main_js', get_stylesheet_directory_uri() . '/js/main.js', ['jquery'], null, true);
}

register_nav_menus([
	'topmenu' => 'Top menu',
	'botmenu' => 'Bottom menu',
]);

add_theme_support('post-thumbnails');