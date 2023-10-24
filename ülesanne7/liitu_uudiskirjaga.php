<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 7</title>
</head>
<body>
    <?php
    function uudiskirja_saatmine() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kasutajanimi = $_POST["kasutajanimi"];
            $email = $_POST["email"];
            
            $teade = "Tere, $kasutajanimi! Täname uudiskirjaga liitumise eest.";
            mail($email, "Uudiskirjaga liitumise kinnitus", $teade);
        }
    }

    function uudiskirjaga_liitumine_vorm() {
        return '
        <form action="uudiskiri.php" method="post">
            <label for="kasutajanimi">Kasutajanimi:</label>
            <input type="text" name="kasutajanimi" id="kasutajanimi">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <input type="submit" value="Liitu uudiskirjaga">
        </form>';
    }

    uudiskirja_saatmine();

    ?>
</body>
</html>