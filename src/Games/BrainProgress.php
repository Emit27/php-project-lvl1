<?php

namespace BrainGames\Games\BrainProgress;

use function BrainGames\RunGame\startingGame as start;

use const BrainGames\RunGame\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 200;
const MAX_PROGRESSION_LENGHT = 10;

function passProgressionResponse()
{
    $beginStepProgression = 3;
    $endStepProgression = 8;
    $step = rand($beginStepProgression, $endStepProgression);
    $startofProgression = rand(MIN_RAND, MAX_RAND);
    $progressionPosition = [];
    $progressionPosition = createProgression($startofProgression, $step);
    $numberPosition = array_rand($progressionPosition);
    $correctAnswer = $progressionPosition[$numberPosition];
    $progressionPosition[$numberPosition] = '..';
    $outputProgression = implode(" ", $progressionPosition);
    return [$outputProgression, $correctAnswer];
}

function createProgression($startofProgression, $step)
{
    for ($i = 0; $i < MAX_PROGRESSION_LENGHT; $i++) {
        $progression[] = $startofProgression + $step * $i;
    }
    return  $progression;
}

function runGames()
{
    $gameDescription = "What number is missing in the progression?";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $gameData[] = passProgressionResponse();
    }
    start($gameData, $gameDescription);
}
