<?php

namespace BrainGames\src\games;

function isPrime($number)
{
    $correctAnswer = "yes";

    for ($i = 2; $i <= round($number / 2); $i++) {
        if ($number % $i === 0) {
            $correctAnswer = "no";
            return $correctAnswer;
        }
    }

    return $correctAnswer;
}

function primeGame()
{
    $typeOfGame = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

    $gameFunction = function () {
        $operation = rand(1, 113);

        $correctAnswer = isPrime($operation);

        $result = ['answer' => $correctAnswer, 'operation' => $operation];
        return $result;
    };
    
    \BrainGames\src\play\timeToPlay($gameFunction, $typeOfGame);
}
