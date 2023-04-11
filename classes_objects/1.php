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

class Main
{
    public function test(): void
    {

        $product1 = new Product("Logitech mouse", 70, 14);
        $product2 = new Product("iPhone 5s", 999.99, 3);
        $product3 = new Product("Epson EB-U05", 440.46, 1);


        $product1->printProduct();
        $product2->printProduct();
        $product3->printProduct();
        echo "------------------------------------------------------------------------------" . PHP_EOL;
        $product1->setStartPrice(100);
        $product2->setAmount(200);
        $product1->printProduct();
        $product2->printProduct();
    }
}

(new Main)->test();


