<?php

namespace BrainGames\src\games;

function progressionGame()
{
    $typeOfGame = "What number is missing in the progression?";

    $gameFunction = function () {
        $start = rand(1, 100);
        $step = rand(1, 9);
        $num = rand(2, 8);
        $arr = [];
    
        $showNumbersOfProgression = 10;
        for ($i = 0; $i < $showNumbersOfProgression; $i++) {
            $arr[$i] = $start + $step * $i;
        }
        $correctAnswer = $arr[$num];
        $arr[$num] = "...";
        $operation = "";
        foreach ($arr as $item) {
            $operation = "{$operation} {$item}";
        }
        $correctAnswer = (string)$correctAnswer;
        $result = ['answer' => $correctAnswer, 'operation' => $operation];
        return $result;
    };
    
    \BrainGames\src\play\timeToPlay($gameFunction, $typeOfGame);
}
