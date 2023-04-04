<?php

//Write a program to accept two integers and return true if either one is 15 or if their sum or difference is 15.

$integer1 = 23;
$integer2 = 8;
function fifteen(int $integer1, int $integer2): bool
{
    if (($integer1 == 15 || $integer2 == 15) || ($integer1 + $integer1 = 15) || ($integer1 - $integer2 === 15)) {
        return true;
    }
    return false;
}

var_dump(fifteen($integer1, $integer2));

