<?php

namespace BrainGames\Games\BrainGcd;

use function Cli\line;
use function BrainGames\RunGame\startingGame as start;

use const BrainGames\RunGame\QUESTIONS_COUNT;

const MIN_RAND = 10;
const MAX_RAND = 90;

function calculateСommonFactor($a, $b)
{
    if ($b == 0) {
        return $a;
    }
    return calculateСommonFactor($b, $a % $b);
}

function runGames()
{
    $gameDescription = "Find the greatest common divisor of given numbers.";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $numberRandFirst = rand(MIN_RAND, MAX_RAND);
        $numberRandSecond = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = calculateСommonFactor($numberRandFirst, $numberRandSecond);
        $question = "{$numberRandFirst}  {$numberRandSecond}";
        $gameData[] = [$question, $correctAnswer];
    }
    start($gameData, $gameDescription);
}
