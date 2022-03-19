<?php
/**
 * WP Query
 * 1. What is WP Query: https://developer.wordpress.org/reference/classes/wp_query/
 * 2. When to use it? get_posts() vs. WP Query
 * 3. How to use it with arguments
 * 4. wp_reset_postdata(): https://developer.wordpress.org/reference/functions/wp_reset_postdata/
 * 5. wp_reset_query(): https://developer.wordpress.org/reference/functions/wp_reset_query/
 */

// Set up arguments first:
// WP_Query arguments
$args = array(
    'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => '5', // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
);

// Simple example:
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();



// Muliple loops
$query1 = new WP_Query( $args );
 
// The Loop
while ( $query1->have_posts() ) {
    $query1->the_post();
    echo '<li>' . get_the_title() . '</li>';
}
 
/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset with 
 * wp_reset_query(). We just need to set the post data back up with
 * wp_reset_postdata().
 */
wp_reset_postdata();

 
/* The 2nd Query (without global var) */
$query2 = new WP_Query( $args2 );
 
// The 2nd Loop
while ( $query2->have_posts() ) {
    $query2->the_post();
    echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
}
 
// Restore original Post Data
wp_reset_postdata();


