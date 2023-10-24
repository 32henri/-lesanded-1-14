<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 10</title>
    <style>
        /* CSS here */
        body {
            font-family: Arial, sans-serif;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: blue;
            cursor: pointer;
        }

        #content {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Ülesanne 10</h2>

    <?php
    function onLubatudLeht($leht)
    {
        $lubatudLehed = ['leht1', 'leht2', 'leht3', 'leht4'];
        return in_array($leht, $lubatudLehed);
    }

    if (isset($_GET['leht'])) {
        $leht = $_GET['leht'];
        if (onLubatudLeht($leht)) {
            $lehtFail = $leht . '.html';
            if (file_exists($lehtFail)) {
                echo file_get_contents($lehtFail);
                exit;
            } else {
                echo 'Lehte ei eksisteeri!';
            }
        } else {
            echo 'Turvalisuse viga: Ei ole lubatud juurdepääs!';
        }
    }
    ?>
    <ul>
        <li><a href="index.php?leht=leht1">Leht 1</a></li>
        <li><a href="index.php?leht=leht2">Leht 2</a></li>
        <li><a href="index.php?leht=leht3">Leht 3</a></li>
        <li><a href="index.php?leht=leht4">Leht 4</a></li>
        <li><a href="index.php?leht=leht5">Leht 5</a></li>
    </ul>
    <div id="content">
        <!-- The content of the selected page will appear here -->
    </div>
</body>
</html>
