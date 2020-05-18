<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\RunGame\startingGame as start;

use const BrainGames\RunGame\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 100;

function isPrime(int $number)
{
    if ($number == 1) {
        return false;
    }
    for ($divider = 2; $divider * $divider <= $number; $divider++) {
        if ($number % $divider == 0) {
            return false;
        }
    }
    return true;
}

function runGames()
{
    $gameData = [];
    $gameDescription = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $createNum = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = isPrime($createNum) ? 'yes' : 'no';
        $gameData[] = [$createNum, $correctAnswer];
    }
    start($gameData, $gameDescription);
}
