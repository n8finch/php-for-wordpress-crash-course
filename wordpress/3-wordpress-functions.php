<?php
/**
 * WordPress Functions
 * 1. What are helper functions?
 * 2. Look at templating helper functions (get_* and the_*)
 * 
 * WordPress APIs: https://codex.wordpress.org/WordPress_APIs
 * 3. Plugin API (apply_filers, do_action): https://codex.wordpress.org/Plugin_API
 * 4. Options API (get/update_option): https://codex.wordpress.org/Options_API
 * 4. Transients API (get/set_transient): https://developer.wordpress.org/apis/handbook/transients/
 */

// Examples we run into:
have_posts();
the_post();
get_header();
get_footer();
get_template_part( 'template-parts/entry-header' );
the_ID();
wp_link_pages();
esc_attr();
apply_filters();
has_category();
the_category();
the_title();
the_content();
// And the very controversial:
capital_P_dangit();
