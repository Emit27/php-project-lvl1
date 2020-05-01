<?php

namespace Braingames\Games\BrainGcd;

use function Cli\line;
use function Braingames\RunGame\startingGame as start;

const MIN_RAND = 1;
const MAX_RAND = 50;
const NUMBER_QUESTIONS = 3;

function text()
{
    return "Find the greatest common divisor of given numbers. \n";
}

function nodGcd($a, $b)
{
    if ($b == 0) {
        return $a;
    }
    return nodGcd($b, $a % $b);
}

function run()
{
    $userData = [];
    $userData[] = text();
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $numberRandFirst = rand(MIN_RAND, MAX_RAND);
        $numberRandSecond = rand(MIN_RAND, MAX_RAND);
        $correctAnswer = nodGcd($numberRandFirst, $numberRandSecond);
        $createNum = "{$numberRandFirst}  {$numberRandSecond}";
        $userData[] = [$createNum, $correctAnswer];
    }
    start($userData);
}
