<?php

namespace Braingames\Games\BrainCalc;

use function Cli\line;
use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 99;
const NUMBER_QUESTIONS = 3;

function text()
{
    return "What is the result of the expression? \n";
}

function run()
{
    $userData = [];
    $userData[] = text();
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $numberRandFirst = rand(MIN_RAND, MAX_RAND);
        $numberRandSecond = rand(MIN_RAND, MAX_RAND);
        $operator = array('*','+','-');
        $randoperator = $operator[rand(0, 2)];
        switch ($randoperator) {
            case '*':
                $operationResult = $numberRandFirst * $numberRandSecond;
                break;
            case '+':
                $operationResult = $numberRandFirst + $numberRandSecond;
                break;
            case '-':
                $operationResult = $numberRandFirst - $numberRandSecond;
                break;
        }

        $operatExpression = "{$numberRandFirst} {$randoperator} {$numberRandSecond}";
        $userData[] = [$operatExpression, $operationResult];
    }
    start($userData);
}
