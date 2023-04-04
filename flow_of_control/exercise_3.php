<?php

//Write a program that reads a positive integer and count the number of digits the number has.


$number = 30000000000000000;

function countDigits (int $number) : void {
    if ($number>0){
        echo strlen((string) $number) . PHP_EOL;
    } else {
        echo "Integer must be positive" . PHP_EOL;
    }
}

countDigits($number);