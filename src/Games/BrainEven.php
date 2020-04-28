<?php

namespace BrainGames\Games\BrainEven;

use function Cli\line;
use function BrainGames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 99;

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
    return line("Answer \"yes\" the number is even, otherwise answer \"no\". \n");
}

function runs()
{
    $createNum = rand(MIN_RAND, MAX_RAND);
    $correctAnswer = checkAnswer($createNum);
    $text = text();
    start($text, $createNum, $correctAnswer);
}
