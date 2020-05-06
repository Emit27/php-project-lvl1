<?php

namespace Braingames\Games\BrainProgress;

use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 200;
const MAX_PROGRESSION_LENGHT = 10;
const NUMBER_QUESTIONS = 3;

function createProgression()
{
    $beginStepProgression = 3;
    $endStepProgression = 8;
    $increment = rand($beginStepProgression, $endStepProgression);
    $startProgression = rand(MIN_RAND, MAX_RAND);
    do {
        $startProgression--;
        $endofProgression = $startProgression + ($increment * 9);
    } while ($endofProgression > MAX_RAND);
    $progressionNumbers = [];
    $progressionNumbers[] = $startProgression;
    for ($i = 1; $i < MAX_PROGRESSION_LENGHT; $i++) {
        $progressionNumbers[] = $startProgression = $startProgression + $increment;
    }
    $beginPosition = 1;
    $endPosition = 8;
    $numberPosition = rand($beginPosition, $endPosition);
    $correctAnswer = $progressionNumbers[$numberPosition];
    $progressionNumbers[$numberPosition] = '..';
    $progressionDisplay = implode(" ", $progressionNumbers);
    return [$progressionDisplay, $correctAnswer];
}

function text()
{
    return "What number is missing in the progression? \n";
}

function run()
{
    $userData = [];
    $userData[] = text();
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $userData[] = createProgression();
    }
    start($userData);
}
