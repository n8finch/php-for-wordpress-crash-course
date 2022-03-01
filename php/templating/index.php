<?php
// Keep this opening tag!
include './php/templating/data.php';
include_once './php/templating/header.php';
require './php/templating/content.php';
require_once './php/templating/footer.php';

get_header();
get_content();
get_footer();