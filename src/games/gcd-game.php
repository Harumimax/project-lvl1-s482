<?php

namespace BrainGames\games\gcd;

use function BrainGames\play\gameEngine;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function findGcd($number1, $number2)
{
    $min = ($number1 > $number2) ? $number2 : $number1;

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
    $getGameFunction = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operation = "{$number1} and {$number2}";

        $correctAnswer = (string)findGcd($number1, $number2);
        return [$correctAnswer, $operation];
    };
    
    gameEngine($getGameFunction, DESCRIPTION);
}
