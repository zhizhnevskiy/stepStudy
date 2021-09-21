<?php
echo time(); //1611936338
echo "<br>";
echo microtime(); //0.05173500 1611936550
echo "<br>";
echo microtime(TRUE); //1611936550.0517

$time_start = microtime(1);
for ($i = 0; $i < 1000; $i++) {
    # code...
}
$time_end = microtime(1);
$time = $time_end - $time_start;
echo "Ничего не делал $time"; //Ничего не делал 1.1205673217773E-5
echo "<br>";

$today = getdate();
print_r($today);
echo "<br>";

date_default_timezone_set("Europe/Minsk");
echo date("H-m-d-Y");
echo "<br>";

echo date("M-d-Y (l)", mktime(0, 0, 0, 4, 24, 1984)); //Apr-24-1984 (Tuesday)

$dayWeek = [
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"
];