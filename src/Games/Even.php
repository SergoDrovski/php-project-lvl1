<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function evenOrOdd(int $num): string
{
    if (($num % 2) == 0) {
        $number = "yes";
    } else {
        $number = "no";
    }
    return $number;
}

function checkingAnswer(string $number, string $answerUser): bool | string
{
    if ($answerUser === $number) {
        return true;
    }
    return $answerUser;
}


function startEven(): array
{
    $number = rand();
    line("Question: {$number}");
    $answerUser = prompt('Your answer');
    $checkNum = evenOrOdd($number);
    $checkAnswer = checkingAnswer($checkNum, $answerUser);
    return [$checkAnswer, $checkNum];
}
