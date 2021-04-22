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

    function rekenUit($getal1,$getal2,$getal3){

        $antwoord = $getal1 + $getal2 + $getal3;

        return $antwoord;
    }
    $antwoord = rekenUit(4, 2, 9);
    echo "Als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst" . " " . $antwoord . '<br>';
    $antwoord = rekenUit(1, 2, 3);
    echo "Als ik de getallen 1, 2 en 3 bij elkaar optel, is de uitkomst" . " " . $antwoord . '<br>';
    $antwoord = rekenUit(40, 28, 91);
    echo "Als ik de getallen 40, 28 en 91 bij elkaar optel, is de uitkomst" . " " . $antwoord;

    ?>
</body>
</html>