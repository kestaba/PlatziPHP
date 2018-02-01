<?php

$color = 'white';

/*if ($color == 'black'){
    echo 'color is black';
}elseif ($color == 'white'){
    echo 'color is white';
}else{
    echo 'color is not black';
}*/

switch ($color){
    case 'blue':
        echo 'color is blue';
        break;
    case 'red':
        echo 'color is red';
        break;
    default:
        echo 'other';
        break;
}