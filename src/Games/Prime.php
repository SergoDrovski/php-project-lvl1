<?php

namespace Brain\Games\Prime;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Gcd\euclideanGcd;

function testPrime(int $a)
{
    $res = "yes";
    $num = (int)(floor(sqrt($a)));
    for ($i = 2; $i <= $num; $i++) {
        if (($a % $i) == 0) {
            $res = "no";
            break;
        }
    }
    return $res;
}

function checkingUser($checkRes, $answerUser)
{
    $res = $answerUser;
    if ($answerUser == $checkRes) {
        $res = true;
    }
    return $res;
}

function startPrime(): array
{
    $num = rand(2, 3571);
    line("Question: {$num}");
    $answerUser = prompt('Your answer');
    $checkRes = testPrime($num);
    $checkAnswer = checkingUser($checkRes, $answerUser);
    return [$checkAnswer, $checkRes];
}
