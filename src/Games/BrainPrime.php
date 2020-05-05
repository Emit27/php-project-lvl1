<?php

namespace Braingames\Games\BrainPrime;

use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 99;
const NUMBER_QUESTIONS = 3;

function isEven(int $numb)
{
    return $numb % 2 === 0;
}

function checkAnswer($numb)
{
    return isEven($numb) ? 'yes' : 'no';
}

function text()
{
    return "Answer \"yes\" the number is even, otherwise answer \"no\". \n";
}

function run()
{
    $userData = [];
    $userData[] = text();
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $createNum = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = checkAnswer($createNum);
        $userData[] = [$createNum, $correctAnswer];
    }
    start($userData);
}
