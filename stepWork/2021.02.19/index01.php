<?php
session_start();
?>
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
<form action="login.php" method="POST">
    Пожалуйста авторизуйтесь: <input type="text" name="name">
    <input type="submit" value="ok">
    <br><br>
</form>
<a href="index02.php">Перейти на страницу №2</a>
<h4>Приветсвуем Вас, <?=$_SESSION["user"]?? "Вы не вошли!"?></h4>
<a href="logout.php">Выйти</a>
</body>
</html>
