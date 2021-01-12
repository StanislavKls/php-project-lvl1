<?php

namespace Brain\Games\Engine;

//phpcs:disable
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
//phpcs:enable

use function cli\line;
use function cli\prompt;


function playGame(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $count = 0;
    while ($count < 3) {
        $result = Games\gcd\game();
        if ($result[0] !== $result[1]) {
            line("'$result[0]' is wrong answer ;(. Correct answer was '{$result[1]}'.");
            break;
        }
        $count += 1;
    }
    if ($count === 3) {
        line("Congratulations, %s!", $name);
    }
    return "Congratulations, {$name}!";
}
//phpcs:disable
playGame();
//phpcs:enable
