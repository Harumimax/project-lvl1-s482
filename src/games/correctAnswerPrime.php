<?php

namespace BrainGames\src\games;

function primeNumber($number)
{
    $correctAnswer = "yes";

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $correctAnswer = "no";
            return $correctAnswer;
        }
    }

    return $correctAnswer;
}

function correctAnswerPrime()
{
    global $operation;
    $operation = rand(1, 113);
    $correctAnswer = "yes";

    $correctAnswer = primeNumber($operation);

    $result = ['answer' => $correctAnswer, 'operation' => $operation];
    return $result;
}
