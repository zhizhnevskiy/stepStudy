<?php
$header = get_headers($_POST["URL"], 1);
//print_r($header);
//echo $header["Content-Type"];
header('Content-Type: '.$header['Content-Type']);
echo file_get_contents($_POST["URL"]);