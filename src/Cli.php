<?php

namespace BrainGames\Cli;

function run()
{
    \cli\line('Welcome to the Brain Game!');
    $name = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $name);
}
