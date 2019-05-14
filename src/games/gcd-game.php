<?php

namespace BrainGames\src\games;

function isGcd($number1, $number2)
{
    if ($number1 > $number2) {
        $min = $number2;
    } else {
        $min = $number1;
    }

    $correctAnswer = 1;
    for ($i = 1; $i <= $min; $i++) {
        if (($number1 % $i === 0) && ($number2 % $i === 0)) {
            $correctAnswer = $i;
        }
    }

    return $correctAnswer;
}

function gcdGame()
{
    $typeOfGame = "Find the greatest common divisor of given numbers.";

    $gameFunction = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operation = "{$number1} and {$number2}";

        $correctAnswer = isGcd($number1, $number2);
        $correctAnswer = (string)$correctAnswer;
        $result = ['answer' => $correctAnswer, 'operation' => $operation];
        return $result;
    };
    
   \BrainGames\src\play\timeToPlay($gameFunction, $typeOfGame);
}