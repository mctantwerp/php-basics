<?php
$z = 1;

while ($z < 5) {
    echo $z;
    $z++;
}

$w = 0;

do {
    echo 'Hello';
    $w++;
}while($w < 10);


$schools = ['KdG', 'Thomas More', 'KU Leuven'];

for ($i =0; $i < count($schools); $i++){
    echo 'School: '.$schools[$i];
}


$teachersAndComputers = ["Alessandro" => "Mac","Sam" => "Windows","Bram" => "Linux"];

foreach ($teachersAndComputers as $key => $value){
    echo 'The computer from '.$key.' is a '.$value;
}