<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\GameEngine\engineGameLaunch as play;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 10;
const MAX_RAND = 90;

function calculateGcd($a, $b)
{
    if ($b == 0) {
        return $a;
    }
    return calculateGcd($b, $a % $b);
}

function runGameBrainGcd()
{
    $gameDescription = "Find the greatest common divisor of given numbers.";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $numberRandFirst = rand(MIN_RAND, MAX_RAND);
        $numberRandSecond = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = calculateDivisorGcd($numberRandFirst, $numberRandSecond);
        $question = "{$numberRandFirst} {$numberRandSecond}";
        $gameData[] = [$question, $correctAnswer];
    }
    play($gameData, $gameDescription);
}
