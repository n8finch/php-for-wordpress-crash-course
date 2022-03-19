<?php
/**
 * Actions and filters
 * https://codex.wordpress.org/Plugin_API#Hooks:_Actions_and_Filters
 * 
 * 1. do_action, apply_filters
 * 2. add_action, add_filter
 * 3. Finding actions and filters in WP core, themes and plugins
 */
$value = 'This is a song that never ends...';
$process = [
    'title'            => 'A cool process',
    'thing_to_process' => ''
];
// Actions hook in and allow functions to run.
do_action( 'after_post_content' );
do_action( 'after_some_process_completes', $process, $value );

// Filters always take at least input and MUST return something.
$new_value = apply_filters( 'rework_lyrics', $value );

// Add and action to the actions above.
add_action( 'after_post_content', function() {
    echo '<p>... And that is the end of that!</p>';
});

add_action( 'after_some_process_completes', 'post_process_check', 10, 2 );
function post_process_check( $process, $value ) {
    echo 'The process is: ' . $process['title'];
};

// This will return a new value.
add_filter( 'rework_lyrics', function( $value ) {
    return str_replace( 'never', 'always', $value );
});
