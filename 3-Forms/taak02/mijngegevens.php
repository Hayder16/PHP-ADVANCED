<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $change=$_POST['colors'];
    echo "<style>body{background-color:" .$change.";}</style>";
    ?>
</head>
<body>
    <?php

        echo $_POST['voornaam'];
        echo "<br>";
        echo $_POST['gender'];
        echo "<br>";
        echo $_POST['achternaam'];
        echo "<br>";
        echo $_POST['klas'];
        echo "<br>";
        echo $_POST['leeftijd'];
        echo "<br>";
        echo $_POST['adres'];
        echo "<br>";
        echo $_POST['plaats'];
        echo "<br>";
        echo $_POST['band'];

    ?>
</body>
</html>