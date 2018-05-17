<?php
function funct ($a, $b)
{
    if ($a > $b) {
        $answer = "a > b";

    } else {
        $answer =  "a < b";
    }
    return $answer;
}

$a = 5;
$b = 7;

echo funct($a, $b)."\n";

// рекурсия

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

echo recursion($a);