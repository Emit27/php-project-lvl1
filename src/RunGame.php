<?php

namespace BrainGames\RunGame;

use function Cli\line;
use function Cli\prompt;

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

function startingGame($text, $createNum, $correctAnswer)
{
    startText($text);
    $name = userName();
        line('Question: ' . $createNum);
        $userAnswer = prompt("Your answer");
    if ($correctAnswer !== $userAnswer) {
        answer($correctAnswer, $userAnswer, $name);
        return;
    }
    return line('Correct!');
}