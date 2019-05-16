<?php

namespace BrainGames\games\calc;

use function BrainGames\play\starGame;

const DESCRIPTION = "What is the result of the expression?";

function calcGame()
{
    $getGameData = function () {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $operations = ['+', '-', '*'];
        $selectedOperation = $operations[array_rand($operations)];
        $question = "{$a} {$selectedOperation} {$b}";

        switch ($selectedOperation) {
            case "+":
                $correctAnswer = $a + $b;
                break;
            case "-":
                $correctAnswer = $a - $b;
                break;
            case "*":
                $correctAnswer = $a * $b;
                break;
        }
        
        $correctAnswer = (string)$correctAnswer;
        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
