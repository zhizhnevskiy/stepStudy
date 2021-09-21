<?php

// header("Content-Type: text/plain");
// readfile("https://www.onliner.by/");

// foreach ($html as $key => $value) {
//    $key . "|" . $value;
// }


// $count = file_get_contents("read.txt");
// echo $count += 1;
// file_put_contents("read.txt", $count);


echo $count = file_get_contents("read.txt");
file_put_contents("read.txt", ++$count);

file_put_contents("file.csv", file_get_contents("https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data/csse_covid_19_time_series/time_series_covid19_confirmed_global.csv"));