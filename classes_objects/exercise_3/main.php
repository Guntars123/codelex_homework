<?php declare(strict_types=1);

require_once "FuelGauge.php";
require_once "Odometer.php";
require_once "Tire.php";
require_once "Car.php";


$carName = readline("Enter name of your car: ");
$perHundred = (float)readline("What is fuel consumption in liters on 100 km: ");

$car = new Car(
    $carName,
    new FuelGauge(70, $perHundred),
    new Odometer(),
    [new Tire, new Tire, new Tire(70), new Tire]
);

while ($car->getFuelAmount() > 0) {
    $car->drive();
    sleep(1);

    echo $car->getName() . " took a 1 km trip - ";
    echo $car->getFuelAmount() . " liters in fuel tank left. ";
    echo "Odometer shows " . $car->getMileage() . " km mileage ";

    /** @var Tire[] $tires */
    $tires = $car->getTires();

    echo PHP_EOL;
    echo "---Tires---" . PHP_EOL;
    echo "FR:" . $tires[0]->getQuality() . " ";
    echo "FL:" . $tires[1]->getQuality() . " ";
    echo "BR:" . $tires[2]->getQuality() . " ";
    echo "BL:" . $tires[3]->getQuality() . " ";
    echo PHP_EOL;

    foreach ($car->getTires() as $tire) {
        if ($tire->getQuality() <= 0) {
            echo "Tire has worn out. Call service" . PHP_EOL;
            exit;
        }
    }

    if ($car->getFuelAmount() < 10) {
        echo " !!! LOW FUEL LEVEL";
    }

    echo PHP_EOL;
}
