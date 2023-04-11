<?php declare(strict_types=1);

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;


$energyDrinkers = calculate_energy_drinkers($surveyed, $purchased_energy_drinks);
$preferCitrus = calculate_prefer_citrus($energyDrinkers, $prefer_citrus_drinks);

echo "Total number of people surveyed: " . $surveyed . PHP_EOL;
echo "Approximately " . $energyDrinkers . " bought at least one energy drink" . PHP_EOL;
echo $preferCitrus . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;

function calculate_energy_drinkers(int $surveyed, float $purchased_energy_drinks): float
{
    return ceil($surveyed * $purchased_energy_drinks);
}

function calculate_prefer_citrus(float $energyDrinkers, float $prefer_citrus_drinks): float
{
    return ceil($energyDrinkers * $prefer_citrus_drinks);
}



