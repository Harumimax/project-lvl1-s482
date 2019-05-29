<?php

namespace BrainGames\play;

use function cli\line;
use function cli\prompt;
use function cli\menu;
use function BrainGames\menu\gameMenu;

const COUNT_ROUNDS = 3;

function starGame($getGameData, $description)
{
    line("\nDescription of game:");
    line("{$description}");
    $name = prompt("\nMay I have your name?");
    line("Hello, %s!", $name);

    for ($i = 0; $i < COUNT_ROUNDS; $i++) {
        [$correctAnswer, $operation] = $getGameData();

        line("\nQuestion: {$operation}");
        $answer = prompt("Your answer");

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            exit;
        }
    }

    line("\nCongratulations, %s!", $name);

    line("\n%s, you want to play new game?", $name);
    $items = [0 => "Yes", 1 => "No"];
    $choice = menu($items, $default = false, $title = 'Answer');

    switch ($choice) {
        case 0:
            gameMenu();
            break;
        case 1:
            exit;
    }
}
