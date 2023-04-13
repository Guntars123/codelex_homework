<?php declare(strict_types=1);

class  Odometer
{
    private int $mileage;

    public function __construct()
    {
        $this->mileage = 0;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function increment(int $amount = 1): void
    {
        $this->mileage += $amount;
    }
}