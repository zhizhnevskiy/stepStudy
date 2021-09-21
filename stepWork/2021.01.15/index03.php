<?php

$fileName = "counter.txt";

$fp = fopen($fileName, "r");
$counter = fread($fp, filesize($fileName));
fclose($fp);

echo $counter;

print_r($data);

