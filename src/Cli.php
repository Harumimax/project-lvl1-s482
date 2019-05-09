<?php

namespace BrainGames\src;

function run($str)
{
    \cli\line('Welcome to the Brain Game!');
    \cli\line("{$str}");
    $name = \cli\prompt("\nMay I have your name?");
    \cli\line("Hello, %s!", $name);
    return $name;
}
