<?php
$unswer = $_POST["name"];
$unswer2 = $_POST["email"];


$site = file_get_contents("https://www.onliner.by/");

$result1 = preg_replace("/:(|-)\)/iu", "<img src='smile-icon.png'>", $unswer);

$result2 = preg_replace("/\*(.*?)\*/iu", "<i>$1</i>", $unswer);

$result3 = preg_match_all("/минск(.*?)\b/iu", $site, $match);

$pattern = [
    "/:-?\)/iu",
    "/:-?\(/iu",
    "/:-P/iu",
    "/:-\*/iu"
];
$replacement = [
    "&#128512",
    "&#128524",
    "&#128539",
    "&#128536"
];
$result4 = preg_replace($pattern, $replacement, $unswer);

if (preg_match("/.*?@.*\..*\b/iu", $unswer2)) {
    $result5 = $unswer2;
} else {
    $result5 = "Invalid URL";
}

echo $str=$_POST["name"];
$regexp="/^[0-9A-Z_]{5,}@[0-9A-Z]{2,}\.[A-Z]{2,6}$/iu";
if (preg_match($regexp,$str)) {
    echo "Майл верный";
} else {
    echo "Майл не верный";
}
echo "hi";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h2>Ваш запрос:</h2>
<?php
echo "<h4>" . $result5 . "</h4>";
?>
</body>

</html>