<!-- <?php
        $birthday = explode("-", $_POST["birthday"]);
        $second = time() - mktime(0, 0, 0, $birthday[1], $birthday[2], $birthday[0]);
        $days = floor($second / (60 * 60 * 24));
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>До летних Олимпийских игр 2021 в Токио осталось:</h2>
    <?php
    $games = mktime(20, 10, 0, 7, 23, 2021);
    $today = time();
    $seconds = $games - $today;

    define('SECONDS_PER_MINUTE', 60);
    define('SECONDS_PER_HOUR', 3600);
    define('SECONDS_PER_DAY', 86400);

    $days = floor($seconds / SECONDS_PER_DAY);
    $seconds -= ($days * SECONDS_PER_DAY);

    $hours = floor($seconds / SECONDS_PER_HOUR);
    $seconds -= ($hours * SECONDS_PER_HOUR);

    $minutes = floor($seconds / SECONDS_PER_MINUTE);
    $seconds -= ($minutes * SECONDS_PER_MINUTE);
    echo ("<h3>До начала олимпиады осталось: $days дня, $hours часа, $minutes минут, $seconds секунд</h3>");
    ?>
</body>

</html>