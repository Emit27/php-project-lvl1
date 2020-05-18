<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\RunGame\startingGame as start;

use const BrainGames\RunGame\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 99;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function runGames()
{
    $gameDescription = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $randomNumber = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        $gameData[] = [$randomNumber, $correctAnswer];
    }
    start($gameData, $gameDescription);
}
