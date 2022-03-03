<?php 
/**
 * Validate, Sanitize, Escape
 * - https://codex.wordpress.org/Data_Validation
 * - https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data
 * 1. "Validate/Sanitize early, escape late"
 * 2. Validation: is it a thing?
 * 3. Sanitization: clean it up (usually happens with validating)
 * 4. Escaping: make sure it displays safely
 */

// Validate:
is_email();

// Sanitize:
// Strips out all characters that are not allowable in an email.
sanitize_email();
// Checks for invalid UTF-8,
// Converts single < characters to entities
// Strips all tags
// Removes line breaks, tabs, and extra whitespace
// Strips octets
sanitize_text_field();

// Escaping:
// Encodes < > & " ' (less than, greater than, ampersand, double quote, single quote). Identical to esc_attr, except it applies the esc_html filter to the output.
esc_html();

// Rejects URLs that do not have one of the provided protocols (defaulting to http, https, ftp, ftps, mailto, news, irc, gopher, nntp, feed, and telnet), eliminates invalid characters, and removes dangerous characters.
// Function encodes characters as HTML entities
esc_url();

// Sanitizes content for allowed HTML tags for post content. Allowed tags can be filtered.
wp_kses_post();