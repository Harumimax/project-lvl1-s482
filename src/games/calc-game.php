<?php

namespace BrainGames\games\calc;

use function BrainGames\play\gameEngine;

const DESCRIPTION = "What is the result of the expression?";

function calcGame()
{
    $getGameFunction = function () {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $typeOfOperation = ['+', '-', '*'];
        $numberOfOperation = array_rand($typeOfOperation);

        switch ($numberOfOperation) {
            case 0:
                $correctAnswer = $a + $b;
                $operation = "{$a} + {$b}";
                break;
            case 1:
                $correctAnswer = $a - $b;
                $operation = "{$a} - {$b}";
                break;
            case 2:
                $correctAnswer = $a * $b;
                $operation = "{$a} * {$b}";
                break;
        }

        $correctAnswer = (string)$correctAnswer;
        return [$correctAnswer, $operation];
    };
    
    gameEngine($getGameFunction, DESCRIPTION);
}
