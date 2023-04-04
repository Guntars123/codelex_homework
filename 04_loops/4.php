<?php

//Create a non associative array with integers and print out only integers that divides by 3 without any left.;

$integers = [
    10, 20, 30, 40, 50, 60, 70, 80, 90, 100
];

foreach ($integers as $integer) {
    if ($integer % 3 === 0) {
        echo $integer . PHP_EOL;
    }
}