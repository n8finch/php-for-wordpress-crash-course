<?php
/**
 * WPDB Class
 * 1. What is it?: https://developer.wordpress.org/reference/classes/wpdb/
 * 2. When to use it?
 * 3. How to use it
 */

// Other functions to explore before using $wpdb:
get_posts();
get_pages();
get_terms();
WP_Query(); // Use WordPress APIs whenever possible.
wp_insert_post();

// Results
$fivesdrafts = $wpdb->get_results( 
    "
        SELECT ID, post_title 
        FROM $wpdb->posts
        WHERE post_status = 'draft'
        AND post_author = 5
    "
);
 
foreach ( $fivesdrafts as $fivesdraft ) {
    echo $fivesdraft->post_title;
}

// General Query
$result = $wpdb->query( 
    $wpdb->prepare( 
        "
            DELETE FROM $wpdb->postmeta
            WHERE post_id = %d
            AND meta_key = %s
        ",
            13, 'gargle'
        )
);