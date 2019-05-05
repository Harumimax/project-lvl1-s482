<?php

namespace BrainGames\games;

\BrainGames\src\run();

\cli\line("\nFind the greatest common divisor of given numbers.");

$rightAnswer = 0;
do {
    $correctAnswer = \BrainGames\src\correctAnswerGcd();
    
    \cli\line("\nQuestion: {$operation}");
    $answer = \cli\prompt("Your answer");
    $answer = (int)$answer;
    $plaerAnswer = \BrainGames\src\checkAnswer($correctAnswer, $answer);

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
