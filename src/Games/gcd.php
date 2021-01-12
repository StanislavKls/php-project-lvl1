<?php

namespace Brain\Games\Engine\Games\gcd;

//phpcs:disable
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
//phpcs:enable

use function cli\line;
use function cli\prompt;

function gcd(int $number1, int $number2): int
{
    $result = 0;
    for ($i = $number1; $i > 0; $i--) {
        if ($number1 % $i === 0 && $number2 % $i === 0) {
            $result = $i;
            break;
        }
    }
    return $result;
}

function game(): array
{
    $a = rand(1, 100);
    $b = rand(1, 100);

    $result = gcd($a, $b);
    line("Question: {$a} {$b}");
    $answer = (int) prompt('Your answer');
    return [$answer, $result];
}
