<?php
$arr = explode(":", file_get_contents('number.txt'));
$arr[2]++;
print_r($arr);
file_put_contents("number.txt", implode(":", $arr));