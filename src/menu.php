<?php

namespace BrainGames\menu;

use function cli\line;
use function cli\prompt;
use function cli\menu;

use function BrainGames\games\calc\calcGame;
use function BrainGames\games\gcd\gcdGame;
use function BrainGames\games\even\evenGame;
use function BrainGames\games\prime\primeGame;
use function BrainGames\games\progression\progressionGame;

function gameMenu()
{
    line("Welcome to the Brain Game! \n");

    $items = [0 => "Calc", 1 => "Even", 2 => "Gcd", 3 => "Prime", 4 => "Progression", 5 => "Exit"];

    $choice = menu($items, $default = false, $title = 'Choose Game');

    switch ($choice) {
        case 0:
            calcGame();
            break;
        case 1:
            evenGame();
            break;
        case 2:
            gcdGame();
            break;
        case 3:
            primeGame();
            break;
        case 4:
            progressionGame();
            break;
        case 5:
            exit;
    }
}
