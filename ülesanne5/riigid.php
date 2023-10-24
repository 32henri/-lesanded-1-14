<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 5</title>
</head>
<body>
    <?php

    $riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines", "Philippines","Canada","Philippines","South Sudan","Brazil", "Democratic Republic of the Congo","Indonesia","Syria","Sweden", "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France", "Kazakhstan","Cuba","Portugal","Czech Republic");

    $pikkus = 0;
    foreach ($riigid as $riik) {
        $riigi_pikkus = strlen($riik);
        if ($riigi_pikkus > $pikkus) {
            $pikkus = $riigi_pikkus;
        }
    }

    echo "Kõige pikema riigi nime märkide arv: $pikkus";
    ?>
</body>
</html>