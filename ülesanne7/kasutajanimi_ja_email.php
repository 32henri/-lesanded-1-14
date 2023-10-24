<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 7</title>
</head>
<body>
    <?php
    function muuda_kasutajanimi($kasutajanimi) {
        return strtolower($kasutajanimi);
    }

    function genereeri_email($kasutajanimi) {
        return $kasutajanimi . "@hkhk.edu.ee";
    }

    function genereeri_kood() {
        return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 7);
    }
    ?>
</body>
</html>