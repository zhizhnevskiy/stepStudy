<?php
$answer =  $_POST["q1"];

switch ($answer) {
    case "Привет":
        $str = "Hi";
        break;

    case "Пока":
        $str = "Bye";
        break;

    case "Здравствуйте":
        $str = "Hello";
        break;

    case "До свидания":
        $str = "Goodbye";
        break;

    case "Как дела":
        $str = "How are you";
        break;

    default:
        $str = "нет в словаре";
        break;
}
echo "Слово \"$answer\" переводится как - \"$str\".";






// $numbers = [
//     "Привет" => "Hi",
//     "Пока" => "Bye",
//     "Здравствуйте" => "Hello",
//     "До свидания" => "Goodbye",
//     "Как дела" => "How are you"
// ];

// echo $numbers[$answer];

// if (isset($numbers[$answer])){
//     echo $numbers[$answer];
// } else {
//     echo "Такого нет";
// }
