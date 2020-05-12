<?php

namespace Braingames\Games\BrainCalc;

use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 50;
const NUMBER_QUESTIONS = 3;
const ARRAY_OPERATION_SELECTION = 2;

function runGames()
{
    $userData = [];
    $texttoUser = "What is the result of the expression? \n";
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $numberRandFirst = rand(MIN_RAND, MAX_RAND);
        $numberRandSecond = rand(MIN_RAND, MAX_RAND);
        $operator = array('*','+','-');
        $randoperator = $operator[rand(0, ARRAY_OPERATION_SELECTION)];
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
        $userData[$i] = [$operatExpression, $operationResult];
    }
    start($userData, $texttoUser);
}
