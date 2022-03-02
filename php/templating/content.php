<?php

function get_content() {
    global $posts;
    ob_start();
    if ( 0 < count( $posts ) ) {
    ?>
    <main>
        <?php foreach ( $posts as $post ) : ?>
        <article>
            <h2><?php echo $post->title; ?></h2>
            <p><?php echo $post->content; ?></p>
        </article>
        <?php endforeach ?>
    </main>
    <?php 
    }
    echo ob_get_clean();
}