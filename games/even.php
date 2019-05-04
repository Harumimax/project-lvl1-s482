<?php

namespace BrainGames\Cli;

\cli\line('Welcome to the Brain Game!');
\cli\line('Answer "yes" if number even otherwise answer "no".');
$name = \cli\prompt("\nMay I have your name?");
\cli\line("Hello, %s!", $name);

$rightAnswer = 0;
do {
    $number = rand(1, 100);
    $correctAnswer = correctAnswerEven($number);
    
    $answer = \cli\prompt("\nQuestion: {$number}");
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
