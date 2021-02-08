<?php

namespace Brain\Games\CheckEven;


function evenOrOdd(int $num)
{
    if (($num % 2) == 0) {
        $number = "yes";
    } else {
        $number = "no";
    }
    return $number;
}

function checkingAnswer(string $number, string $answer)
{
    if ($answer === $number) {
        return true;
    }
    return $answer;
}