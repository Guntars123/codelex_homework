<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$userInput = readline("Enter the value to search for: ");

// check if an array contains a value user entered

if (!in_array($userInput, $numbers)) {
    echo 'There is no such value in array' . PHP_EOL;
} else {
    echo 'Array contains a value you entered' . PHP_EOL;
}