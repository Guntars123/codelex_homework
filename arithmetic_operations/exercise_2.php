<?php

//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
// or “Even Number” otherwise. The program shall always print “bye!” before exiting.

$number = 3;

function CheckOddEven(int $number): void
{
    if ($number % 2 != 0) {
        echo "Odd Number" . PHP_EOL;
    } else {
        echo "Even Number" . PHP_EOL;
    }
    echo "bye!" . PHP_EOL;
}

CheckOddEven($number);