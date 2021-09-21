<?php

// echo $text = str_shuffle(file_get_contents('name.txt'));

file_put_contents("name.txt", str_shuffle(file_get_contents('name.txt')));
