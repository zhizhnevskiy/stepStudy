<?php
$x = 4;

if ($x > 2) {
    $y = sqrt($x);
} else {
    $y = $x ** 2;
}
echo $y . "<br>";


if ($x <= 3) {
    $y = $x ** 2;
} elseif (3 < $x || $x <= 5) {
    $y = $x + 5;
} else {
    $y = sqrt($x);
}
echo $y . "<br>";

// $countRub = 100;
// $countDoll = $countRub * 2.5334;
// echo $countDoll . "<br>";

$countDoll = 234400;

if ($countDoll < 100){
    $result = $countDoll * 2.553;
} elseif ($countDoll >= 100 && $countDoll < 10000) {
    $result = $countDoll * 2.532;
} else {
    $result = $countDoll * 2.531;
}
echo "Для покупки " . $countDoll . "$ - Вам необходимо предоставить " . $result . " рублей.<br>";


// $kitchenLength = 8;
// $kitchenWidth = 7;
// $squareKitchen = $kitchenLength * $kitchenWidth;

// $tile = 3;
// $squareTile = $tile * 2;

// $countTile = round($squareKitchen / $squareTile);
// echo "Для Вашей кухни с площадью " . $squareKitchen . "м2. Вам необходимо купить " . $countTile . " плиток.";

$kitchenLength = 8;
$kitchenWidth = 7;
$tile = 3;

$countLength = ceil($kitchenLength / $tile);
$countWidth = ceil($kitchenWidth / $tile);
$countTile = $countLength * $countWidth;

echo "Вам необходимо купить " . $countTile . " плиток.<br>";