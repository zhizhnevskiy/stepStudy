<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=table, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (5 > 3) {
    ?>
        <table>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
        </table>
    <?php
    }
    $a = 5;
    if ($a == 5) :
    ?>
        <span> A is equal to 5 </span>
        <br>
    <?php
    endif;

    $i = 1;
    while ($i <= 10) {
        echo $i++ . "<br>";
    }

    $i1 = 1;
    while ($i1 <= 10) :
        echo $i1 . "<br>";
        $i1++;
    endwhile;

    $i2 = 0;
    do {
        echo $i2;
    } while ($i2 > 0);

    for ($i = 1; $i < 10; $i++) {
        echo $i . "<br>";
    }

    for ($i = 1; $i < 10; $i++) :
        echo $i . "<br>";
    endfor;

    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i . "<br>";
    }

    $i3 = 1;
    for ( ; ; ) {
        if ($i3 > 10) {
            break;
        }
        echo $i3 . "<br>";
        $i3++;
    }
    ?>
</body>

</html>