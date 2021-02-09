<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Even\startEven;
use function Brain\Games\Calc\startCalc;
use function Brain\Games\Gcd\startGcd;


function startEngine($nameGame, $name)
{
    if ($nameGame === 'even') {
        $rulesGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    } elseif ($nameGame === 'calc') {
        $rulesGame = 'What is the result of the expression?';
    } elseif ($nameGame === 'gcd') {
        $rulesGame = 'Find the greatest common divisor of given numbers.';
    }

    line("{$rulesGame}");
    $success = 0;
    $i = 0;
    while ($i < 3) {
        $resultGame = startGame($nameGame);
        if ($resultGame[0] === true) {
            line('Correct!');
            $success++;
        } else {
            line("'{$resultGame[0]}' is wrong answer ;(. Correct answer was '{$resultGame[1]}'");
            line("Let's try again, %s!", $name);
        }
        $i++;
    }
    if ($success == $i) {
        line("Congratulations, %s!", $name);
    } else {
        line("Try again later, %s!", $name);
    }
}

function startGame($nameGame)
{
    if ($nameGame === 'even'){
        $res = startEven();
    } elseif ($nameGame === 'calc') {
        $res = startCalc();
    } elseif ($nameGame === 'gcd') {
        $res = startGcd();
    }
    return $res;
}
