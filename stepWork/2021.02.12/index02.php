<?php
$header = get_headers("https://ru.wikipedia.org/wiki/", 1);
print_r($header);