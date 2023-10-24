<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 5</title>
</head>
<body>
    <?php

    $hiina_nimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳", "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪", "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

    sort($hiina_nimed);

    echo "Esimene nimi: " . $hiina_nimed[0] . "<br>";
    echo "Viimane nimi: " . end($hiina_nimed);
    ?>
</body>
</html>