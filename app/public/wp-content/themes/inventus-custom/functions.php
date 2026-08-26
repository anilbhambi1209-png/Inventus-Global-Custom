<?php
/**
 * Inventus Custom Child Theme Functions and Definitions
 *
 * @package Inventus_Custom
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue Parent and Child Theme Stylesheets, Scripts and Fonts
 */
function inventus_custom_enqueue_scripts() {
	// Google Fonts: Outfit & Plus Jakarta Sans
	wp_enqueue_style(
		'inventus-google-fonts',
		'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	// Parent Theme Stylesheet
	wp_enqueue_style(
		'twentytwentyfive-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->parent()->get( 'Version' )
	);

	// Child Theme Stylesheet
	wp_enqueue_style(
		'inventus-custom-style',
		get_stylesheet_uri(),
		array( 'twentytwentyfive-parent-style', 'inventus-google-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	// Dynamic UI & Animations Script
	wp_enqueue_script(
		'inventus-interactions',
		get_stylesheet_directory_uri() . '/assets/js/inventus-interactions.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'inventus_custom_enqueue_scripts' );

/**
 * Register Custom Block Pattern Categories
 */
function inventus_custom_register_pattern_categories() {
	register_block_pattern_category(
		'inventus-marketing',
		array(
			'label'       => __( 'Inventus Marketing Agency', 'inventus-custom' ),
			'description' => __( 'High-converting dynamic block patterns for digital marketing agencies.', 'inventus-custom' ),
		)
	);
}
add_action( 'init', 'inventus_custom_register_pattern_categories' );

/**
 * Theme Setup
 */
function inventus_custom_setup() {
	// Enable editor styles support
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	// Title tag support
	add_theme_support( 'title-tag' );

	// Post thumbnails support
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'inventus_custom_setup' );
