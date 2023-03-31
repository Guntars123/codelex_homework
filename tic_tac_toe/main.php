<?php

$board_size = 3;
$board = [];

for ($row = 0; $row < $board_size; $row++) {
    for ($column = 0; $column < $board_size; $column++) {
        $board[$row][$column] = "-";
    }
}

$symbols = ['X', 'O'];
$turn = 0;

while (true) {

    displayBoard($board, $board_size);

    if ($turn % 2 == 0) {
        echo "--------------------------------" . PHP_EOL;
        echo "Its X turn" . PHP_EOL;
        echo "--------------------------------" . PHP_EOL;
        [$row, $col] = promptUser();
        $symbol = $symbols[0];
    } else {
        echo "--------------------------------" . PHP_EOL;
        echo "Its O turn" . PHP_EOL;
        echo "--------------------------------" . PHP_EOL;
        [$row, $col] = promptUser();
        $symbol = $symbols[1];
    }

    if (!validateInput($row, $col, $board, $board_size)) {
        echo "Invalid input, try again" . PHP_EOL;
        continue;
    }

    $board = updateBoard($row, $col, $board, $symbol);

    // Check for a winner
    $winner = checkWinner($board, $board_size);
    if ($winner != "-") {
        displayBoard($board, $board_size);
        echo "--------------------------------" . PHP_EOL;
        echo "$winner wins!" . PHP_EOL;
        echo "--------------------------------" . PHP_EOL;
        break;
    }

    if ($turn == $board_size * $board_size - 1) {
        displayBoard($board, $board_size);
        echo "--------------------------------" . PHP_EOL;
        echo "It's a tie!" . PHP_EOL;
        echo "--------------------------------" . PHP_EOL;
        break;
    }

    $turn++;
}

function displayBoard(array $board, int $board_size): void
{
    for ($row = 0; $row < $board_size; $row++) {
        for ($column = 0; $column < $board_size; $column++) {
            echo $board[$row][$column] . " ";
        }
        echo PHP_EOL;
    }
}

function promptUser(): array
{
    return explode(" ", readline("Enter row and column for your move (example: 0 1): "));
}

function validateInput(string $row, string $col, array $board, int $board_size): bool
{
    if ($row < 0 || $row > $board_size || $col < 0 || $col > $board_size) {
        return false;
    } elseif ($board[$row][$col] != '-') {
        return false;
    } else {
        return true;
    }
}

function updateBoard(string $row, string $col, array $board, string $symbol): array
{
    $board[$row][$col] = $symbol;
    return $board;
}

function checkWinner(array $board, int $board_size): string
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