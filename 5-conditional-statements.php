<?php

$x = 1;

if($x === 1) {
    echo 'X is the first';
} elseif ($x === 2) {
    echo 'X is the second';
} else {
    echo 'X is something';
}


$y = 33;

if($y > 20 && $y < 34) {
    echo 'Y is between 20 and 34';
}

if($y > 34 && $y <= 55) {
    echo 'Y is between 34 and 56';
}

if($y > 34 AND $y <= 55) {
    echo 'Y is between 34 and 56';
}

if($y > 34 and $y <= 55) {
    echo 'Y is between 34 and 56';
}

if($y === 20 || $y === 30) {
    echo 'Y is twenty or thirty';
}

if($y === 20 OR $y === 30) {
    echo 'Y is twenty or thirty';
}

if($y === 20 or $y === 30) {
    echo 'Y is twenty or thirty';
}


$itIsRainingMen = false;

if($itIsRainingMen) {
    echo 'Halleluyah!';
}



$today = 'Tuesday';

switch ($today) {
    case 'Monday':
        echo 'I hate today';
        break;
    case 'Tuesday';
        echo 'I love today!';
        break;
    default:
        echo 'Meh';
}