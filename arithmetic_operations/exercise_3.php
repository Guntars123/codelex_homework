<?php

//Write a program to produce the sum of 1, 2, 3, ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average. The output shall look like:
//The sum of 1 to 100 is 5050
//The average is 50.5

$rangeMin = 1;
$rangeMax = 100;

function sumAverage(int $rangeMin, int $rangeMax): void
{
    $sum = 0;
    for ($i = $rangeMin; $i <= $rangeMax; $i++) {
        $sum += $i;
    }
    echo "The sum of $rangeMin to $rangeMax is $sum" . PHP_EOL;
    echo "The average is " . $sum / $rangeMax . PHP_EOL;
}

sumAverage($rangeMin, $rangeMax);