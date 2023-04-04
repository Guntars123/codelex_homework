<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];


echo "Original numeric array: " . PHP_EOL;
var_dump($numbers);


echo "Sorted numeric array: " . PHP_EOL;
sort($numbers);
var_dump($numbers);

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];


echo "Original string array: " . PHP_EOL;
var_dump($words);


echo "Sorted string array: " . PHP_EOL;;
sort($words);
var_dump($words);
