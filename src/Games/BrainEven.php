<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\RunGame\startingGame as start;
use function Cli\line;

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

function runs()
{
    for ($i = 1; $i <= NUMBER_QUESTIONS; $i++) {
        $createNum = (string)rand(MIN_RAND, MAX_RAND);
        $correctAnswer = (string)checkAnswer($createNum);
        $text = (string)text();
        echo("rabot \n");
        start($text, $createNum, $correctAnswer);
    }
    return line("Congratulations, %s!", \BrainGames\RunGame\userName());
}
