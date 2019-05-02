<?php

namespace BrainGames\Cli;

function correctAnswer($number)
{
    if ($number % 2 === 0) {
        $correctAnswer = "yes";
    } else {
        $correctAnswer = "no";
    }
    return $correctAnswer;
}

function checkAnswer($number, $answer)
{
    $correctAnswer = correctAnswer($number);
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

function checkAnswerCalc($correctAnswer, $answer)
{
    if ($answer === $correctAnswer) {
        $plaerAnswer = true;
    } else {
        $plaerAnswer = false;
    }
    return $plaerAnswer;
}