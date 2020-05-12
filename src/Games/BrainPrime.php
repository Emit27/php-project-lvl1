<?php

namespace Braingames\Games\BrainPrime;

use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 100;
const NUMBER_QUESTIONS = 3;

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

function checkAnswer($number)
{
    return isPrime($number) ? 'yes' : 'no';
}

function runGames()
{
    $userData = [];
    $texttoUser = "Answer \"yes\" if given number is prime. Otherwise answer \"no\". \n";
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $createNum = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = checkAnswer($createNum);
        $userData[$i] = [$createNum, $correctAnswer];
    }
    start($userData, $texttoUser);
}
