<?php

namespace BrainGames\src\play;

use function cli\line;
use function cli\prompt;

function timeToPlay($gameFunction, $typeOfGame)
{
    line('Welcome to the Brain Game!');
    line("{$typeOfGame}");
    $name = prompt("\nMay I have your name?");
    line("Hello, %s!", $name);

    $targetWinGame = 3;
    for ($rightAnswer = 0; $rightAnswer < $targetWinGame; $rightAnswer++) {

        ['answer' => $correctAnswer, 'operation' => $operation] = $gameFunction();

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

    if ($rightAnswer === $targetWinGame) {
        line("\nCongratulations, %s!", $name);
    }
}
