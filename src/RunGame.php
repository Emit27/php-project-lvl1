<?php

namespace Braingames\RunGame;

use function Cli\Line;
use function Cli\Prompt;

const UNPACK_ARRAY = 3;

function userName()
{
    $name = prompt('May I have your name? ', false, null);
    line("Hello, %s!", $name);
    line('');
    return $name;
}

function answer($correctAnswer, $userAnswer, $name)
{
    line("'%s' is wrong answer! ;(. Correct answer was '%s'", $userAnswer, $correctAnswer);
    line("Let's try again, %s!", $name);
}

function startingGame(array $userData, $texttoUser = '')
{
    line("Welcome to the Brain Games!");
    line($texttoUser);
    $name = userName();
    for ($i = 1; $i <= UNPACK_ARRAY; $i++) {
            [$randomNumber, $correctAnswer] = $userData[$i];
            line('Question: ' . $randomNumber);
            $userAnswer = prompt("Your answer");
        if ((string)$correctAnswer !== $userAnswer) {
            return answer($correctAnswer, $userAnswer, $name);
        }
            line('Correct!');
    }
    return line("Congratulations, %s!", $name);
}
