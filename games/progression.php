<?php

namespace BrainGames\Cli;

\cli\line('Welcome to the Brain Game!');
\cli\line('What number is missing in the progression?');
$name = \cli\prompt("\nMay I have your name?");
\cli\line("Hello, %s!", $name);

$rightAnswer = 0;
do {
    $correctAnswer = correctAnswerProgression();
    
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
