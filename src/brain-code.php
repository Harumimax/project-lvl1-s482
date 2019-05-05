<?php

namespace BrainGames\src;

function correctAnswerEven()
{
    global $operation;
    $number = rand(1, 100);
    $operation = $number;

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
    return $correctAnswer;
}

function correctAnswerGcd()
{
    global $operation;

    $a = rand(1, 100);
    $b = rand(1, 100);
    $operation = "{$a} and {$b}";

    if ($a > $b) {
        $min = $b;
    } else {
        $min = $a;
    }

    $correctAnswer = 1;
    for ($i = 1; $i <= $min; $i++) {
        if (($a % $i === 0) && ($b % $i === 0)) {
            $correctAnswer = $i;
        }
    }
    return $correctAnswer;
}

function correctAnswerProgression()
{
    $start = rand(1, 100);
    $step = rand(1, 9);
    $num = rand(2, 9);
    $arr = [];
    global $operation;

    $arr[0] = $start;
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] + $step;
    }
    $correctAnswer = $arr[$num];
    $arr[$num] = "...";
    $operation = "";
    foreach ($arr as $item) {
        $operation = "{$operation} {$item}";
    }

    return $correctAnswer;
}

function correctAnswerPrime()
{
    global $operation;
    $operation = rand(1, 113);
    $correctAnswer = "yes";

    for ($i = 2; $i < $operation; $i++) {
        if ($operation % $i === 0) {
            $correctAnswer = "no";
            return $correctAnswer;
        }
    }

    return $correctAnswer;
}
