<?php

$array1 = [
    1 => 'b',
    2 => 'c',
    0 => 'a'
];

// Union: abcde
/*
$array2 = [
    3 => 'd',
    4 => 'e',
];
*/

// abce
/*
$array2 = [
    2 => 'd',
    4 => 'e',
];*/

//$result = $array1 + $array2; 

$array2 = ['a', 'b', 'c'];

var_dump($array1 == $array2); //True si tienen los mismos key => valor
var_dump($array1 === $array2); //False si tienen los mismos key => valor (y tipo) pero no el mismo orden

?>