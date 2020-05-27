<?php

namespace BrainGames\GameEngine;

use function Cli\Line;
use function Cli\Prompt;

const QUESTIONS_COUNT = 3;

function engineGameLaunch(array $gameData, $gameDescription)
{
    line('Welcome to the Brain Games!');
    line("{$gameDescription}\n");
    $playerName = prompt('May I have your name? ');
    line("Hello, {$playerName}!\n");
    foreach ($gameData as [$question, $correctAnswer]) {
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");
        if ((string) $correctAnswer === $userAnswer) {
            line("Correct!\n");
        } else {
            line("{$userAnswer} is wrong answer! ;(. Correct answer was {$correctAnswer}");
            line("Let's try again, {$playerName}!\n");
            return;
        }
    }
    line("Congratulations, {$playerName}");
}
