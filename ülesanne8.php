<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 8</title>
</head>

<body>
    <h1>Ülesanne 8</h1>
    <?php

    $kuupaev_kellaaeg = date("d.m.Y H:i");
    echo "<p>Kuupäev ja kellaaeg: $kuupaev_kellaaeg</p>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $synniaasta = intval($_POST["synniaasta"]);
        $praegune_aasta = date("Y");
        $vanus = $praegune_aasta - $synniaasta;
        echo "<p>Sina oled $vanus aastat vana.</p>";

        $jargmine_aasta = $praegune_aasta + 1;
        $vanus_jargmisel_aastal = $jargmine_aasta - $synniaasta;
        echo "<p>Järgmisel aastal saad $vanus_jargmisel_aastal aastat vanaks.</p>";
    } else {
        echo '
        <h2>Kui vana oled?</h2>
        <form method="post">
            <label for="synniaasta">Sünniaasta:</label>
            <input type="number" name="synniaasta" id="synniaasta">
            <input type="submit" value="Leia vanus">
        </form>';
    }

    $kooliaasta_lopp = date("Y") . "/" . (date("Y") + 1);
    $kooliaasta_lopu_kuupaev = date("Y-m-d", strtotime($kooliaasta_lopp . "-06-30"));
    $paevi_kooliaasta_lopuni = ceil((strtotime($kooliaasta_lopu_kuupaev) - time()) / (60 * 60 * 24));
    echo "<p>$kooliaasta_lopp kooliaasta lõpuni on jäänud $paevi_kooliaasta_lopuni päeva!</p>";

    $kuu = date("n");
    if ($kuu >= 3 && $kuu <= 5) {
        echo '<img src="kevad.jpg" alt="Kevad">';
    } elseif ($kuu >= 6 && $kuu <= 8) {
        echo '<img src="suvi.jpg" alt="Suvi">';
    } elseif ($kuu >= 9 && $kuu <= 11) {
        echo '<img src="sugis.jpg" alt="Sügis">';
    } else {
        echo '<img src="talv.jpg" alt="Talv">';
    }
    ?>
</body>

</html>
