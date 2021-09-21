<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo json_encode($arr) . "<br>";

$arr2 = ["First" => 1, 2, 3, 4, 5, 6, 7, 8, 9];
echo json_encode($arr2) . "<br>";

$guestBook = [
    ["message" => "Hello", "name" => "Yura"],
    ["message" => "Hi", "name" => "Nadya"]
];
echo json_encode($guestBook) . "<br>";