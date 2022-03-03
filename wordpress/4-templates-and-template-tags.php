<?php
/**
 * Templates and Template Tags
 * 1. Template hierarchy (more in the next course): https://developer.wordpress.org/themes/basics/template-hierarchy/#Visual_Overview
 * 2. Template tags: https://codex.wordpress.org/Template_Tags
 * *** Note: *** The prefixes help you know what they do:
 * - the_*: generally render the output of content with HTML.
 * - get_*: return the information to you in an object or array. still needs to be rendered.
 * - wp_*: these are older functions, I believe, meant to be namespaced.
 *
 * 3. Replace template parts with template tags.
 */

// General Tags
get_header()
get_footer()
get_sidebar()
get_template_part()
get_search_form()

// Author
the_author()
get_the_author()
the_author_link()
get_the_author_link()
the_author_meta()
the_author_posts()

// Post tags
the_category()
the_content()
the_excerpt()
the_ID()
the_meta()
the_tags()
the_title()
get_the_title()
wp_get_attachment_image()
wp_get_attachment_image_src()


// Image Tags
has_post_thumbnail()
get_post_thumbnail_id()
the_post_thumbnail()
get_the_post_thumbnail()
get_the_post_thumbnail_url()