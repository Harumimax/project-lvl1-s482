<?php

namespace BrainGames\games\prime;

use function BrainGames\play\starGame;

const DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    $correctAnswer = true;
    return $correctAnswer;
}

function primeGame()
{
    $getGameData = function () {
        $question = rand(1, 113);

        $correctAnswer = (isPrime($question)) ? "yes" : "no";
        
        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
