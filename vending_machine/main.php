<?php

$products = [
    "coffee(l)" => addProduct("Coffee(L)", 189),
    "coffee(xl)" => addProduct("Coffee(XL)", 272),
    "hot chocolate" => addProduct("Hot Chocolate", 175),
    "tea" => addProduct("Tea", 145)
];

$coins = [200, 100, 50, 20, 10, 5, 2, 1];

echo "Welcome dear customer, we can offer you such products: " . PHP_EOL;

displayProducts($products);


while (true) {

    $input_product = strtolower(readline("Please select product to buy: " . PHP_EOL));

    if (validateProduct($input_product) === false) {
        echo "Invalid product, please try again" . PHP_EOL;
    } else {
        $selected_product = $products[$input_product];
        break;
    }
}

$wallet = 0;

while ($wallet < $selected_product->price) {

    $input_coins = readline("Please insert coins (we accept 2/1/0.50/0.20/0.10/0.05/0.02/0.01 EUR coins): ".PHP_EOL);
    if (validateCoin($input_coins,$coins) !== false) {
        $inserted_coins =  $input_coins  * 100;
        $wallet +=  $inserted_coins;

    } else {

        echo "Invalid coin, please insert valid coin" . PHP_EOL;
    }

    echo "Your wallet balance: " . number_format($wallet / 100, 2) . " EUR" . PHP_EOL;
    $reminder = $wallet - $selected_product->price;
    $reminder_to_echo = $reminder / 100;

    if ($reminder > 0){
        echo "--------------------------------------------------------------------------" . PHP_EOL;
        echo "Reminder is: $reminder_to_echo EUR" . PHP_EOL;
        echo "--------------------------------------------------------------------------" . PHP_EOL;
        echo "Vending machine ejects change: " . PHP_EOL;
        foreach ($coins as $coin){
            if ($reminder >= $coin) {
                $times = floor($reminder / $coin);
                $reminder -= $coin * $times;
                $coinAsMonet = number_format($coin / 100, 2);
                echo "$coinAsMonet EUR monet | $times time/s" . PHP_EOL;
            }
        }
        echo "--------------------------------------------------------------------------" . PHP_EOL;
        echo "Please take Your change and have a nice day :) " .PHP_EOL;
    }
}


function addProduct(string $title, int $price) :stdClass {
    $product = new stdClass();
    $product->title = $title;
    $product->price = $price;
    return $product;
}

function displayProducts (array $products) :void {
    foreach ($products as $product) {
        $product_price_echo = $product->price /100;
        echo "$product->title - price: $product_price_echo EUR | ";
    }
    echo PHP_EOL;
}

function validateProduct(string $input_product) {
    global $products;
    if (!array_key_exists($input_product,$products)){
        return false;
    } else {
        return $input_product;
    }
}

function validateCoin(string $input_coins, $coins) {
    $input_coins_in_cents = (int)($input_coins * 100);
    if (!in_array($input_coins_in_cents, $coins)) {
        return false;
    }
    return $input_coins;
}