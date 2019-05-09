<?php

namespace BrainGames\src\games;

function correctAnswerCalc()
{
    global $operation;

    $a = rand(1, 10);
    $b = rand(1, 10);
    $numberOfOperation = rand(1, 3);

    if ($numberOfOperation === 1) {
        $correctAnswer = $a + $b;
        $operation = "{$a} + {$b}";
    } elseif ($numberOfOperation === 2) {
        $correctAnswer = $a - $b;
        $operation = "{$a} - {$b}";
    } else {
        $correctAnswer = $a * $b;
        $operation = "{$a} * {$b}";
    }

    $result = ['answer' => $correctAnswer, 'operation' => $operation];
    return $result;
}
