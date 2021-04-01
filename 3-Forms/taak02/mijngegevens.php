<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
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

if($_POST = ['rood'])
{
    echo "<body style='background-color:red';>";
}
else{
    echo "<body style='background-color:white';>";
}
if($_POST = ['blauw'])
{
    echo "<body style='background-color:blue';>";
}
else{
    echo "<body style='background-color:white';>";
}
if($_POST = ['groen'])
{
    echo "<body style='background-color:green';>";
}
else{
    echo "<body style='background-color:white';>";
}
if($_POST = ['oranje'])
{
    echo "<body style='background-color:orange';>";
}
else{
    echo "<body style='background-color:white';>";
}
if($_POST = ['paars'])
{
    echo "<body style='background-color:purple';>";
}
else{
    echo "<body style='background-color:white';>";
}
?>

</body>
</html>