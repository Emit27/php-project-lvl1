<?php

namespace BrainGames\Games\Calc;

use function BrainGames\GameEngine\engineGameLaunch as start;

use const BrainGames\GameEngine\QUESTIONS_COUNT;

const MIN_RAND = 1;
const MAX_RAND = 50;
const ARRAY_OPERATION_SELECTION = 2;

function runGameBrainCalc()
{
    $gameDescription = "What is the result of the expression?";
    $gameData = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $numberRandFirst = rand(MIN_RAND, MAX_RAND);
        $numberRandSecond = rand(MIN_RAND, MAX_RAND);
        $operations = array('*','+','-');
        $operation = $operations[rand(0, ARRAY_OPERATION_SELECTION)];
        switch ($operation) {
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
        $question = "{$numberRandFirst} {$operation} {$numberRandSecond}";
        $gameData[] = [$question, $result];
    }
    start($gameData, $gameDescription);
}
