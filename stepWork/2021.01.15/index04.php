<?php
$handle = fopen("https://www.php.net/", "r");
$contents = "";
while (!feof($handle)) {
    $contents .= fread($handle, 1);
}
echo $contents;
