<?php

namespace BrainGames\src\games;

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
    $typeOfGame = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

    $gameFunction = function () {
        $operation = rand(1, 113);

        if (isPrime($operation)) {
            $correctAnswer = "yes";
        } else {
            $correctAnswer = "no";
        }
        
        $result = ['answer' => $correctAnswer, 'operation' => $operation];
        return $result;
    };
    
    \BrainGames\src\play\timeToPlay($gameFunction, $typeOfGame);
}
