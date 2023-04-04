<?php

//On your phone keypad, the alphabets are mapped to digits as follows:
// ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//Write a program called PhoneKeyPad, which prompts user for a String
// (case insensitive), and converts to a sequence of keypad digits.



$letters =[
    ["A","B","C"],
    ["D","E","F"],
    ["G","H","I"],
    ["J","K","L"],
    ["M","N","O"],
    ["P","Q","R","S"],
    ["T","U","V"],
    ["W","X","Y","Z"],
];

$input = readline("Enter a string: ");

$result = "";

for ($i = 0; $i < strlen($input); $i++) {
    $char = strtoupper($input[$i]);
    if ($char == "A" || $char == "B" || $char == "C") {
        $result .= str_repeat("2", array_search($char, $letters[0]) + 1);
    } elseif ($char == "D" || $char == "E" || $char == "F") {
        $result .= str_repeat("3", array_search($char, $letters[1]) + 1);
    } elseif ($char == "G" || $char == "H" || $char == "I") {
        $result .= str_repeat("4", array_search($char, $letters[2]) + 1);
    } elseif ($char == "J" || $char == "K" || $char == "L") {
        $result .= str_repeat("5", array_search($char, $letters[3]) + 1);
    } elseif ($char == "M" || $char == "N" || $char == "O") {
        $result .= str_repeat("6", array_search($char, $letters[4]) + 1);
    } elseif ($char == "P" || $char == "Q" || $char == "R" || $char == "S") {
        $result .= str_repeat("7", array_search($char, $letters[5]) + 1);
    } elseif ($char == "T" || $char == "U" || $char == "V") {
        $result .= str_repeat("8", array_search($char, $letters[6]) + 1);
    } elseif ($char == "W" || $char == "X" || $char == "Y" || $char == "Z") {
        $result .= str_repeat("9", array_search($char, $letters[7]) + 1);
    } elseif ($char == " ") {
        $result .= "0";
    }
}

echo "Keypad digits: " . $result . PHP_EOL;
