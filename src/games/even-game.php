<?php

namespace BrainGames\src\games;

function isEven($number)
{
    if ($number % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

function evenGame()
{
    $typeOfGame = "Answer 'yes' if number even otherwise answer 'no'.";

    $gameFunction = function () {
        $number = rand(1, 100);
        $operation = $number;
    
        if (isEven($number)) {
            $correctAnswer = "yes";
        } else {
            $correctAnswer = "no";
        }
    
        $result = ['answer' => $correctAnswer, 'operation' => $operation];
        return $result;
    };
    
   \BrainGames\src\play\timeToPlay($gameFunction, $typeOfGame);
}