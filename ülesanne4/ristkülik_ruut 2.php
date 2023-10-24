<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Ristkülik või ruut</h2>
    <form method="get" action="">
        Sisesta pikkus: <input type="number" name="length"><br>
        Sisesta laius: <input type="number" name="width"><br>
        <input type="submit" value="Otsusta">
    </form>
    <?php
    if (!empty($_GET['length']) && !empty($_GET['width'])) {
        $length = $_GET['length'];
        $width = $_GET['width'];

        if ($length == $width) {
            echo "Tegemist on ruuduga";
        } else {
            echo "Tegemist on ristkülikuga";
        }
    }
    ?>
</body>
</html>