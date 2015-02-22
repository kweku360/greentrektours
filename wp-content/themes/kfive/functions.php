<?php

if (!function_exists('pre_setup')) :
function prowordpress_setup() {
/**
 * Add default posts and comments RSS feed links to head
 */
add_theme_support( 'automatic-feed-links' );
/**
 * Enable support for Post Thumbnails
 */
add_theme_support( 'post-thumbnails' );

}
endif; // prowordpress_setup

add_action('after_setup_theme', 'pre_setup');

/**
 * Enqueue scripts and styles
 */
function attach_scripts_and_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'attach_scripts_and_styles' );

