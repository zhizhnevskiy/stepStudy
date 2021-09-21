<?php
$array = ["one", 2, "3", 4, "five"];
$array2 = [8, 12];

echo count($array) . "<br>";

echo array_sum($array) . "<br>";

print_r(array_merge($array, $array2));
echo "<br>";

echo array_product($array) . "<br>";

print_r(array_reverse($array));
echo "<br>";

echo array_search("five", $array) . "<br>";

$array2 = ["one", 2, "3", 4, "five"];

if (in_array("3", $array2)) {
    echo "Find string 3";
}
