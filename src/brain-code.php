<?php

namespace BrainGames\Cli;

function correctAnswerEven($number)
{
    if ($number % 2 === 0) {
        $correctAnswer = "yes";
    } else {
        $correctAnswer = "no";
    }
    return $correctAnswer;
}

function checkAnswer($correctAnswer, $answer)
{
    if ($answer === $correctAnswer) {
        $plaerAnswer = true;
    } else {
        $plaerAnswer = false;
    }
    return $plaerAnswer;
}

function correctAnswerCalc($a, $b, $numberOfOperation)
{
    global $operation;
    if ($numberOfOperation === 1) {
        $correctAnswerCalc = $a + $b;
        $operation = "{$a} + {$b}";
    } elseif ($numberOfOperation === 2) {
        $correctAnswerCalc = $a - $b;
        $operation = "{$a} - {$b}";
    } else {
        $correctAnswerCalc = $a * $b;
        $operation = "{$a} * {$b}";
    }
    return $correctAnswerCalc;
}

function correctAnswerGcd($a, $b)
{
    if ($a > $b) {
        $min = $b;
    } else {
        $min = $a;
    }

    $correctAnswerGcd = 1;
    for ($i = 1; $i <= $min; $i++) {
        if ( ($a % $i === 0) && ($b % $i === 0) ) {
            $correctAnswerGcd = $i;
        }
    }
    return $correctAnswerGcd;
}