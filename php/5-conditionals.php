<?php
/**
 * Conditionals
 * 1. If/else
 * 2. Comparison and Logical Operators
 * 3. Conditional Assignment Operators (ternary and null coalescing)
 * 2. Switch
 */

echo '<pre>';

if ( true ) {
    var_dump( 'This is super true!' );
} else {
    var_dump( 'Otherwise this...' );
}


if ( ! true ) {
    var_dump( 'This is super true!' );
} elseif ( true ) {
    var_dump( 'This elseif is true!' );
} else {
    var_dump( 'None of the above.' );
}

// Equal.
var_dump( 42 ==	'42' );
// Identical.
var_dump( 42 === '42' );
// Not equal.
var_dump( 42 !=	'42' );
// Not identical.
var_dump( 42 !== '42' );
// Greater than.
var_dump( 21 > 81 );
// Less than.
var_dump( 21 < 18 );
// Greater than or equal to.
var_dump( 21 >= 21 );
// Less than or equal to.
var_dump( 21 <= 39 );
// Spaceship 👾
var_dump( 2 <=> 4 ); // -1, 0, +1

$something = array(
    'old' => 'pyramids',
    'new' => 'keepin up...',
    'borrowed' => 'can I have that back?',
    'blue' => 'tobias fünke',
);

switch ( 'old' ) {
    case 'old':
        var_dump( 'but the dinosaurs are older' );
        break;
    case 'new':
        var_dump( '... with the joneses' );
    case 'borrowed':
        var_dump( 'nope, it\'s mine now!' );
        break;
    case 'blue':
        var_dump( 'jean shorts' );
        break;
    
    default:
        var_dump( 'Just run this already!' );
        break;
}