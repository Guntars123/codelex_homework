<?php

$constKgToPounds = 2.2;
$constMetersToInches = 39.26;

class PersonBmi
{
    public float $weight;
    public float $height;

    public function __construct()
    {
        while (true) {
            $this->weight = readline("Enter Your weight in KILOGRAMS: ");
            if ($this->weight < 2 || $this->weight > 250) {
                echo "Invalid weight, i guess You typed something wrong" . PHP_EOL;
                continue;
            }
            $this->height = readline("Enter Your height in METERS: ");
            if ($this->height < 0.4 || $this->height > 2.5) {
                echo "Invalid height, i guess You typed something wrong" . PHP_EOL;
                continue;
            }
            break;
        }
    }

    public function getPersonsBmi($constKgToPounds, $constMetersToInches)
    {
        $weightInPounds = $this->weight * $constKgToPounds;
        $heightInMeters = $this->height * $constMetersToInches;
        $bmi = $weightInPounds * 703 / pow($heightInMeters, 2);
        switch ($bmi) {
            case ($bmi < 18.5) :
                echo "Your BMI index is " . number_format($bmi, 1) . ". Its considered underweight" . PHP_EOL;
                break;
            case ($bmi >= 18.5 && $bmi <= 25) :
                echo "Your BMI index is " . number_format($bmi, 1) . ". Its considered optimal" . PHP_EOL;
                break;
            case ($bmi > 25) :
                echo "Your BMI index is " . number_format($bmi, 1) . ". Its considered overweight" . PHP_EOL;
                break;
        }
    }
}


$person = new PersonBmi();
$person->getPersonsBmi($constKgToPounds, $constMetersToInches);



