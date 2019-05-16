<?php

namespace BrainGames\games\progression;

use function BrainGames\play\starGame;

const DESCRIPTION = "What number is missing in the progression?";
const LEN_OF_PROGRESSION = 10; // LEN сокращение LENGTH, вроде можно использовать

function progressionGame()
{
    $getGameData = function () {
        $start = rand(1, 100);
        $step = rand(1, 9);
        $hiddenStep = rand(2, LEN_OF_PROGRESSION - 3);
        $progression = [];
        
        for ($i = 0; $i < LEN_OF_PROGRESSION; $i++) {
            $progression[$i] = $start + $step * $i;
        }
        $correctAnswer = (string)$progression[$hiddenStep];
        $progression[$hiddenStep] = "...";

        $operation = implode(' ', $progression);

        return [$correctAnswer, $operation];
    };
    
    starGame($getGameData, DESCRIPTION);
}
