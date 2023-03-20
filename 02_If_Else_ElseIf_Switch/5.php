<?php

//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.;
//Range should be stored within the 2 separated variables $y and $z.;

$integer = 50;
$y = 1;
$z = 100;

if ($integer > $y && $integer <$z){
    echo "correct";
} else {
    echo "its not in the range";
}

echo PHP_EOL;