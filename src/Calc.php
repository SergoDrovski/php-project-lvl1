<?php

namespace Brain\Games\Calc;

use function cli\line;
use function cli\prompt;

function CalcResult(int $numFirst, int $numSecond, string $operationRand)
{
    $res = null;
    if ($operationRand === '*') {
        $res = $numFirst * $numSecond;
    } elseif ($operationRand === '-') {
        $res = $numFirst - $numSecond;
    } elseif ($operationRand === '+') {
        $res = $numFirst + $numSecond;
    } elseif ($operationRand === '/') {
        $res = $numFirst / $numSecond;
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


function startCalc() : array
{
    $numFirst = rand(1, 499);
    $numSecond = rand(1, 499);
    $operation = ['*', '-', '+', '/'];
    $operationRand = $operation[(rand(0, 3))];
    $number = "{$numFirst}{$operationRand}{$numSecond}";
    line("Question: {$number}");
    $answerUser = prompt('Your answer');
    $checkRes = CalcResult($numFirst, $numSecond, $operationRand);
    $checkAnswer = checkingUser($checkRes, $answerUser);
    return [$checkAnswer, $checkRes];
}