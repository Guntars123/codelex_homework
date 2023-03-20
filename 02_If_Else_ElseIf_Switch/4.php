<?php

//By your choice, create condition with 3 checks.;
//For example, if value is greater than X, less than Y and is an even number.;

$number = 45;
$x = 12;
$y = 100;

if ($number > $x && $number < $y && $number % 2 !== 0 ){
    echo "The number $number passed the criteria";
} else {
    echo "The number $number didnt pass the criteria";
}

echo PHP_EOL;

