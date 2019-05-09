<?php

namespace BrainGames\src;

function checkAnswer($correctAnswer, $answer, $numberOfGame)
{
    if ($numberOfGame < 4) {
        $answer = (int)$answer;
    }
    
    if ($answer === $correctAnswer) {
        $plaerAnswer = true;
    } else {
        $plaerAnswer = false;
    }
    return $plaerAnswer;
}
