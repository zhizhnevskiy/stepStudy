<?php
// if (preg_match("/@/", "step@mail.com")) {
//     echo "Yes, we have you e-mail<br>";
// } else {
//     echo "invalid e-mail<br>";
// }

// if (preg_match("/php/i", "PHP is programing language.<br>")) {
//     echo "Found word PHP.<br>";
// } else {
//     echo "Not found word PHP.<br>";
// }

// $str = "hypertext language programming";
// $chars = preg_split("/ /", $str);
// print_r($chars);
// echo "<br>";

// $string = "Hello Boys and Girls, what you do today?";
// $result = preg_split("/b|d/i", $string);
// print_r($result);
// echo "<br>";

// $string2 = " not to be";
// $pat = "/^((be)|(not\sto\sbe))$/i";
// if (preg_match($pat, $string2)) {
//     echo "Found<br>";
// } else {
//     echo "Not found<br>";
// }

// $string3 = "Hello <b>World</b>!!!";
// $pattern = "/<b>.*<\/b>/i";
// $replace = "<i>$0</i>";
// $string4 = preg_replace($pattern, $replace, $string3);
// echo $string4;
// echo "<br>";

$string4 = "Hello <b>World</b>!!! <b>I</b> see <b>you</b>!!!";
$pattern1 = "/<b>(.*?)<\/b>/i";
$replace1 = "<i>$1</i>";
$string5 = preg_replace($pattern1, $replace1, $string4);
echo $string5;
echo "<br>";