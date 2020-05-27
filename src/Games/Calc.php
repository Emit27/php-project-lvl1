<?php

namespace BrainGames\Games\Calc;

use function BrainGames\GameEngine\engineGameLaunch as play;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 50;

function runGameBrainCalc()
{
    $gameDescription = "What is the result of the expression?";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $numberRandFirst = rand(MIN_RAND, MAX_RAND);
        $numberRandSecond = rand(MIN_RAND, MAX_RAND);
        $operations = array('*', '+', '-');
        $key = array_rand($operations);
        switch ($operations[$key]) {
            case '*':
                $result = $numberRandFirst * $numberRandSecond;
                break;
            case '+':
                $result = $numberRandFirst + $numberRandSecond;
                break;
            case '-':
                $result = $numberRandFirst - $numberRandSecond;
                break;
        }
        $question = "{$numberRandFirst} {$operations[$key]} {$numberRandSecond}";
        $gameData[] = [$question, $result];
    }
    play($gameData, $gameDescription);
}
