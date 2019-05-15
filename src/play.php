<?php

namespace BrainGames\play;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function gameEngine($getGameFunction, $descriptionOfGame)
{
    line('Welcome to the Brain Game!');
    line("{$descriptionOfGame}");
    $name = prompt("\nMay I have your name?");
    line("Hello, %s!", $name);

    $targetWinGame = 3;
    for ($i = 0; $i < ROUNDS; $i++) {
        [$correctAnswer, $operation] = $getGameFunction();

        line("\nQuestion: {$operation}");
        $answer = prompt("Your answer");

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }

    if ($i === $targetWinGame) {
        line("\nCongratulations, %s!", $name);
    }
}
