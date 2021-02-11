<?php

namespace Brain\Games\Gcd;

use function cli\line;
use function cli\prompt;

function euclideanGcd(int $num1, int $num2)
{
    $a = max($num1, $num2);
    $b = min($num1, $num2);

    while ($b != 0) {
        $temp = min($a, $b);
        $b =  max($a, $b) - min($a, $b);
        $a = $temp;
    }
    return $a;
}

function checkingUser($checkRes, $answerUser)
{
    $res = $answerUser;
    if ($answerUser == $checkRes) {
        $res = true;
    }
    return $res;
}


function startGcd(): array
{
    $numFirst = rand(1, 150);
    $numSecond = rand(1, 150);
    $number = "{$numFirst} {$numSecond}";
    line("Question: {$number}");
    $answerUser = prompt('Your answer');
    $checkRes = euclideanGcd($numFirst, $numSecond);
    $checkAnswer = checkingUser($checkRes, $answerUser);
    return [$checkAnswer, $checkRes];
}
