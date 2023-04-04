<?php

//Create a function that accepts any string and returns the same value;
// with added "codelex" by the end of it. Print this value out.;


function stringConverter(string $string): string
{
    return $string . "codelex" . PHP_EOL;
}

;

print_r(stringConverter("I am learning at "));