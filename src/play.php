<?php

namespace BrainGames\src;

function play($numberOfGame, $name)
{
    $targetWinGame = 3;
    for ($rightAnswer = 0; $rightAnswer < $targetWinGame; $rightAnswer++) {
        if ($numberOfGame === 1) {
            $play = \BrainGames\src\games\correctAnswerCalc();
        } elseif ($numberOfGame === 2) {
            $play = \BrainGames\src\games\correctAnswerProgression();
        } elseif ($numberOfGame === 3) {
            $play = \BrainGames\src\games\correctAnswerGcd();
        } elseif ($numberOfGame === 4) {
            $play = \BrainGames\src\games\correctAnswerEven();
        } elseif ($numberOfGame === 5) {
            $play = \BrainGames\src\games\correctAnswerPrime();
        }
        
        $correctAnswer = $play['answer'];
        $operation = $play['operation'];

        \cli\line("\nQuestion: {$operation}");
        $answer = \cli\prompt("Your answer");

        $plaerAnswer = \BrainGames\src\checkAnswer($correctAnswer, $answer, $numberOfGame);

        if ($plaerAnswer) {
            \cli\line('Correct!');
        } else {
            \cli\line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            \cli\line("Let's try again, %s!", $name);
            break;
        }
    }

    if ($rightAnswer === $targetWinGame) {
        \cli\line("\nCongratulations, %s!", $name);
    }
}
