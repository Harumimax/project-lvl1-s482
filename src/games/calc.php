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
//      можно ли такой вариант использовать? он получается самым коротким же

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

// ====================== вариант 3 ==================================
<<<<<<< HEAD
function sum($a, $b) 
{
    return $a + $b;
}

function minus($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b) 
{
    return $a * $b;
}
=======
        function sum($a, $b)
        {
            return $a + $b;
        }

        function minus($a, $b)
        {
            return $a - $b;
        }

        function multiplication($a, $b)
        {
            return $a * $b;
        }
>>>>>>> temp_branch
//      $arrayOfAnswer = ["+" => sum($a, $b), "-" => minus($a, $b), "*" => multiplication($a, $b)];
//      $correctAnswer = $arrayOfAnswer[$selectedOperation];

        switch ($selectedOperation) {
            case "+":
                $correctAnswer = $a + $b;
                break;
                // return [sum($a, $b), $question];
            case "-":
<<<<<<< HEAD
               $correctAnswer = $a - $b;
                // return [minus($a, $b), $question];
            case "*":
                $correctAnswer = $a * $b;
               break;
=======
                $correctAnswer = $a - $b;
                // return [minus($a, $b), $question];
            case "*":
                $correctAnswer = $a * $b;
                break;
>>>>>>> temp_branch
                // return [multiplication($a, $b), $question];
        }
        
        $correctAnswer = (string)$correctAnswer;
        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
