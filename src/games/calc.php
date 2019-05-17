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

// ====================== вариант 1 ==================================
//      $arrayOfAnswer = ["+" => $a + $b, "-" => $a - $b, "*" => $a * $b];
//      $correctAnswer = $arrayOfAnswer[$selectedOperation];
//      можно ли такой вариант использовать?

// ====================== вариант 2 ==================================
//      function getCorrectAnswer ($a, $b, $selectedOperation)
//        {
//            switch ($selectedOperation) {
//                case "+":
//                    return $a + $b;
//                    break;
//                case "-":
//                    return $a - $b;
//                    break;
//                case "*":
//                    return $a * $b;
//                    break;
//            } }
//      $correctAnswer = getCorrectAnswer($a, $b, $selectedOperation);

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
