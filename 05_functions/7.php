<?php declare(strict_types=1);

//Imagine you own a gun store. Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object)
// Person object has a name, valid licenses (multiple) & cash.
// Guns are objects stored within an array. Each gun has license letter, price & name.
// Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

$person = new stdClass();
$person->name = "Peters";
$person->licenses = ["A", "B"];
$person->cash = 50000;

function createWeapon(string $name, int $price, string $license): stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->price = $price;
    $weapon->license = $license;

    return $weapon;
}

$weapons = [
    "bomb" => createWeapon("dynamite", 2000, "A"),
    "knife" => createWeapon("kinzhal", 1000, "A"),
    "pistol" => createWeapon("glock", 10000, "A"),
    "ak47" => createWeapon("ak47 supreme", 30000, "B"),
    "awp" => createWeapon("awp silent", 70000, "C"),
];

$cash = $person->cash / 100;
$license = implode(", ", $person->licenses);

echo "Welcome $person->name $$cash [$license]" . PHP_EOL;
echo "---------------------------------------------" . PHP_EOL;

foreach ($weapons as $key => $weapon) {
    $price = $weapon->price / 100;
    echo "$key | $weapon->name | $$price | $weapon->license " . PHP_EOL;
}

$selectedWeapon = null;

while ($selectedWeapon == null) {
    $selection = readline("Please select weapon: ");

    if (!array_key_exists($selection, $weapons)) {
        echo "Weapon not found" . PHP_EOL;
        continue;
    }

    if (!in_array($weapons[$selection]->license, $person->licenses)) {
        echo "Invalid license" . PHP_EOL;
        continue;
    }

    if ($person->cash < $weapons[$selection]->price) {
        echo "Not enough cash" . PHP_EOL;
        continue;
    }

    $selectedWeapon = $weapons[$selection];
}

echo "Purchase successful, Thank you!" . PHP_EOL;

$person->cash -= $selectedWeapon->price;

echo $person->cash / 100;
echo PHP_EOL;