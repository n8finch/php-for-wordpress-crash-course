<?php
/**
 * SUPERGLOBALS and CONSTANTS
 * https://www.php.net/manual/en/language.variables.superglobals.php
 */

// $_SERVER
// $_REQUEST
// $_GET
// $_POST
// $_FILES
// $_SESSION
// $_COOKIE
// $_ENV
// $GLOBALS

// __DIR__
// __FILE__
// __LINE__

const THING = 'hello';
define( 'THANG', [1, 2, 3] );

?>
<form method="POST" action="/" enctype="multipart/form-data">
    <h1><?php echo THING; ?></h1>
    <input type="text" name="name"/><br/><br/>
    <input type="file" name="files"><br/><br/>
    <input type="submit" value="Test It">
</form>