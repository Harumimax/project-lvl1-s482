<?php

namespace BrainGames\Cli;

\cli\line('Welcome to the Brain Game!');
\cli\line('What is the result of the expression?');
$name = \cli\prompt("\nMay I have your name?");
\cli\line("Hello, %s!", $name);

$rightAnswer = 0;
do {
    $correctAnswer = correctAnswerCalc();
    
    \cli\line("\nQuestion: {$operation}");
    $answer = \cli\prompt("Your answer");
    $answer = (int)$answer;
    $plaerAnswer = checkAnswer($correctAnswer, $answer);

    if ($plaerAnswer) {
        \cli\line('Correct!');
        $rightAnswer++;
    } else {
        \cli\line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        \cli\line("Let's try again, %s!", $name);
        break;
    }
} while ($rightAnswer < 3);

if ($rightAnswer === 3) {
    \cli\line("Congratulations, %s!", $name);
}
