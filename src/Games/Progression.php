<?php

namespace Brain\Games\Progression;

use function cli\line;
use function cli\prompt;

function checkingUser(int $checkRes, string $answerUser): bool | string
{
    $res = $answerUser;
    if ($answerUser == $checkRes) {
        $res = true;
    }
    return $res;
}


function startProgression(): array
{
    $i = 0;
    $numbers = [];
    $numbers[$i] = rand(1, 99);
    $randStep = rand(1, 10);
    while ($i < 9) {
        $numbers[$i + 1] = $numbers[$i] + $randStep;
        $i++;
    }
    $temp = $numbers;
    $randIndex = rand(1, 8);
    $temp[$randIndex] = '..';
    $stringNum = implode(' ', $temp);

    line("Question: {$stringNum}");
    $answerUser = prompt('Your answer');
    $checkRes = $numbers[$randIndex];
    $checkAnswer = checkingUser($checkRes, $answerUser);
    return [$checkAnswer, $checkRes];
}
