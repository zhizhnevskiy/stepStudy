<?php

$first = $_POST["q1"];
$second = $_POST["q2"];

if ($first == 4 && $second == "Лондон"){
    echo "Вы прошли тест";
} else {
    echo "Вы не прошли тест";
}
