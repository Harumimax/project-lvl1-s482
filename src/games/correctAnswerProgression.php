<?php

namespace BrainGames\src\games;

function correctAnswerProgression()
{
    $start = rand(1, 100);
    $step = rand(1, 9);
    $num = rand(2, 9);
    $arr = [];
    global $operation;

    $arr[0] = $start;
    $showNumbersOfProgression = 10;
    for ($i = 1; $i < $showNumbersOfProgression; $i++) {
        $arr[$i] = $arr[$i - 1] + $step;
    }
    $correctAnswer = $arr[$num];
    $arr[$num] = "...";
    $operation = "";
    foreach ($arr as $item) {
        $operation = "{$operation} {$item}";
    }

    $result = ['answer' => $correctAnswer, 'operation' => $operation];
    return $result;
}
