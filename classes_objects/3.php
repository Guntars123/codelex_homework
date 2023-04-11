<?php declare(strict_types=1);

class  FuelGauge
{
    private int $fuelAmount;

    public function __construct($fuelAmount)
    {
        $this->fuelAmount = $fuelAmount;
    }

    public function reportFuelAmount(): void
    {
        echo "Fuel amount - $this->fuelAmount" . PHP_EOL;
    }

    public function incrementFuelAmount(): void
    {
        if ($this->fuelAmount < 70) {
            $this->fuelAmount++;
        } else {
            echo "Fuel Tank is full" . PHP_EOL;
            exit;
        }
    }

    public function decrementFuelAmount(): void
    {
        if ($this->fuelAmount > 1) {
            $this->fuelAmount--;
        } else {
            echo "Fuel Tank is empty" . PHP_EOL;
            exit;
        }
    }
}

class  Odometer
{
    private int $mileage;

    public function __construct($mileage)
    {
        $this->mileage = $mileage;
    }

    public function reportMileage()
    {
        echo "Mileage - $this->mileage" . PHP_EOL;
    }

    public function incrementMileage()
    {
        if ($this->mileage < 999.999) {
            $this->mileage++;
        } else {
            $this->mileage = 0;
        }
    }

    public function decreaseFuelGauge(FuelGauge $object)
    {
        if ($this->mileage > 0 && $this->mileage % 10 == 0) {
            $object->decrementFuelAmount();
        }
    }
}

$fuelGauge = new FuelGauge(68);
$odometer = new Odometer(0);

$fuelGauge->incrementFuelAmount();
$fuelGauge->incrementFuelAmount();


while (true) {
    $fuelGauge->reportFuelAmount();
    $odometer->reportMileage();
    $odometer->decreaseFuelGauge($fuelGauge);
    $odometer->incrementMileage();
}
