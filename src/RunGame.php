<?php

namespace RunGame;

use function Cli\Line;
use function Cli\Prompt;

const NUMBER_QUESTIONS = 3;

function startText(string $text)
{
    line("Welcome to the Brain Games!");
    $text;
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
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        line('Question: ' . $createNum);
        $userAnswer = prompt("Your answer");
        if ($correctAnswer !== $userAnswer) {
            answer($correctAnswer, $userAnswer, $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
    return;
}
