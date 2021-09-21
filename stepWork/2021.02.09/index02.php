<?php
// файл не найден
//header("HTTP/1.0 404 Not Found");

// редирект
//header("Location: https://www.tut.by/");

// тип файла
header("Content-type: application/pdf");

// имя файла
header("Content-Disposition: attachment; filename=two.pdf");

// файл
readfile("one.pdf");