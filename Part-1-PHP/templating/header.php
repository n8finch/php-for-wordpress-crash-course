<?php
/**
 * Just an easy get_header().
 *
 * @return string
 */

function get_header() {
    global $site_title;
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $site_title; ?></title>
    </head>
    <body>
        <header>
            <h1><?php echo $site_title; ?></h1>
            <nav>
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </header>
    <?php
    echo ob_get_clean();
}