<?php

$player_cash = 100;
$cost_per_spin = 1;
$board_size = 3;

$symbols =
    [
        " A" => createSymbol(" A", 5),
        " K" => createSymbol(" K", 4),
        " Q" => createSymbol(" Q", 3),
        " J" => createSymbol(" J", 2),
        "10" => createSymbol("10", 1)
    ];

echo "----------------------------------------------------------------------------" . PHP_EOL;
echo "Welcome player! Ready for big cash? Lets go! One spin costs 1 EUR" . PHP_EOL;
echo "----------------------------------------------------------------------------" . PHP_EOL;
$play_again = true;

while ($player_cash > 0 && $play_again) {

    $spin = readline("Press enter to spin or type exit ");

    if (strtolower($spin) == 'exit') {
        $play_again = false;
    }

    $player_cash -= $cost_per_spin;

    //Display board with random elements
    $board = [];

    for ($row = 0; $row < $board_size; $row++) {
        for ($col = 0; $col < $board_size; $col++) {
            $element = $symbols[array_rand($symbols)];
            $board[$row][$col] = $element->value;
        }
        echo implode(" - ", $board[$row]) . PHP_EOL;

    }
    echo "----------------------------------------------------------------------------" . PHP_EOL;


    $wining_element = checkWin($board, $board_size);

    if ($wining_element !== "-") {
        $wined_cash = $symbols[$wining_element]->price;
        echo "Congrats we have line. You have won $wined_cash  EUR" . PHP_EOL;
        $player_cash += $wined_cash;
    }


    echo "Cash left ---- $player_cash EUR" . PHP_EOL;
    echo "----------------------------------------------------------------------------" . PHP_EOL;
}

function createSymbol($value, $price): stdClass
{
    $symbol = new stdClass();
    $symbol->value = $value;
    $symbol->price = $price;
    return $symbol;
}

function checkWin($board, $board_size): string
{
    $combinations = [];
    for ($i = 0; $i < count($board); $i++) {
        $row_coords = [];
        $col_coords = [];
        $d1_coords = [];
        $d2_coords = [];

        for ($y = 0; $y < count($board); $y++) {
            $row_coords[] = [$i, $y];
            $col_coords[] = [$y, $i];
            $d1_coords[] = [$y, $y];
            $d2_coords[] = [$y, $board_size - 1 - $y];
        }
        $combinations[] = $row_coords;
        $combinations[] = $col_coords;
        $combinations[] = $d1_coords;
        $combinations[] = $d2_coords;
    }

    foreach ($combinations as $combination) {
        $elements = [];
        foreach ($combination as $value) {
            [$row, $column] = $value;
            $elements[] = $board[$row][$column];
        }
        if (count(array_unique($elements)) === 1) {
            return $elements[0];
        }
    }
    return "-";
}
