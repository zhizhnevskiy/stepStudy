<?php

$num = $_POST["num"];
$i = 1;
$sum = 0;
// while ($i <= $num) {
//     $sum += $i;
//     $i++;
// }
// echo "Вы подтянитесь: <b>". $sum . "<b> раз.";

for ($i=1; $i <= $num; $i++){
    $sum += $i;
}
echo "Вы подтянитесь: <b>". $sum . "<b> раз.";