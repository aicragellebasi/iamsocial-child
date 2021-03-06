<?php
/**
 * IAMSocial Child Theme functions and definitions
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.0 Child
 * @since IAMSocial 1.0.0 Child
 */
function iamsocial_enqueue_styles() {

	$parent_style = 'style.css'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/css/style.css',
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'iamsocial_enqueue_styles' );
?>
