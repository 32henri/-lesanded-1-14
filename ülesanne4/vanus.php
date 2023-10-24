<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Vanus</h2>
    <form method="get" action="">
        Sisesta esimese inimese vanus: <input type="number" name="age1"><br>
        Sisesta teise inimese vanus: <input type="number" name="age2"><br>
        <input type="submit" value="Leia vanem">
    </form>
    <?php
    if (!empty($_GET['age1']) && !empty($_GET['age2'])) {
        $age1 = $_GET['age1'];
        $age2 = $_GET['age2'];

        if ($age1 == $age2) {
            echo "Inimesed on sama vanad";
        } elseif ($age1 > $age2) {
            echo "Esimene inimene on vanem";
        } else {
            echo "Teine inimene on vanem";
        }
    }
    ?>
</body>
</html>