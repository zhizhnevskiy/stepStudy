<?php
$birthday = explode("-", $_POST["birthday"]);
$second = time() - mktime(0, 0, 0, $birthday[1], $birthday[2], $birthday[0]);
$days = floor($second / (60 * 60 * 24));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Узнайте, сколько Вы прожили</h2>
    <form method="POST" action="?">
        Выберите Ваш день рождения: <input type="date" name="birthday">
        <input type="submit" name="submit" value="Узнать">
    </form>
    <h2>Вы прожили:</h2>
    <?php
    echo $days . " дней.";
    
    ?>
</body>

</html>