<?php
/**
 * Arrays: https://www.php.net/manual/en/function.array
 * 1. Short and long syntax
 * 2. Accessing indexes
 * 3. Array functions
 */

// Short syntax:
[ 1, 2, 3];
// Long syntax (WP Code Standards):
array( 'one', 'two', 'three' );

// Indexed vs Associative:
$indexed     = array( 1, 2, 3, 4, 5 );
$associative = array( 'one' => 'uno', 'two' => 'dos', 'three' => 'tres' );
echo '<pre>';
var_dump( $indexed );
var_dump( $associative );

// Accessing values:
var_dump( $indexed[0] );
var_dump( $indexed[2] );
var_dump( $associative['one'] );
var_dump( $associative['three'] );

// PHP array helpers.
var_dump( array_keys( $indexed ) );
var_dump( array_key_exists( '1', $indexed ) );
var_dump( array_key_exists( 'dos', $associative ) );
var_dump( array_values( $indexed ) );
var_dump( array_values( $associative ) );
var_dump( count( $indexed ) );

// Map
function map_it( $number ) {
    return ( $number * $number );
}
$new_array = array_map( 'map_it', $indexed );
var_dump( $new_array );

// Filter
function filter_it( $item ) {

    return 2 === $item; // A Yoda condition, this is.
}
var_dump( array_filter( $indexed, "filter_it" ) );

// Reduce
function reduce_it( $carry, $item ) {
    $carry *= intval( $item );
    return $carry;
}
var_dump( array_reduce( $indexed, "reduce_it", 2 ) );

// Also loops, coming soon!...

