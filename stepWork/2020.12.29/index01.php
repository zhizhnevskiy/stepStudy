<?php

$array = [10, 20, 30, 40, 50];

$sum1 = 0;

for ($i = 0; $i < count($array); $i++) {
    $sum1 += $array[$i];
}

echo $sum1 . "<br>";

$sum2 = 0;

foreach ($array as $value) {
    $sum2 += $value;
}

echo $sum2 . "<br>";;