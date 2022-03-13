<?php
/**
 * Enqueueing
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 * 
 * 1. What it is and why we do it.
 * 2. wp_enqueue_scripts
 * 3. wp_enqueue_script and wp_enqueue_style
 * - https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * - https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * 4. Scripts available to be enqueued in WordPress.
 * 5. Register style/script: 
 */

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

// For proper versioning based on the file’s last modified time, you can use something similar to:
wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/style.css', array(), filemtime( get_template_directory() . '/css/style.css' ), 'all' );

$my_js_ver  = date( "ymd-Gis", filemtime( get_stylesheet_directory_uri() . 'js/custom_script.js' ) );
wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom_script.js', array( 'jquery' ), $my_js_ver, true );

