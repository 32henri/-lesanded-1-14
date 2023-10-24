<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Ristkülik või ruut 2</h2>
    <form method="get" action="">
        Sisesta külg: <input type="number" name="side"><br>
        <input type="submit" value="Otsusta">
    </form>
    <?php
    if (!empty($_GET['side'])) {
        $side = $_GET['side'];

        if ($side > 0) {
            if ($side * $side == $side) {
                echo "Tegemist on ruuduga";
            } else {
                echo "Tegemist on riskülikuga";
            }
        } else {
            echo "Sisesta positiivne arv";
        }
    }
    ?>
</body>
</html>