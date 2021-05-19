<!DOCTYPE html>
<html>
<body>
    <form>
        <label for="Klas">Kies een je klas:</label>
        <select name="Klas" id="Klass">
<?php

    define('MAX_OPTIONS', 6);

    $klassen = 
    array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

    foreach($klassen as $klas){
        echo "<ul><li><option>  $klas  </option></li></ul>";
    }

?>
        <button type="submit">Send</button>
        </select>
    </form>


</body>
</html>