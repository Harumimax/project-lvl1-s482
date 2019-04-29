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

function question()
{
    \cli\line('Welcome to the Brain Game!');
    \cli\line('Answer "yes" if number even otherwise answer "no".');
    $name = \cli\prompt("\nMay I have your name?");
    \cli\line("Hello, %s!", $name);

    $rightAnswer = 0;
    do {
        $number = rand(1, 100);
        $correctAnswer = correctAnswer($number);
        $answer = \cli\prompt("\nQuestion: {$number}");
        $plaerAnswer = checkAnswer($number, $answer);

        if ($plaerAnswer) {
            \cli\line('Correct!');
            $rightAnswer++;
        } else {
            \cli\line("'%s' is wrong answer ;(. Correct answer was '%s'.\n", $answer, $correctAnswer);
            \cli\line("Let's try again, %s!", $name);
            break;
        }
    } while ($rightAnswer < 3);
    \cli\line("Congratulations, %s!", $name);
}
