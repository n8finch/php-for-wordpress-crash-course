<?php
// Keep this opening tag!
include './php/templating/data.php'; // Execution will continue of the file can't be found.
include_once './php/templating/header.php'; // If the file has already been included, it won't do it again.
require './php/templating/content.php'; // Will throw a fatal error if the file
require_once './php/templating/footer.php'; // If the file has already been required, it won't do it again.

get_header();
get_content();
get_footer();