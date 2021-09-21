<?php
$string = "     first     word    ";
// echo strlen($string) . "<br>";
// echo strlen(trim($string)) . "<br>";

// $text = file_get_contents("https://www.onliner.by/");
// echo substr_count($text, "onliner");

echo str_replace("  ", " ", $string);
