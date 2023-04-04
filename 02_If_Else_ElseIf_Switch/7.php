<?php

//Create a variable $number with integer by your choice.;
// Create a switch statement that prints out text "low" if the value is under 50,;
// "medium" if the case is higher than 50 but lower than 100,;
// "high" if the value is >100.;

$number = 101;


switch ($number) {
    case ($number < 50 && is_integer($number)):
        echo "low";
        break;
    case ($number >= 50 && $number < 100 && is_integer($number)):
        echo "medium";
        break;
    case ($number >= 100 && is_integer($number)):
        echo "high";
        break;
    default:
        echo "invalid input";
}


echo PHP_EOL;