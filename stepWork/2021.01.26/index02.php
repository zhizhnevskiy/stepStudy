<?php

$arr1 = ["PHP", "JAVA", "C++", "PAYTON", "C#"];
$arr2 = ["PHP", "JAVA", "C++", "PAYTON", "C#"];
$arr3 = ["PHP", "JAVA", "C++", "PAYTON", "C#"];
$arr4 = ["PHP", "JAVA", "C++", "PAYTON", "C#"];
$arr5 = ["PHP", "JAVA", "C++", "PAYTON", "C#"];
$arr6 = ["PHP", "JAVA", "C++", "PAYTON", "C#"];

sort($arr1);
print_r($arr1);
echo "<br>";

rsort($arr2);
print_r($arr2);
echo "<br>";

asort($arr3);
print_r($arr3);
echo "<br>";

arsort($arr4);
print_r($arr4);
echo "<br>";

ksort($arr5);
print_r($arr5);
echo "<br>";

krsort($arr6);
print_r($arr6);
echo "<br>";
