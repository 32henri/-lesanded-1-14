<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Juubel</h2>
    <form method="get" action="">
        Sisesta sünniaasta: <input type="number" name="birthYear"><br>
        <input type="submit" value="Kontrolli">
    </form>
    <?php
    if (!empty($_GET['birthYear'])) {
        $birthYear = $_GET['birthYear'];

        if ($birthYear % 5 == 0) {
            echo "See on juubeliaasta";
        } else {
            echo "See ei ole juubeliaasta";
        }
    }
    ?>
</body>
</html>