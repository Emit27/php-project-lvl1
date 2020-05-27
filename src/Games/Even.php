<?php

namespace BrainGames\Games\Even;

use function BrainGames\GameEngine\engineGameLaunch as play;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 99;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function runGameBrainEven()
{
    $gameDescription = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $questionGame = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = isEven($questionGame) ? 'yes' : 'no';
        $gameData[] = [$questionGame, $correctAnswer];
    }
    play($gameData, $gameDescription);
}
