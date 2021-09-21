<?php

$val1 = $_POST["val1"];

$countDoll = 2.52;
$countEuro = 3.25;
$countRub = 0.0343;

echo "Вы можете купить: " . round($val1 / $countDoll, 2) . " долларов.<br>";
echo "Вы можете купить: " . round($val1 / $countEuro, 2) . " евро.<br>";
echo "Вы можете купить: " . round($val1 / $countRub, 2) . " рублей.<br>";
