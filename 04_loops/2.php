<?php

//Create an array with integers (up to 10) and print them out using for loop.;

$integers = [
    10, 20, 30, 40, 50, 60, 70, 80, 90, 100
];

for ($i = 0; $i < count($integers); $i++) {
    echo $integers[$i] . PHP_EOL;
}