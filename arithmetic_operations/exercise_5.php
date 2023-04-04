<?php

//Write a program that picks a random number from 1-100. Give the user a chance to guess it.
// If they get it right, tell them so. If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

echo "Hi, I'm thinking of a number between 1-100. Try to guess it" . PHP_EOL;
$randomNumber = rand(1, 100);

while (true) {
    $userInput = readline("Please type Your number: ");
    if ($userInput < 1 || $userInput > 100) {
        echo "Invalid number. Please select number in allowed range" . PHP_EOL;
    } else {
        $selectedNumber = $userInput;
        break;
    }
}

switch ($selectedNumber) {
    case $selectedNumber == $randomNumber:
        echo "You guessed it! What are the odds?!?" . PHP_EOL;
        break;
    case $selectedNumber < $randomNumber:
        echo "Sorry, you are too low. I was thinking of number $randomNumber" . PHP_EOL;
        break;
    case $selectedNumber > $randomNumber:
        echo "Sorry, you are too high. I was thinking of number $randomNumber" . PHP_EOL;
        break;
}
