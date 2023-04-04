<?php declare(strict_types=1);

//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
// Create a for loop that iterates non-associative array using php in-built function that
// determines count of elements in the array. Create a function that doubles the integer number.
// Within the loop using php in-built function print out the double of the number value
// (using your custom function).

$almost_all_numbers = [2, 4, 6, 5.5, "one"];

function integerDoubler(array $array): void
{
    for ($i = 0; $i < count($array); $i++) {
        if (is_int($array[$i]) === true) {
            echo $array[$i] * 2 . PHP_EOL;
        } else {
            echo $array[$i] . PHP_EOL;
        }
    }
}

integerDoubler($almost_all_numbers);