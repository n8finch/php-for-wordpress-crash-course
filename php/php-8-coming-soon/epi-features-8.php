<?php

$indexed = [
    'one',
    'two',
    'three',
];

[$thing, $thang, $thung ] = $indexed;
// Skip.
[ , , $thoong ] = $indexed;

echo '<pre>';
var_dump( $thing );
var_dump( $thang );
var_dump( $thung );
var_dump( $thoong );


$assoc = [
    'thing' => 'one',
    'thang' => 'two'
];

['thing' => $thing, 'thang' => $thang ] = $assoc;

echo '<pre>';
var_dump( $thing );
var_dump( $thang );



// Unpacking Arrays.

$arrayA = [1, 2, 3];

$arrayB = [4, 5];

$result = [0, ...$arrayA, ...$arrayB, 6, 7];

echo '<pre>';
var_dump($result);

$arrayAB = ['a' => 1];

$arrayBB = ['b' => 2];

$result = ['a' => 0, ...$arrayAB, ...$arrayBB];

echo '<pre>';
var_dump($result);
