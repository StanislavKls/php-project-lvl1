<?php

namespace Brain\Games\Engine;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;

function hi()
{
    line('Welcome to the Brain Game!');
}

function game()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $count = 0;
    while ($count < 3) {
        $count += 1;
    }

    if ($count === 3) {
        line("Congratulations, %s!", $name);
    }
}
