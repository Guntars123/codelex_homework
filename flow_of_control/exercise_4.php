<?php

//Write a program which prints “Sunday”, “Monday”, ... “Saturday”
// if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
// Otherwise, it shall print "Not a valid day".
//Use:
//a "nested-if" statement
//a "switch-case-default" statement.

$dayNumber = 0;

switch ($dayNumber) {
    case 0 :
        echo "Sunday" . PHP_EOL;
        break;
    case 1 :
        echo "Monday" . PHP_EOL;
        break;
    case 2 :
        echo "Tuesday" . PHP_EOL;
        break;
    case 3 :
        echo "Wednesday" . PHP_EOL;
        break;
    case 4:
        echo "Thursday" . PHP_EOL;
        break;
    case 5 :
        echo "Friday" . PHP_EOL;
        break;
    case 6 :
        echo "Saturday" . PHP_EOL;
        break;
    default:
        echo "Not a valid day" . PHP_EOL;
}


$dayNumber1 = 8;

if ($dayNumber1 == 0) {
    echo "Sunday" . PHP_EOL;
} elseif ($dayNumber1 == 1) {
    echo "Monday" . PHP_EOL;
} elseif ($dayNumber1 == 2) {
    echo "Tuesday" . PHP_EOL;
} elseif ($dayNumber1 == 3) {
    echo "Wednesday" . PHP_EOL;
} elseif ($dayNumber1 == 4) {
    echo "Thursday" . PHP_EOL;
} elseif ($dayNumber1 == 5) {
    echo "Friday" . PHP_EOL;
} elseif ($dayNumber1 == 6) {
    echo "Saturday" . PHP_EOL;
} else {
    echo "Not a valid day" . PHP_EOL;
}