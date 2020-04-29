<?php

namespace Braingames\RunGame;

use function Cli\Line;
use function Cli\Prompt;

function startText(string $text)
{
    line("Welcome to the Brain Games!");
    line($text);
}

function answer($correctAnswer, $userAnswer, $name)
{
    line("'%s' is wrong answer! ;(. Correct answer was '%s'", $userAnswer, $correctAnswer);
    line("Let's try again, %s!", $name);
}

function userName()
{
    $name = prompt('May I have your name? ', false, null);
    line("Hello, %s!", $name);
    line('');
    return $name;
}

function startingGame(array $userData)
{
    startText($userData[0]);
    $name = userName();
    for ($i = 1,$arrayValue = 3; $i <= $arrayValue; $i++) {
            [$createNum, $correctAnswer] = $userData[$i];
            line('Question: ' . $createNum);
            $userAnswer = prompt("Your answer");
        if ((string)$correctAnswer !== $userAnswer) {
            return answer($correctAnswer, $userAnswer, $name);
        }
            line('Correct!');
    }
    return line("Congratulations, %s!", $name);
}
