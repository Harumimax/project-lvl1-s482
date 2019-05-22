<?php

namespace BrainGames\games\gcd;

use function BrainGames\play\starGame;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function findGcd($number1, $number2)
{
    $min = min($number1, $number2);

    $result = 1;
    for ($i = 1; $i <= $min; $i++) {
        if (($number1 % $i === 0) && ($number2 % $i === 0)) {
            $result = $i;
        }
    }

    return $result;
}

function gcdGame()
{
    $getGameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "{$number1} and {$number2}";
        $correctAnswer = (string)findGcd($number1, $number2);
        
        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
