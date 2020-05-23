<?php

namespace BrainGames\GameEngine;

use function Cli\Line;
use function Cli\Prompt;

const QUESTIONS_COUNT = 3;

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

function engineGameLaunch(array $gameData, $gameDescription)
{
    line("Welcome to the Brain Games!");
    line("{$gameDescription}\n");
    $name = userName();
    foreach ($gameData as [$questionUser, $correctAnswer]) {
        line('Question: ' . $questionUser);
        $userAnswer = prompt("Your answer");
        if ((string) $correctAnswer !== $userAnswer) {
            return answer($correctAnswer, $userAnswer, $name);
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
