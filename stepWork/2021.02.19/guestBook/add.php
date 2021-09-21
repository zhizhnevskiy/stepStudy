<?php

$data = json_decode(file_get_contents("data.json"));
$data[] = ["message" => $_POST["message"], "name" => $_POST["name"]];
file_put_contents("data.json", json_encode($data));

header("Location: main.php");