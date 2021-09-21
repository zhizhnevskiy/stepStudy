<?php

function bubble($arr)
{
    for ($n = count($arr) - 1; $n > 0; $n--) {
        for ($i = 0; $i < $n; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $buf = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $buf;
            }
        }
    }
    return $arr;
}

// $array = [2, 34, 2, 6, 3, 6, 7];
$array = ["Юрий", "Юра", "Юрик"];

print_r($array);

$array2 = bubble($array);

print_r($array2);
