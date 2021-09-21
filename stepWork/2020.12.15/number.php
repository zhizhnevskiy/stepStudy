<?php

$first = $_POST["first"];
$second = $_POST["second"];
$third = $_POST["third"];

echo max($first, $second, $third);


// if ($first > $second){
//     $main = $first;
// } else {
//     $main = $second;
// }
// if ($main > $third){
//     $max = $main;
// } else {
//     $max = $third;
// }
// echo $max;


// if ($first > $second && $first > $third) {
//     echo "Большее число: " . $first;
// } elseif ($second > $third) {
//     echo "Большее число: " . $second;
// } else {
//     echo "Большее число: " . $third;
// }

