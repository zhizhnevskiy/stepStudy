<?php

function myList($array)
{
    echo "<ul>";
    foreach ($array as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}

$myList = ["Иванов", "Петров", "Сидоров", "Жижневский"];
echo myList($myList);
