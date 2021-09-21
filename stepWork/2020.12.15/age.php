<?php

$age = $_POST["age"];

if ($age < 6) {
    echo "Добро пожаловать малыш!";
} elseif ($age >= 6 && $age <=18){
    echo "Добро пожаловать школьник!";
} elseif ($age > 18 && $age <=65){
    echo "Добро пожаловать!";
} elseif ($age > 65){
    echo "Добро пожаловать уважаемый!";
}