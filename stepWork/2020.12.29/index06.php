<?php
$answer = str_split($_POST["q1"]);

$numbers = [
    0 => "zero",
    1 => "one",
    2 => "two",
    3 => "three",
    4 => "four",
    5 => "five",
    6 => "six",
    7 => "seven",
    8 => "eigth",
    9 => "nine",
    10 => "ten"
];

$i = 0;
while ($i < count($answer)){
    echo $numbers[$answer[$i]] . "<br>";
    $i += 1;
}


// $numbers = [
//     "ноль",
//     "один",
//     "два",
//     "три",
//     "четыре",
//     "пять",
//     "шесть",
//     "семь",
//     "восемь",
//     "девять"
// ];




// foreach (str_split($_POST["n"]) as  $value) {
//     echo  " " . $numbers[$value];
// }