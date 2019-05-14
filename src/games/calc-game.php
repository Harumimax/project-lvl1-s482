<?php

namespace BrainGames\src\games;

function calcGame()
{
    $typeOfGame = "What is the result of the expression?";

    $gameFunction = function () {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $typeOfOperation = [1 => '+', 2 => '-', 3 =>'*'];
        $numberOfOperation = array_rand($typeOfOperation);

        if ($numberOfOperation === 0) {
            $correctAnswer = $a + $b;
            $operation = "{$a} + {$b}";
        } elseif ($numberOfOperation === 1) {
            $correctAnswer = $a - $b;
            $operation = "{$a} - {$b}";
        } else {
            $correctAnswer = $a * $b;
            $operation = "{$a} * {$b}";
        }
        $correctAnswer = (string)$correctAnswer;
        $result = ['answer' => $correctAnswer, 'operation' => $operation];
        return $result;
    };
    
   \BrainGames\src\play\timeToPlay($gameFunction, $typeOfGame);
}