<?php

$login = $_POST["login"];
$password = $_POST["password"];

$myLogin = "admin";
$myPassword = "123";


if ($login === $myLogin && $password === $myPassword) {
    echo "Добро пожаловать!";
} else {
    echo "Не правильный логин или пароль";
}
