<?php
/**
 * The Loop!
 * https://codex.wordpress.org/The_Loop
 * https://developer.wordpress.org/themes/basics/the-loop/
 * 
 * 1. This is what makes WordPress... WordPress!
 * 2. 
 */

// The basic loop:
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
    endwhile; 
endif; 

// Written another way:
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if

// Twentytwenty theme: /twentytwenty/singular.php
?>
<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->
<?php
