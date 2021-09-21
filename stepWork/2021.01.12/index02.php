<?php
$a = 1;
$b = 2;

function test()
{
    echo $a;
}
echo test();

function Sum()
{
    global $a, $b;
    $b = $a + $b;
}

Sum();
echo $b . "<br>";

function test2()
{
    static $a = 0;
    echo $a;
    $a++;
}
echo test2() . "<br>";
echo test2() . "<br>";
echo test2() . "<br>";
echo test2() . "<br>";
echo test2() . "<br>";

function plus(&$string)
{
    $string .= " + Петя<br>";
}
$str = "Ира";
plus($str);
echo $str;

function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0] + $input[1] . "<br>";
}
$input = [2, 4];
takes_array($input);

function myArraySum($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}
$newArray1 = [6, 4, 6, 9];
echo myArraySum($newArray1) . "<br>";


function myArraySum2($array)
{
    $multiply = 1;
    foreach ($array as $value) {
        $multiply *= $value;
    }
    return $multiply;
}
$newArray2 = [2, 4, 6, 8, 10];

echo myArraySum2($newArray2);
