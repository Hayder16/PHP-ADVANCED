<!DOCTYPE html>
<html>
<body>

<?php

$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );

  foreach($student as $keys => $value){
    print "<pre>";
    echo $value;
    print "</pre>";
  }

?>

</body>
</html>