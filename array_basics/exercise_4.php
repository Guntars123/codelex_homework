<?php

// Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
// It should copy all the elements of that array into another array of the same size.
//Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.
//Create an array of ten integers
//Fill the array with ten random numbers (1-100)
//Copy the array into another array of the same capacity
//Change the last value in the first array to a -7
//Display the contents of both arrays
//Array 1: 45 87 39 32 93 86 12 44 75 -7
//Array 2: 45 87 39 32 93 86 12 44 75 50


$array1 = [];
$array2 = [];
$arraySize = 10;
$rangeMin = 1;
$rangeMax = 100;
$newLastValue = -7;

$result1 = "Array 1: ";
$result2 = "Array 2: ";

for ($i = 0; $i < $arraySize; $i++) {
    $randomNumber = rand($rangeMin, $rangeMax);
    $array1[] = $randomNumber;
}
for ($j = 0; $j < $arraySize; $j++) {
    $array2 = $array1;
    $result2 .= $array2[$j] . " ";
}

for ($k = 0; $k < $arraySize; $k++) {
    $array1[$arraySize - 1] = $newLastValue;
    $result1 .= $array1[$k] . " ";
}

echo $result1 . PHP_EOL;
echo $result2 . PHP_EOL;