<?php

//Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters. Note: The correct value is -490.5m.
// The formula in Math notation is: x=0.5*at^2+vt +x

$acceleration = -9.81;
$time = 10;
$initialVelocity = 0;
$initialPosition = 0;

function gravity(float $acceleration, float $time, float $initialVelocity, float $initialPosition): float {
    return 0.5 * $acceleration * pow($time,2) + $initialVelocity*$time + $initialPosition;
}

$position = gravity($acceleration,$time,$initialVelocity,$initialPosition);

echo "{$position}m" .PHP_EOL;