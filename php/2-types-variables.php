<?php
// Keep this opening tag!

/**
 * Docs: https://www.php.net/manual/en/language.types.intro.php
 *
 * PHP supports ten primitive types.
 *   Four scalar types:
 *   - bool
 *   - int
 *   - float (floating-point number, aka double)
 *   - string
 *   Four compound types:
 *   - array
 *   - object
 *   - callable
 *   - iterable
 *   And finally two special types:
 *   - resource
 *   - NULL
 */

// Declaring a variable.
$trueOrFalse = false;
$true_or_false = true;

$some_number = 3;
$some_float  = 867.5309;

$my_string = 'Hello there!';

$there_is_no_spoon   = null;
$there_is_no_spoon_1 = NULL;

const HELLO = 'howdy';
define( 'HELLO', '¡hola!' );

// We'll look at objects and arrays later.
// Callable, iterable, and resource most likely in another course.

echo '<pre>';
var_dump( $trueOrFalse );
var_dump( $true_or_false );
var_dump( $some_number );
var_dump( $some_float );
var_dump( $my_string );
var_dump( $there_is_no_spoon );
var_dump( $there_is_no_spoon_1 );
var_dump( HELLO );
