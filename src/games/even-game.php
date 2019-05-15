<?php

namespace BrainGames\games\even;

use function BrainGames\play\gameEngine;

const DESCRIPTION = "Answer 'yes' if number even otherwise answer 'no'.";

function isEven($number)
{
    return $bool = ($number % 2 === 0) ? true : false;
}

function evenGame()
{
    $getGameFunction = function () {
        $operation = rand(1, 100);

        $correctAnswer = (isEven($operation)) ? "yes" : "no";
    
        return [$correctAnswer, $operation];
    };
    
    gameEngine($getGameFunction, DESCRIPTION);
}
