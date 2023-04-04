<?php

$lizard = new stdClass();
$lizard->title = "lizard";
$lizard->beats = [];

$paper = new stdClass();
$paper->title = "paper";
$paper->beats = [];

$scissors = new stdClass();
$scissors->title = "scissors";
$scissors->beats = [];

$rock = new stdClass();
$rock->title = "rock";
$rock->beats = [];

$spock = new stdClass();
$spock->title = "spock";
$spock->beats = [];

$dynamite = new stdClass();
$dynamite->title = "dynamite";
$dynamite->beats = [];

array_push($lizard->beats, $paper, $spock);
array_push($spock->beats, $rock, $scissors);
array_push($rock->beats, $scissors, $lizard);
array_push($paper->beats, $rock, $spock);
array_push($scissors->beats, $paper, $lizard);
array_push($dynamite->beats, $paper, $lizard, $spock, $rock, $scissors);

$elements = [
    "lizard" => $lizard,
    "paper" => $paper,
    "scissors" => $scissors,
    "rock" => $rock,
    "spock" => $spock,
    "dynamite" => $dynamite
];

echo "Welcome player! In this game You can choose between such elements:" . PHP_EOL .
    "$lizard->title | $paper->title | $scissors->title | $rock->title | $spock->title | $dynamite->title" . PHP_EOL;

$pc_score = 0;
$player_score = 0;

while ($play_again = "no") {

    // PC selection
    $pc_selection = array_rand($elements);

    //Player selection

    $player_selection = readline("Select your element: ");

    if (!array_key_exists($player_selection, $elements)) {
        echo "element not found. Please check your spelling" . PHP_EOL;
        exit;
    }

    echo "---------------------------------------" . PHP_EOL;
    echo "Computer have chosen $pc_selection" . PHP_EOL;

    $selected_element = $player_selection;

    echo "---------------------------------------" . PHP_EOL;

    if ($pc_selection == $selected_element) {
        echo "Its a draw" . PHP_EOL;
    } else {
        if (in_array($elements[$selected_element], $elements[$pc_selection]->beats)) {
            echo "You lose! PC WON!" . PHP_EOL;
            $pc_score++;

        } else {
            echo "Congrats! You WON!" . PHP_EOL;
            $player_score++;
        }
    }

    echo "---------------------------------------" . PHP_EOL;
    echo "Your score: $player_score ||| Computer score: $pc_score" . PHP_EOL;

    $play_again = readline("Wanna play again? Press enter to continue / type no to exit ");

    if ($play_again == "no") {
        break;
    }
}

