<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
input[type=text] {
    height: 20px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 20px 20px;
    background-repeat: no-repeat;
    margin-left: 0px;
    padding-left: 3px;
    transition: width 0.4s ease-in-out;
}
button{
    margin-top: 3px;
}
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 6px 10px 6px 10px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
ul{
    margin-top: 40px;
    margin-left: -20px;
}

    </style>
</head>
<body>
    
    <form action="" method="get">
        <label for="liedje">Favoriete song</label><br>
        <input type="text" name="song"><br>
        <label for="artiest">Artiest</label><br>
        <input type="text" name="artist"><br>
        <label for="titel">Titel</label><br>
        <input type="text" name="title"><br>
        <label for="release">Jaar van uitkomst</label><br>
        <input type="text" name="release"><br>
        <label for="soort">Muzieksoort</label><br>
        <input type="text" name="sort"><br>
        <button type="submit">Verzenden</button>
    </form>

    <!-- <ul> -->
        <!-- <li> -->
            <!-- <a href="http://localhost/php-advanced/3-Forms/taak03/mijnmuziek.php?song=tombstone&artist=rodwave&title=tombstone&release=2021&sort=hip+hop" class= "button">link</a> -->
        <!-- </li>
    </ul> -->


</body>
</html>