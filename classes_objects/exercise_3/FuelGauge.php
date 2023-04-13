<?php declare(strict_types=1);

class  FuelGauge
{
    private float $liters;
    private float $perHundred;

    public function __construct(float $liters = 0, float $perHundred = 7)
    {
        $this->liters = $liters;
        $this->perHundred = $perHundred;
    }

    public function getLiters(): float
    {
        return $this->liters;
    }

    public function increment(float $amount = 1): void
    {
        if ($this->liters >= 70) return;


        $this->liters += $amount;
    }

    public function decrement(float $amount = 1): void
    {
        if ($this->liters <= 0)
            return;

        $this->liters -= $amount;
    }

    public function getPerHundred(): float
    {
        return $this->perHundred;
    }
}