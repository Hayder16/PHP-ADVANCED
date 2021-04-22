<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $color = ["red","green","blue","yellow"];
    
    function schrijfKleur($color,$name){
        echo "<p style='color:".$color." ;'> Deze tekst is in de kleur $name</p>";
    }
    schrijfKleur($color[0], "red");
    schrijfKleur($color[1], "green");
    schrijfKleur($color[2], "blue");
    schrijfKleur($color[3], "yellow");
    
    ?>
</body>
</html>