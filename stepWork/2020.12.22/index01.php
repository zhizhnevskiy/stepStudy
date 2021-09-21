<?php
// echo 2 > 1 ? "Yes" : "No";

// if (2 > 1) {
//     echo "Yes";
// } else {
//     echo "No";
// }

$arr1 = [
    "somearray" => [
        6 => 5,
        13 => 9,
        "a" => 42
    ]
];

echo $arr1["somearray"][6] . "<br>";
echo $arr1["somearray"][13] . "<br>";
echo $arr1["somearray"]["a"] . "<br>";

$arr2 = [5 => 43, 32, 56, "b" => 12];
$arr3 = [5 => 43, 6 => 32, 7 => 56, "b" => 12];
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "<pre>";
print_r($arr3);
echo "</pre>";

$arr4 = [5 => 1, 12 => 2];
echo "<pre>";
print_r($arr4);
echo "</pre>";

$arr4[] = 56;
echo "<pre>";
print_r($arr4);
echo "</pre>";

$arr4["x"] = 42;
echo "<pre>";
print_r($arr4);
echo "</pre>";

unset($arr4[5]);
echo "<pre>";
print_r($arr4);
echo "</pre>";

if ($a == 5) :
    echo "a equais 5";
    echo "...";
elseif ($a == 6) :
    echo "a equals 6";
    echo "!!!";
else :
    echo "a is neither 5";
endif;
