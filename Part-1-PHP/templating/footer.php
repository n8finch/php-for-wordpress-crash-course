<?php


function get_footer() {
    ob_start();
    ?>

        <footer>
            Copyright 2022 - present
        </footer>
    </body>
    </html>
    <?php

    echo ob_get_clean();
}