<?php

function get_content() {
    ob_start();
    ?>
    <main>
        <article>
            <h2>Hi there</h2>
            <p>Ipsum dolor sit amet consectetur adipisicing elit. Modi debitis facere, sed voluptatem, harum mollitia deserunt repudiandae dolorem nesciunt sint illo et nulla ipsa alias facilis. Excepturi consequatur deleniti laboriosam?</p>
        </article>
        <article>
            <h2>PHP Here</h2>
            <p>Dolor sit amet consectetur adipisicing elit. Modi debitis facere, sed voluptatem, harum mollitia deserunt repudiandae dolorem nesciunt sint illo et nulla ipsa alias facilis. Excepturi consequatur deleniti laboriosam?</p>
        </article>
        <article>
            <h2>One more thing</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi debitis facere, sed voluptatem, harum mollitia deserunt repudiandae dolorem nesciunt sint illo et nulla ipsa alias facilis. Excepturi consequatur deleniti laboriosam?</p>
        </article>
    </main>
    <?php 
    echo ob_get_clean();
}