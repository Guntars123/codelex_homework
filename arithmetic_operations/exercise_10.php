<?php
class Geometry
{
    public static function circleArea($r): float
    {
            return pi() * pow($r, 2);
    }

    public static function rectangleArea($length, $width):float
    {
            return $length * $width;
    }

    public static function triangleArea($base, $height):float
    {
            return $base * $height * 0.5;

    }
}

$calcFunctions = [
    "1.Calculate the Area of a Circle",
    "2.Calculate the Area of a Rectangle",
    "3.Calculate the Area of a Triangle",
    "4.Quit",
];

echo "Geometry calculator:" . PHP_EOL;

for ($i=0; $i<count($calcFunctions); $i++) {
    echo $calcFunctions[$i] . PHP_EOL;
}


while (true) {
    $userSelection = readline("Enter Your choice (1-4): ");

    if ($userSelection < 1 || $userSelection > 4) {
        echo "----------------------------------------------------------------------" . PHP_EOL;
        echo "Invalid input, please choose between (1-4)" . PHP_EOL;
        continue;
    }
    break;
}

while (true) {
    if ($userSelection == 1) {
        $r = readline("Enter circle radius in CM: ");
        if ($r > 0) {
            $circle = new Geometry();
            $circleArea = $circle::circleArea($r);
            echo "----------------------------------------------------------------------" . PHP_EOL;
            echo "Circle area is $circleArea cm2" . PHP_EOL;
            echo "----------------------------------------------------------------------" . PHP_EOL;
        } else {
            echo "Parameters should be positive. Try again!" . PHP_EOL;
            continue;
        }
    }

    if ($userSelection == 2) {
        $width = readline("Enter rectangle width in CM: ");
        $length = readline("Enter rectangle length in CM: ");
        if ($length > 0 && $width > 0) {
            $rectangle = new Geometry();
            $rectangleArea = $rectangle::rectangleArea($length, $width);
            echo "----------------------------------------------------------------------" . PHP_EOL;
            echo "Rectangle area is $rectangleArea cm2" . PHP_EOL;
        } else {
            echo "----------------------------------------------------------------------" . PHP_EOL;
            echo "Parameters should be positive. Try again!" . PHP_EOL;
            continue;
        }
    }

    if ($userSelection == 3) {
        $base = readline("Enter triangle base in CM: ");
        $height = readline("Enter triangle height in CM: ");
        if ($base > 0 && $height > 0) {
            $triangle = new Geometry();
            $triangleArea = $triangle::triangleArea($base, $height);
            echo "----------------------------------------------------------------------" . PHP_EOL;
            echo "Triangle area is $triangleArea cm2" . PHP_EOL;
        } else {
            echo "----------------------------------------------------------------------" . PHP_EOL;
            echo "Parameters should be positive. Try again!" . PHP_EOL;
            continue;
        }
    }
    if ($userSelection == 4) {
        echo "----------------------------------------------------------------------" . PHP_EOL;
        echo "BYE!!!!!!!!!!!!!" . PHP_EOL;
        break;
    }

    break;
}
