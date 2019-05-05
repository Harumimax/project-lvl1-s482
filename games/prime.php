<?php

namespace BrainGames\Cli;

\BrainGames\Cli\run();

\cli\line("\nAnswer 'yes' if given number is prime. Otherwise answer 'no'.");

$rightAnswer = 0;
do {
    $correctAnswer = correctAnswerPrime();
    
    \cli\line("\nQuestion: {$operation}");
    $answer = \cli\prompt("Your answer");

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
