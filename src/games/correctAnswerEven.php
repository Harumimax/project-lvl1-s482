<?php

namespace BrainGames\src\games;

function evenNumber($number)
{
    if ($number % 2 === 0) {
        $correctAnswer = "yes";
    } else {
        $correctAnswer = "no";
    }
    
    return $correctAnswer;
}

function correctAnswerEven()
{
    global $operation;
    $number = rand(1, 100);
    $operation = $number;

    $correctAnswer = evenNumber($number);

    $result = ['answer' => $correctAnswer, 'operation' => $operation];
    return $result;
}
