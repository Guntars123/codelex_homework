<?php

//Create a array of objects that uses the function of exercise 3;
// but in loop printing out if the person has reached age of 18.;

function createPerson (string $name, string $surname, int $age): stdClass
{
    $person = new stdClass();
    $person->name = $name;
    $person->surname = $surname;
    $person->age = $age;
    return $person;
}

$persons = [
    $person1 = createPerson("Fred", "Brown", 30),
    $person2 = createPerson("Mark", "Black", 18),
    $person3 = createPerson("Tom", "Silver", 17)
];

function authorise(array $persons):void{
    foreach ($persons as $person) {
        if ($person->age >= 18) {
            echo "$person->name $person->surname is older than 18. Authorized!".PHP_EOL;
        } else {
            echo "$person->name $person->surname is less than 18. NO AUTHORIZATION!".PHP_EOL;
        }
    }
}

authorise($persons);