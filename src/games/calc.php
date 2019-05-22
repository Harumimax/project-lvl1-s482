<?php

namespace BrainGames\games\calc;

use function BrainGames\play\starGame;

const DESCRIPTION = "What is the result of the expression?";
const OPERATIONS = ['+', '-', '*'];

function calcGame()
{
    $getGameData = function () {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $operation = OPERATIONS[array_rand(OPERATIONS)];
        $question = "$a $operation $b";

        $getCorrectAnswer = function ($a, $b, $operation) {
            switch ($operation) {
                case "+":
                    return $a + $b;
                    break;
                case "-":
                    return $a - $b;
                    break;
                case "*":
                    return $a * $b;
                    break;
            }
        };

        $correctAnswer = $getCorrectAnswer($a, $b, $operation);
        $correctAnswer = (string)$correctAnswer;
        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
