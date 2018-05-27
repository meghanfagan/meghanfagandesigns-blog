<?php

// Add scripts and stylesheets
function meghanfagandesigns_blog_scripts() {
	wp_enqueue_style( 'blog-css', get_template_directory_uri() . '/blog.css');
	wp_enqueue_style( 'blog-js', get_template_directory_uri() . '/scripts.js' );
}

add_action( 'wp_enqueue_scripts', 'meghanfagandesigns_blog_scripts' );


// Add Google Fonts
function meghanfagandesigns_blog_google_fonts() {
				wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato');
				wp_enqueue_style( 'Lato');
		}

add_action('wp_print_styles', 'meghanfagandesigns_blog_google_fonts');


// WordPress Titles
add_theme_support( 'title-tag' );


// Support Featured Images
add_theme_support( 'post-thumbnails' );

?>