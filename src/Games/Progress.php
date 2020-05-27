<?php

namespace BrainGames\Games\Progress;

use function BrainGames\GameEngine\engineGameLaunch as play;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 200;
const MAX_PROGRESSION_LENGHT = 10;

function outputProgressionСorrectAnswer()
{
    $beginStepProgression = 3;
    $endStepProgression = 8;
    $step = rand($beginStepProgression, $endStepProgression);
    $startOfProgression = rand(MIN_RAND, MAX_RAND);
    $progression = [];
    $progression = createProgression($startOfProgression, $step);
    $progressItemAddress = array_rand($progression);
    $correctAnswer = $progression[$progressItemAddress];
    $progression[$progressItemAddress] = '..';
    $questionGame = implode(" ", $progression);
    return [$questionGame, $correctAnswer];
}

function createProgression($startOfProgression, $step)
{
    for ($i = 0; $i < MAX_PROGRESSION_LENGHT; $i++) {
        $progression[] = $startOfProgression + $step * $i;
    }
    return  $progression;
}

function runGameBrainProgression()
{
    $gameDescription = "What number is missing in the progression?";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $gameData[] = outputProgressionСorrectAnswer();
    }
    play($gameData, $gameDescription);
}
