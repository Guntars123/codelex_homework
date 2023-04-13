<?php declare(strict_types=1);

$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinks = 0.64;


$energyDrinkers = calculateEnergyDrinkers($surveyed, $purchasedEnergyDrinks);
$preferCitrus = calculatePreferCitrus($energyDrinkers, $preferCitrusDrinks);

echo "Total number of people surveyed: " . $surveyed . PHP_EOL;
echo "Approximately " . $energyDrinkers . " bought at least one energy drink" . PHP_EOL;
echo $preferCitrus . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;

function calculateEnergyDrinkers(int $surveyed, float $purchasedEnergyDrinks): float
{
    return ceil($surveyed * $purchasedEnergyDrinks);
}

function calculatePreferCitrus(float $energyDrinkers, float $preferCitrusDrinks): float
{
    return ceil($energyDrinkers * $preferCitrusDrinks);
}



