<?php

namespace BrainGames\games\prime;

use function BrainGames\play\gameEngine;

const DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $correctAnswer = false;
            return false;
        }
    }
    $correctAnswer = true;
    return $correctAnswer;
}

function primeGame()
{
    $getGameFunction = function () {
        $operation = rand(1, 113);

        $correctAnswer = (isPrime($operation)) ? "yes" : "no";
        
        return [$correctAnswer, $operation];
    };
    
    gameEngine($getGameFunction, DESCRIPTION);
}
