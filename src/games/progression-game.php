<?php

namespace BrainGames\games\progression;

use function BrainGames\play\gameEngine;

const DESCRIPTION = "What number is missing in the progression?";

function progressionGame()
{
    $getGameFunction = function () {
        $start = rand(1, 100);
        $step = rand(1, 9);
        $lengthOfProgression = 10;
        $hiddenStep = rand(2, $lengthOfProgression - 2);
        $progression = [];
        
        for ($i = 0; $i < $lengthOfProgression; $i++) {
            $progression[$i] = $start + $step * $i;
        }
        $correctAnswer = (string)$progression[$hiddenStep];
        $progression[$hiddenStep] = "...";

        $operation = implode(' ', $progression);

        return [$correctAnswer, $operation];
    };
    
    gameEngine($getGameFunction, DESCRIPTION);
}
