<?php

//Write a program to compute the product
// of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

$minRange = 1;
$maxRange = 10;

function product(int $minRange, int $maxRange): int
{
    return array_product(range($minRange, $maxRange));
}

var_dump(product($minRange, $maxRange));