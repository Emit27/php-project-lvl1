<?php

namespace Braingames\Games\BrainEven;

use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 99;
const NUMBER_QUESTIONS = 3;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function checkAnswer($number)
{
    return isEven($number) ? 'yes' : 'no';
}

function transmitText()
{
    return "Answer \"yes\" the number is even, otherwise answer \"no\". \n";
}

function runGames()
{
    $userData = [];
    $userData[] = transmitText();
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $createNum = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = checkAnswer($createNum);
        $userData[] = [$createNum, $correctAnswer];
    }
    start($userData);
}
