<?php

//Create a person object with name, surname and age.;
// Create a function that will determine if the person has reached 18 years of age.;
// Print out if the person has reached age of 18 or not.;

$person = new stdClass();
$person->name = "Anna";
$person->surname = "Vanna";
$person->age = 17;

function authorise(object $person): void
{
    if ($person->age >= 18) {
        echo "$person->name $person->surname is older than 18. Authorized!" . PHP_EOL;;
    } else {
        echo "$person->name $person->surname is less than 18. No authorization!" . PHP_EOL;
    }
}

authorise($person);