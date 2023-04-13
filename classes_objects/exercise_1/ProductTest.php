<?php declare(strict_types=1);

class ProductTest
{
    public function main(): void
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