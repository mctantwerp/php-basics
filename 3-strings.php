<?php

$firstName = 'Alessandro';
$lastName = 'Aussems';

$fullName = $firstName . ' ' . $lastName; //Concatenating two strings

$lengthOfFirstName = strlen($firstName); //10
$reversedFirstName = strrev($firstName); //ordnasselA
$positionOfMInLastName = strpos($lastName, 'm'); //5
$lastNameWithOu = str_replace('Au', 'Ou', $lastName); //Oussems

# Want more? See: https://www.w3schools.com/php/php_ref_string.asp