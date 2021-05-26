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
        $kleuren = array("red", "blue", "green", "black", "brown")
    ?>
    <form action="advanced-2.php" method="get">
        <label for="textcolor">Tekst Kleur</label>
        <select name="kleur" id="">
            <option value=""></option>
            <option value="red">Rood</option>
            <option value="blue">Blauw</option>
            <option value="green">Groen</option>
            <option value="black">Zwart</option>
            <option value="brown">Bruin</option>
        </select><br>
        <label for="background">Achtergrond Kleur</label>
        <select name="kleuren" id="">
            <option value=""></option>
            <option value="red">Rood</option>
            <option value="blue">Blauw</option>
            <option value="green">Groen</option>
            <option value="black">Zwart</option>
            <option value="brown">Bruin</option>
        </select><br>
        <button type="submit">Verzenden</button>
    </form>
</body>
</html>