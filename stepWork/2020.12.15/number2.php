<?php

$first = $_POST["first"];
$second = $_POST["second"];
$third = $_POST["third"];

$result = $first;
while ($result <= $second) {
    echo $result . "<br>";
    $result = $result + $third;
}

for ($i = $first; $i <= $second; $i += $third) {
    echo $i . "<br>";
}
