<?php
$number = file_get_contents("number.txt");
echo preg_replace("/\d/", "<img src='number/$0.jpg'>", $number);
file_put_contents("number.txt", ($number +1));
