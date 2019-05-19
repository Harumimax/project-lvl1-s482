<?php

namespace BrainGames\play;

use function cli\line;
use function cli\prompt;

const ROUND = 3;

function starGame($getGameData, $description)
{
    line('Welcome to the Brain Game!');
    line("{$description}");
    $name = prompt("\nMay I have your name?");
    line("Hello, %s!", $name);

    for ($i = 0; $i < ROUND; $i++) {
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
}
