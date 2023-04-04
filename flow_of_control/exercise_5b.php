<?php

//On your phone keypad, the alphabets are mapped to digits as follows:
// ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//Write a program called PhoneKeyPad, which prompts user for a String
// (case insensitive), and converts to a sequence of keypad digits.

$letters = [
    ["A", "B", "C"],
    ["D", "E", "F"],
    ["G", "H", "I"],
    ["J", "K", "L"],
    ["M", "N", "O"],
    ["P", "Q", "R", "S"],
    ["T", "U", "V"],
    ["W", "X", "Y", "Z"],
];

$input = readline("Enter a string: ");

$result = "";

for ($i = 0; $i < strlen($input); $i++) {
    $char = strtoupper($input[$i]);
    switch ($char) {
        case "A" :
        case "B" :
        case "C" :
            $result .= str_repeat("2", array_search($char, $letters[0]) + 1);
            break;
        case "D" :
        case "E" :
        case "F" :
            $result .= str_repeat("3", array_search($char, $letters[1]) + 1);
            break;
        case "G" :
        case "H" :
        case "I" :
            $result .= str_repeat("4", array_search($char, $letters[2]) + 1);
            break;
        case "J" :
        case "K" :
        case "L" :
            $result .= str_repeat("5", array_search($char, $letters[3]) + 1);
            break;
        case "M" :
        case "N" :
        case "O" :
            $result .= str_repeat("6", array_search($char, $letters[4]) + 1);
            break;
        case "P" :
        case "Q" :
        case "R" :
        case "S" :
            $result .= str_repeat("7", array_search($char, $letters[5]) + 1);
            break;
        case "T" :
        case "U" :
        case "V" :
            $result .= str_repeat("8", array_search($char, $letters[6]) + 1);
            break;
        case "W" :
        case "X" :
        case "Y" :
        case "Z" :
            $result .= str_repeat("9", array_search($char, $letters[7]) + 1);
            break;
        case " " :
            $result .= "0";
    }
}

echo "Keypad digits: " . $result . PHP_EOL;