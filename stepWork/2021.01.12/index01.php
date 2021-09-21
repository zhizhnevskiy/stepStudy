<?php

function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type. \n<br>";
}
echo makecoffee();
echo makecoffee("espresso");



function countCorn($a = 8, $b = 8)
{
    $countChess = $a * $b;
    $result = 1;
    $sum = 0;
    $i = 1;

    while ($i <= $countChess) {
        $sum += $result;
        $result *= 2;
        $i++;
    }

    return $sum;
}

echo countCorn() . "<br>";

function boldText($text = "Input text")
{
    echo "<b>$text</b>";
}
echo boldText("My new text");

$a = 1;
function test()
{
    echo $a;
}
echo test();
