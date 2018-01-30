<?php

$v1 = 1;
$v2 = 1;

$v3 = 2;
$v4 = 3;

$restult1 = $v1 == $v2;
echo 'Result 1: <br>';
var_dump($restult1);

echo '<br><br>';

$restult2 = $v3 == $v4;
echo 'Result 2: <br>';
var_dump($restult2);

$result3 = $restult1 && $result2;

echo '<br><br>';
echo 'Result Final AND: </br>';
var_dump($result3);

$result4 = $restult1 || $result2;

echo '<br><br>';
echo 'Result Final OR: </br>';
var_dump($result4);