<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="add.php" method="POST">
    <textarea name="message" cols="30" rows="10"></textarea><br>
    <input type="text" name="name"><br>
    <input type="submit" value="ok">
</form>
<?php
include "replace.php";
$data = json_decode(file_get_contents("data.json"), true);
foreach ($data as $row) {
    if (!matReplace($row["message"])) {
        echo replace($row["message"] . " " . $row["name"] . "<br>\n");
    }
}
?>
</body>
</html>