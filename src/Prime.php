<?php

namespace Brain\Games\Prime;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Gcd\euclideanGcd;

function testPrime(int $a)
{
    $res = "yes";
    if ($a % 2 != 0) {
        for ($i = 3; $i < 11; $i++) {
            if (euclideanGcd($a, $i) != 1) {
                $res = "no";
                break;
            }
        }
    } else {
        $res = "no";
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
