<?php
/**
 * Loops
 * https://www.php.net/manual/en/language.control-structures.php
 * 1. ***While***
 * 2. Do While
 * 3. ***Foreach***
 * 4. For 
 * 5. Continue and break
 */

echo '<pre>';

$x = 1;
// While (evaluates first).
while($x <= 5) {
  echo "I have $x peanut butter cups!<br>";
  $x++;
}

// Do while, executes at least once.
$y = 6;

do {
  echo "Now I have $y peanut butter cups!! <br>";
  $y++;
} while ($y <= 5);



// Foreach
$something = array(
    'old' => 'pyramids',
    'new' => 'keepin up...',
    'borrowed' => 'can I have that back?',
    'blue' => 'tobias fünke',
);

// Associative arrays
foreach ( $something as $key => $value ) {
    echo "Something $key... ";
}
echo '<br>';
// Indexed arrays
foreach ( $something as $item ) {
    var_dump( $item );
}


// For
for ( $i = 0; $i <= 10; $i++ ) {
    echo "The number is: $i <br>";
}