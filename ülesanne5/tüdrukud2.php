<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 5</title>
</head>
<body>
    <?php

    $tudrukud = array("Anni", "Anna", "Sandra", "Emma", "Eve", "Anette", "Mia", "Helena");

    echo "Esimene 3 nime:<br>";
    for ($i = 0; $i < 3; $i++) {
        echo $tudrukud[$i] . "<br>";
    }

    echo "Viimane nimi: " . end($tudrukud) . "<br>";

    $randomIndex = array_rand($tudrukud);
    echo "Suvaline nimi: " . $tudrukud[$randomIndex] . "<br>";
    ?>
</body>
</html>