<?php declare(strict_types=1);

class Car
{
    private string $name;
    private FuelGauge $fuelGauge;
    private Odometer $odometer;
    private array $tires;

    public function __construct(
        string    $name,
        FuelGauge $fuelGauge,
        Odometer  $odometer,
        array     $tires = []
    )
    {
        $this->fuelGauge = $fuelGauge;
        $this->odometer = $odometer;
        $this->name = $name;

        foreach ($tires as $tire) {
            $this->addTire($tire);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFuelAmount(): float
    {
        return $this->fuelGauge->getLiters();
    }

    public function getMileage(): int
    {
        return $this->odometer->getMileage();
    }

    public function drive(): void
    {
        $this->odometer->increment();
        $this->fuelGauge->decrement($this->fuelGauge->getPerHundred() / 100);

        foreach ($this->tires as $tire) {
            /** @var Tire $tire */
            $tire->burn();
        }
    }

    public function getTires(): array
    {
        return $this->tires;
    }

    private function addTire(Tire $tire): void
    {
        $this->tires[] = $tire;
    }
}