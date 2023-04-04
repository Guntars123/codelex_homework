<?php

$words = [
    "programming",
    "github",
    "codelex",
    "language",
    "coding"
];

$word = $words[array_rand($words)];
$word_parts = str_split($word);
$target_word = str_split(str_repeat("-", strlen($word)));
$word_length = count($word_parts);

$guesses = 0;
$max_guesses = strlen($word) + 3;

echo "Hello player. In this game you have to guess the word. " . PHP_EOL .
    "For this word with $word_length letters you have $max_guesses letter guesses" . PHP_EOL;

echo implode(' ', $target_word) . PHP_EOL;

while ($guesses < $max_guesses) {
    $letter = readline("Enter letter :");
    $letter_positions = array_keys($word_parts, $letter);

    foreach ($letter_positions as $letter_position) {
        $target_word[$letter_position] = $letter;
        $word_parts[$letter_position] = '-';
    }

    if ($word == implode('', $target_word)) {
        echo "---------------------" . PHP_EOL;
        echo "Correct!" . PHP_EOL;
        echo "Name was " . implode('', $target_word) . PHP_EOL;
        break;
    }

    $guesses++;
    $guesses_left = $max_guesses - $guesses;
    echo implode(' ', $target_word) . PHP_EOL;
    echo "You have $guesses_left guesses left" . PHP_EOL;
}

if ($word != implode('', $target_word)) {
    echo "Wrong!" . "Word was: $word" . PHP_EOL;

}



