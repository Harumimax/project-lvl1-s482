<?php

namespace BrainGames\games\even;

use function BrainGames\play\starGame;

const DESCRIPTION = "Answer 'yes' if number even otherwise answer 'no'.";

function isEven($number)
{
    return $number % 2 === 0;
}

function evenGame()
{
    $getGameData = function () {
        $question = rand(1, 100);

        $correctAnswer = (isEven($question)) ? "yes" : "no";
    
        return [$correctAnswer, $question];
    };
    
    starGame($getGameData, DESCRIPTION);
}
