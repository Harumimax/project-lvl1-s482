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
        $selectedOperation = OPERATIONS[array_rand(OPERATIONS)];
        $question = "$a $selectedOperation $b";

        $getCorrectAnswer = function ($a, $b, $selectedOperation) {
            switch ($selectedOperation) {
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

        $correctAnswer = $getCorrectAnswer($a, $b, $selectedOperation);
        $correctAnswer = (string)$correctAnswer;
        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
