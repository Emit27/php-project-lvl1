<?php

namespace Games\BrainCalc;

use function RunGame\startingGame;

const MIN_RAND = 1;
const MAX_RAND = 99;

function text()
{
    "What is the result of the expression? \n";
}

function runs()
{
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
    $text = text();
    $operationResult = $operationResult;
    $operatExpression = "{$numberRandFirst} {$randoperator} {$numberRandSecond}";
    startingGame($text, $operatExpression, $operationResult);
}
runs();
