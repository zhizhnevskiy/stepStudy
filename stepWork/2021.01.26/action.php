<?php
if(!empty($_POST)){
    $row = "\n<----->\n" .
     $_POST["name"] . "\n" .
     $_POST["email"] . "\n" .
     $_POST["text"];
    file_put_contents("quest.txt", $row, FILE_APPEND);
    header("Location: ?");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $myQuest = file_get_contents("quest.txt");
    $records = explode("<----->",$myQuest);
    echo "<table border = '1'>";
    foreach($records as $rec){
        $row = explode("\n",trim($rec));
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo "</table>";
    ?>
<form action="?" method="POST">
    <input type="text" name="name">Name<br>
    <input type="text" name="email">E-mail<br>
    <input type="text" name="text"><br>
    <input type="submit" value="confirm"><br>
</form>

</body>

</html>