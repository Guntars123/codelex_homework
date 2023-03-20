<?php

//Create an associative array with objects of multiple persons.;
//Each person should have a name, surname, age and birthday.;
// Using loop (by your choice) print out every persons personal data.;

$user1 = new stdClass();
$user1->name = "Antons";
$user1->surname = "Berziņs";
$user1->age = 30;
$user1->birthday = "12.11.1992";

$user2 = new stdClass();
$user2->name = "Liga";
$user2->surname = "Liepina";
$user2->age = 28;
$user2->birthday = "10.10.1994";

$user3 = new stdClass();
$user3->name = "Peters";
$user3->surname = "Ozols";
$user3->age = 29;
$user3->birthday = "09.09.1993";

$users = [
    $user1,
    $user2,
    $user3
];

foreach ($users as $user) {
    echo "User $user->name $user->surname is $user->age years old. The birthday is on $user->birthday" . PHP_EOL;
}