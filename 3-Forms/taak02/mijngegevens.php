<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <?php
    $change=$_POST['kleur'];
    echo "<style>body{background-color:" .$change. ";}</style>";
    ?>
</head>
<body>

<?php



echo $_POST['naam'] . " " . $_POST['achternaam'] . "<br>";
echo $_POST['klas'] . "<br>";
echo $_POST['leeftijd'] . "<br>";
echo $_POST['adres'] . "<br>";
echo $_POST['plaatsnaam'] . "<br>";
echo $_POST['fband'] . "<br>";
echo $_POST['radio'] . "<br>";
echo $_POST['kleur'] . "<br>";


?>

</body>
</html>