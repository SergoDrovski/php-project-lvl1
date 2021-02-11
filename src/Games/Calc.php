<?php

namespace Brain\Games\Calc;

use function cli\line;
use function cli\prompt;

function CalcResult(int $numFirst, int $numSecond, string $operationRand): int
{
    $res = null;
    if ($operationRand === '*') {
        $res = $numFirst * $numSecond;
    } elseif ($operationRand === '-') {
        $res = $numFirst - $numSecond;
    } elseif ($operationRand === '+') {
        $res = $numFirst + $numSecond;
    }
    return $res;
}

function checkingUser(int $checkRes, string $answerUser): bool | string
{
    $res = $answerUser;
    if ($answerUser == $checkRes) {
        $res = true;
    }
    return $res;
}


function startCalc(): array
{
    $numFirst = rand(200, 499);
    $numSecond = rand(1, 199);
    $operation = ['*', '-', '+'];
    $operationRand = $operation[(rand(0, 2))];
    $number = "{$numFirst} {$operationRand} {$numSecond}";
    line("Question: {$number}");
    $answerUser = prompt('Your answer');
    $checkRes = CalcResult($numFirst, $numSecond, $operationRand);
    $checkAnswer = checkingUser($checkRes, $answerUser);
    return [$checkAnswer, $checkRes];
}
