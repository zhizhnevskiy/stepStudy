<?php
echo $_SERVER["HTTP_USER_AGENT"];
$opts = [
    "http" => ["user_agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36"]
];
$context = stream_context_create($opts);
$site = file_get_contents("https://www.tut.by/", false, $context);
$result = preg_match_all("/коронавирус/iu", $site, $match);
print_r($match);