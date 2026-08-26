<?php
/**
 * Enqueue Parent and Child Theme Stylesheets
 */
function my_child_theme_enqueue_styles() {
    // 1. Load Parent Theme Stylesheet
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // 2. Load Child Theme Stylesheet
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array( 'parent-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );
