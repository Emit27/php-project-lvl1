<?php

namespace Braingames\Games\BrainEven;

use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 99;
const NUMBER_QUESTIONS = 3;

function isAnswerEven(int $number)
{
     return ($number % 2 === 0) ? 'yes' : 'no';
}

function runGames()
{
    $userData = [];
    $texttoUser  = "Answer \"yes\" the number is even, otherwise answer \"no\". \n";
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $randomNumber = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = isAnswerEven($randomNumber);
        $userData[$i] = [$randomNumber, $correctAnswer];
    }
    start($userData, $texttoUser);
}
