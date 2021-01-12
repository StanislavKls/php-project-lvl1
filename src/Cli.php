<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function hi(): string
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return "Hello, {$name}!";
}
