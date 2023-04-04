<?php

/** Create a 2D associative array in 2nd dimension with fruits and their weight.
 * Create a function that determines if fruit has weight over 10kg.
 * Create a secondary array with shipping costs per weight.
 * Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
 * Using foreach loop print out the values of the fruits and how much it would cost to ship this product.
 */

$fruits = [
    ["name" => "bananas", "weight" => 8],
    ["name" => "oranges", "weight" => 20],
    ["name" => "apples", "weight" => 5],
    ["name" => "kiwi", "weight" => 24],
];

$shipping_costs_fruits = [
    "lightload" => 1,
    "heaveyload" => 2
];

function totalShippingCosts(array $products, array $shipping_costs): void
{
    foreach ($products as $product) {
        $name = $product["name"];
        $weight = $product["weight"];
        if ($weight < 10) {
            $total_cost = $weight * $shipping_costs["lightload"];
        } else {
            $total_cost = $weight * $shipping_costs["heaveyload"];
        }
        echo "$name with weight of $weight kg - total shipping cost will be $total_cost EUR" . PHP_EOL;
    }
}

totalShippingCosts($fruits, $shipping_costs_fruits);