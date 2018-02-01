<?php

$var2 = 1;

//$var = function (){
/*$var = function () use ($var2){
    echo 'this is a closure';
    echo 'value2: '. $var2;
};

$var();*/

$numbers = [1, 2, 3, 4, 5];
$x = 3;

$closure = function ($n) use ($x){
    return $n * $x;
};

$x = 4;

$result = array_map($closure, $numbers);

var_dump($result);

