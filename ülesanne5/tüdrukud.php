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

    sort($tudrukud);

    foreach ($tudrukud as $tudruk) {
        echo $tudruk . "<br>";
    }
    ?>
</body>
</html>