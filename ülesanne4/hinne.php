<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Hinne</h2>
    <form method="get" action="">
        Sisesta Kontrolltöö punktide arv: <input type="number" name="points"><br>
        <input type="submit" value="Kontrolli">
    </form>
    <?php
    if (!empty($_GET['points'])) {
        $points = $_GET['points'];

        if ($points > 10) {
            echo "SUPER!";
        } elseif ($points >= 5 && $points <= 9) {
            echo "TEHTUD!";
        } elseif ($points < 5) {
            echo "KÄSIN!";
        } else {
            echo "SISESTA OMA PUNKTID!";
        }
    }
    ?>
</body>
</html>