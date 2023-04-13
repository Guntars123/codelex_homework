<?php declare(strict_types=1);

class Product
{
    private string $name;
    private float $startPrice;
    private int $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct(): void
    {
        echo "$this->name, price $this->startPrice, amount $this->amount" . PHP_EOL;
    }

    public function setStartPrice(float $startPrice): void
    {
        $this->startPrice = $startPrice;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }
}