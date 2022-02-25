<?php
/**
 * Declaring functions: 
 * https://www.php.net/manual/en/language.functions.php
 * 1. PHP functions.
 * 2. User defined functions
 * 3. Scope
 *
 * Functions can DO things and RETURN things.
 */

// Internal function examples.
$phrase   = str_replace( 'What is up?', 'Top of the morning!', 'What is up? How are you today?' );
$int_val  = intval( '5' );
$position = strpos( 'My name is Nate.', 'Nate' );

echo '<pre>';
var_dump( $phrase );
var_dump( $int_val );
var_dump( $position );
var_dump( function_exists( 'strpos' ) );

// Declaring functions.

// Annonymous.

$greet = function( $name ) {
	 echo 'Hello ' . $name . '</br>';
};

$greet('World');
$greet('PHP');
$y = 4;

// Annonymous arrow, mind the scope.
$add = fn( $x ) => $x + $y;
// equivalent to using $y by value:
$adder = function( $x ) use ( $y ) {
	return $x + $y;
};

$y = 4;

var_dump( $add(4) );
var_dump( $add(5) );
// Variable functions.
function awesome_sauce( $value ) {
	echo "Take it up to $value";
	return 'Or just to ' . $value;
}

echo '<pre>';
awesome_sauce( $int_val );
$result = awesome_sauce( $int_val );

var_dump( $result );