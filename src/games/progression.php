<?php

namespace BrainGames\games\progression;

use function BrainGames\play\starGame;

const DESCRIPTION = "What number is missing in the progression?";
const LENGTH_OF_PROGRESSION = 10;

function progressionGame()
{
    $getGameData = function () {
        $start = rand(1, 100);
        $step = rand(1, 9);
        $hiddenStep = rand(2, LENGTH_OF_PROGRESSION - 3);
        $progression = [];
        
        for ($i = 0; $i < LENGTH_OF_PROGRESSION; $i++) {
            $progression[$i] = $start + $step * $i;
        }
        
        $correctAnswer = (string)$progression[$hiddenStep];
        $progression[$hiddenStep] = "...";
        $question = implode(' ', $progression);

        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
